<?php

namespace App\Http\Controllers;

use App\Models\anserwers;
use Illuminate\Http\Request;

class AnserwersController extends Controller
{
    //
    public function index(){
        $anserwers=anserwers::all();
        return view("admin/Anserwers/anserwers")->with("anserwers",$anserwers);

    }
    public function store(Request $request){
        $request->validate([
            'idQuestion' => 'required|integer|exists:questions,id',
            'body' => 'required|string',
            'correct' => 'required|boolean',
        ]);
        $anserwers=new anserwers();
        $anserwers->idQuestion=$request->idQuestion;
        $anserwers->body=$request->body;
        $anserwers->correct=$request->correct;
        $anserwers->save();
        return redirect()->back()->with('success', 'anserwers added successfully');
    }

    public function edit($id){
        $anserwers=anserwers::find($id);
        return view("admin/Anserwers/editanserwers",compact("anserwers"));
    }
    public function update(Request $request,$id){
        $anserwers=anserwers::find($id);
        $anserwers->idQuestion=$request->idQuestion;
        $anserwers->body=$request->body;
        $anserwers->correct=$request->correct;
        $anserwers->update();
        return redirect("/anserwers")->with("status","Data updated successfully");
    
    }  
    
    public function removeanserwers($id ){
        $anserwers = anserwers::find($id);
        if($anserwers){
            $anserwers->delete() ;
            return redirect()->back()->with('success', 'anserwers added successfully');
        }
        else{
            echo 'you dont have the permission';
        }      
}
}
