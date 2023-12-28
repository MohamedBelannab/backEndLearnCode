<?php

namespace App\Http\Controllers;

use App\Models\anserwers;
use App\Models\Blogs;
use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function CountDashbord()
{
    $userCount = User::count();
    $languageCount = Language::count();
     $blogs = Blogs::count();
     $anserwers = anserwers::count();
    return view('/Welcome', compact('userCount','languageCount','blogs','anserwers'));
}
}

