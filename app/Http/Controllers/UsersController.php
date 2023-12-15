<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function index()
    {
        // Méthode pour afficher tous les utilisateurs
        $users = User::all();
        return view('admin/users', compact('users'));
    }



    // ... (previous code)

    public function store(Request $request)
    {
        // Validation rules for the user input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:8',
            'birthDay' => 'required|date',
            // 'isAdmin' => 'boolean', 
        ]);
        $users=new User();
        $users->name=$request->name;
        $users->email=$request->email;
        // $users->password=$request->Hash::make($request->input('password'));
        $users->birthDay=$request->birthDay;
        // $users->$request->input('isAdmin', 0);
        $users->save();
        return redirect()->back()->with('success', 'users added successfully');

    }


    public function edit($id){
        $users=User::find($id);
        return view("admin/editusers",compact("users"));
    }
    public function update(Request $request,$id){
        $users=User::find($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->birthDay=$request->birthDay;
        $users->update();
        return redirect("/users")->with("status","Data updated successfully");
    
    }  

    public function removusers($id){
        $users = User::find($id);
        if($users){
            $users->delete() ;
            return redirect()->back()->with('success', 'users added successfully');
        }
        else{
            echo 'you dont have the permission';
        }      
}
 // ... (other methods)
}

