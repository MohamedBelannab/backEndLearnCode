<?php

namespace App\Http\Controllers;

use App\Models\extrauser;
use Illuminate\Http\Request;

class ExtrauserController extends Controller
{
    //
    
    public function index()
    {
        // Méthode pour afficher tous les utilisateurs
        $extrauser = extrauser::all();
        return view('admin/Extrauser/extrauser', compact('extrauser'));
    }

    public function store(Request $request)
    {
        // Validation rules for the user input
        $request->validate([
            'idUser' => 'required|integer|exists:users,id',
            'Education' => 'required|string',
            'WorkExperience' => 'required|string',
            'bio' => 'required|string',
            'MySocials' => 'required|string',
        ]);
        $extrauser=new extrauser();
        $extrauser->idUser=$request->idUser;
        $extrauser->Education=$request->Education;
        $extrauser->WorkExperience=$request->WorkExperience;
        $extrauser->bio=$request->bio;
        $extrauser->MySocials=$request->MySocials;
        $extrauser->save();
        return redirect()->back()->with('success', 'extrauser added successfully');

    }


    public function edit($id){
        $extrauser=extrauser::find($id);
        return view("admin/Extrauser/editextrauser",compact("extrauser"));
    }
    public function update(Request $request,$id){
        $extrauser=extrauser::find($id);
        $extrauser->idUser=$request->idUser;
        $extrauser->Education=$request->Education;
        $extrauser->WorkExperience=$request->WorkExperience;
        $extrauser->bio=$request->bio;
        $extrauser->MySocials=$request->MySocials;
        $extrauser->update();
        return redirect("/extrauser")->with("status","Data updated successfully");
    
    }  

    public function removusers($id){
        $extrauser = extrauser::find($id);
        if($extrauser){
            $extrauser->delete() ;
            return redirect()->back()->with('success', 'extrauser added successfully');
        }
        else{
            echo 'you dont have the permission';
    }  
    
    
}


    public function add(Request $request)
    {
        // Validation rules for the user input
        $request->validate([
            'idUser' => 'required|integer|exists:users,id',
            'Education' => 'required|string',
            'WorkExperience' => 'required|string',
            'bio' => 'required|string',
            'MySocials' => 'required|string',
        ]);
        $extrauser=new extrauser();
        $extrauser->idUser=$request->idUser;
        $extrauser->Education=$request->Education;
        $extrauser->WorkExperience=$request->WorkExperience;
        $extrauser->bio=$request->bio;
        $extrauser->MySocials=$request->MySocials;
        $extrauser->save();
        return redirect()->back()->with('success', 'extrauser added successfully');

    }
    public function updateUser(Request $request, $id)
    {
        try {
            $extrauser = Extrauser::findOrFail($id);

            // Validation rules for the user input
            $request->validate([
                'idUser' => 'required|integer|exists:users,id',
                'Education' => 'required|string',
                'WorkExperience' => 'required|string',
                'bio' => 'required|string',
                'MySocials' => 'required|string',
            ]);

            $extrauser->update([
                'idUser' => $request->idUser,
                'Education' => $request->Education,
                'WorkExperience' => $request->WorkExperience,
                'bio' => $request->bio,
                'MySocials' => $request->MySocials,
            ]);

            return response()->json(['message' => 'Extrauser updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error updating extrauser', 'error' => $e->getMessage()], 500);
        }
    }
    public function destroy($id)
    {
        try {
            $extraUser = Extrauser::findOrFail($id);
            $extraUser->delete();

            return response()->json([
                'success' => true,
                'message' => 'Extra user deleted successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting extra user: ' . $e->getMessage(),
            ], 500);
        }
    }
    public function getExtraById(Request $request, $id)
    {
        try {
            $data = Extrauser::join('users', 'extrauser.idUser', '=', 'users.id')
                ->select('extrauser.*', 'users.name', 'users.email') 
                ->where('extrauser.idUser', $id)
                ->get();
    
            return response()->json([
                'success' => true,
                'data' => $data,
                'message' => 'Data retrieved successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving data: ' . $e->getMessage(),
            ], 500);
        } }
}
