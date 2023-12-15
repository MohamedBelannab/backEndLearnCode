<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function index(){
        $Blogs=Blogs::all();
        return view("admin/blogs")->with("blogs",$Blogs);

    }
    public function store(Request $request){
        $request->validate([
            'content' => 'required|string',
            'title' => 'required|string',
        ]);
        $blogs=new Blogs();
        $blogs->content=$request->content;
        $blogs->title=$request->title;
        $blogs->save();
        return redirect()->back()->with('success', 'blogs added successfully');
    }

    public function edit($id){
        $blogs=Blogs::find($id);
        return view("admin/editblogs",compact("blogs"));
    }
    public function update(Request $request,$id){
        $blogs=Blogs::find($id);
        $blogs->content=$request->content;
        $blogs->title=$request->title;
        $blogs->update();
        return redirect("/blogs")->with("status","Data updated successfully");
    
    }  
    
    public function removeBlogs($id ){
        $blogs = Blogs::find($id);
        if($blogs){
            $blogs->delete() ;
            return redirect()->back()->with('success', 'blogs added successfully');
        }
        else{
            echo 'you dont have the permission';
        }      
}
}
