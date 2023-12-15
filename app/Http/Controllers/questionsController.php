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

    public function edit($id){
        $questions=questions::find($id);
        return view("admin/editquestions",compact("questions"));
       
    }
    public function update(Request $request,$id){
        $questions=questions::find($id);
        $questions->idQuiz=$request->idQuiz;
        $questions->bodyQuestion=$request->bodyQuestion;
        $questions->update();
        return redirect("/question")->with("status","Data updated successfully");
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
