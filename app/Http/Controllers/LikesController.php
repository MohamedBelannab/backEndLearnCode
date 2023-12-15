<?php

namespace App\Http\Controllers;

use App\Models\likes;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function index(){
        $Likes=likes::all();
        return view("admin/likes")->with("likes",$Likes);

    }
    public function store(Request $request){
        $request->validate([
            'idBlog' => 'required|integer|exists:blogs,id',
            'number' => 'required|string',

        ]);
        $likes=new likes();
        $likes->idBlog=$request->idBlog;
        $likes->number=$request->number;
        $likes->save();
        return redirect()->back()->with('success', 'likes added successfully');
    }

    public function edit($id){
        $likes=likes::find($id);
        return view("admin/editlikes",compact("likes"));
    }
    public function update(Request $request,$id){
        $likes=likes::find($id);
        $likes->idBlog=$request->idBlog;
        $likes->number=$request->number;
        $likes->update();
        return redirect("/likes")->with("status","Data updated successfully");
    
    }  
    
    public function removeLikes($id ){
        $likes = likes::find($id);
        if($likes){
            $likes->delete() ;
            return redirect()->back()->with('success', 'likes added successfully');
        }
        else{
            echo 'you dont have the permission';
        }      
}
    //
}
