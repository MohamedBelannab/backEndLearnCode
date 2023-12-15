<?php

namespace App\Http\Controllers;

use App\Models\userresults;
use Illuminate\Http\Request;

class UserresultsController extends Controller
{
    //

    public function index()
    {
        // Méthode pour afficher tous les utilisateurs
        $userresults = userresults::all();
        return view('admin/userresults', compact('userresults'));
    }

    public function store(Request $request)
    {
        // Validation rules for the user input
        $request->validate([
            'idUser' => 'required|integer|exists:users,id',
            'idQuiz' => 'required|integer|exists:quizzes,id',
            'score' => 'required|numeric',
        ]);
        $userresults=new userresults();
        $userresults->idUser=$request->idUser;
        $userresults->idQuiz=$request->idQuiz;
        $userresults->score=$request->score;
        $userresults->save();
        return redirect()->back()->with('success', 'userresults added successfully');

    }


    public function edit($id){
        $userresults=userresults::find($id);
        return view("admin/edituserresults",compact("userresults"));
    }
    public function update(Request $request,$id){
        $userresults=userresults::find($id);
        $userresults->idUser=$request->idUser;
        $userresults->idQuiz=$request->idQuiz;
        $userresults->score=$request->score;
        $userresults->update();
        return redirect("/users")->with("status","Data updated successfully");
    
    }  

    public function removusers($id){
        $userresults = userresults::find($id);
        if($userresults){
            $userresults->delete() ;
            return redirect()->back()->with('success', 'userresults added successfully');
        }
        else{
            echo 'you dont have the permission';
        }      
}
}
