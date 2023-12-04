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

    public function methodeQuiz(){
        return view("admin/quiz");
    }
}
