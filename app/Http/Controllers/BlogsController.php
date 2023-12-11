<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function index(){
        // $blogs=Blogs::all();
        return view("admin/blogs");
    }
}
