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
        return view('admin/extrauser', compact('extrauser'));
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
        return view("admin/editextrauser",compact("extrauser"));
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
}
