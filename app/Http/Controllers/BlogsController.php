<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
class BlogsController extends Controller
{
    use HttpResponses;
    public function index(){
        $Blogs=Blogs::all();
        return view("admin/Blogs/blogs")->with("blogs",$Blogs);
    }
    public function store(Request $request){
        $request->validate([
            'content' => 'required|string',
            'title' => 'required|string',
            'remarque' => 'required|string',
            'slug' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $blogs=new Blogs();
        $blogs->content=$request->content;
        $blogs->title=$request->title;
        $blogs->remarque=$request->remarque;
        $blogs->slug=$request->slug;
        $blogs->slug=uniqid();
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fillename=time() . '.' .$extension;
            $file->move('uploads_blogs/blogs', $fillename);
            $blogs->img=$fillename;
        }else {
            return $request;
            $blogs->img=" "; // or set a default image
        }
        $blogs->save();
        return redirect()->back()->with('success', 'blogs added successfully');
    }

    public function edit($id){
        $blogs=Blogs::find($id);
        return view("admin/Blogs/editblogs",compact("blogs"));
    }
    public function update(Request $request,$id){
        $blogs=Blogs::find($id);
        $blogs->content=$request->content;
        $blogs->title=$request->title;
        $blogs->remarque=$request->remarque;
        $blogs->slug=$request->slug;
        $blogs->slug = uniqid();
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fillename=time() . '.' .$extension;
            $file->move('uploads_blogs/blogs', $fillename);
            $blogs->img=$fillename;
        }else {
            return $request;
            $blogs->img=" "; // or set a default image
        }       
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

    public function getAllBlogs()
    {
        $blogs = Blogs::all();

        return response()->json([
            'success' => true,
            'data' => $blogs,
            'message' => 'Blogs retrieved successfully',
        ]);
    }

    public function Blog($slug)
    {
        $blogs = Blogs::where('slug',$slug)->first();

        return $this->success($blogs);
    }
}
