<?php

namespace App\Http\Controllers;

use App\Models\questions;
use Illuminate\Http\Request;

class questionsController extends Controller
{
    //

    public function index(){
        $questions=questions::all();
        return view("admin/questions")->with("question",$questions);
    }


    public function store(Request $request) {
        $validatedData = $request->validate([
            'idQuiz' => 'required|integer|exists:quizzes,id',
            'bodyQuestion' => 'required|string',
        ]);
        
        $question = new questions();
        $question->idQuiz = $validatedData['idQuiz'];
        $question->bodyQuestion = $validatedData['bodyQuestion'];
        $question->save();
        return redirect()->back()->with('success', 'Question added successfully');
    }


    public function removeQuestion($id ){
        $questions = questions::find($id);
        if($questions){
            $questions->delete() ;
            return redirect()->back()->with('success', 'Langage added successfully');
        }
        else{
            echo 'you dont have the permission';
        }      
}
}
