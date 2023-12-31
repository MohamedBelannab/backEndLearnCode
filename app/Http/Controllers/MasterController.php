<?php

namespace App\Http\Controllers;

use App\Models\Language;
// use App\Models\Quiz;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    //
    public function methodelangage(){
        $Langage=Language::all();
        return view("admin/Languages/langage")->with("Langages",$Langage);

    }
    public function store(Request $request){
        
        $request->validate([
            'description' => 'required|string',
            'WhyLearn' => 'required|string',
            'example' => 'required|string',
            'Applications' => 'required|string',
            'Guide' => 'required|string',
            'playList' => 'required|string' ,
            'frameworks' => 'required|string',
            'titre' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $Langage=new Language();
        $Langage->description=$request->description;
        $Langage->WhyLearn=$request->WhyLearn;
        $Langage->example=$request->example;
        $Langage->Applications=$request->Applications;
        $Langage->Guide=$request->Guide;
        $Langage->frameworks=$request->frameworks;
        $Langage->titre=$request->titre;
        $Langage->playList=$request->playList;
        $Langage->slug = uniqid();
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fillename=time() . '.' .$extension;
            $file->move('uploads/langage', $fillename);
            $Langage->img=$fillename;
        }else {
            return $request;
            $Langage->img=" "; // or set a default image
        }
        $Langage->save();
        return redirect()->back()->with('success', 'Langage added successfully');
    }

    public function removeLanguage($id ){
            $language = Language::find($id);
            if($language){
                $language->delete() ;
                return redirect()->back()->with('success', 'Langage added successfully');
            }
            else{
                echo 'you dont have the permission';
            }      
    }
    public function edit($id){
        $language=Language::find($id);
        return view("admin/Languages/editLangage",compact("language"));
       
    }
    public function update(Request $request,$id){
        $Langage=Language::find($id);
        $Langage->description=$request->description;
        $Langage->WhyLearn=$request->WhyLearn;
        $Langage->example=$request->example;
        $Langage->Applications=$request->Applications;
        $Langage->Guide=$request->Guide;
        $Langage->frameworks=$request->frameworks;
        $Langage->titre=$request->titre;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $fillename=time() . '.' .$extension;
            $file->move('uploads/langage', $fillename);
            $Langage->img=$fillename;
        }else {
            return $request;
            $Langage->img=" "; // or set a default image
        }
        $Langage->update();
        return redirect("/langage")->with("status","Data updated successfully");

    }

}



