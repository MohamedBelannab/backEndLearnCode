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
        return view("admin/langage")->with("Langages",$Langage);

    }
    public function store(Request $request){
        
        $request->validate([
            'description' => 'required|string',
            'titre' => 'required|string|max:255',
        ]);

        $Langage=new Language();
        $Langage->description=$request->description;
        $Langage->titre=$request->titre;
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
        return view("admin/editLangage",compact("language"));
       
    }
    public function update(Request $request,$id){
        $Langage=Language::find($id);
        $Langage->description=$request->description;
        $Langage->titre=$request->titre;
        $Langage->update();
        return redirect("/langage")->with("status","Data updated successfully");

    }

}



