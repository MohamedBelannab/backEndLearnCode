<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    use HttpResponses ;
    // public function getQuizLanguage($idLanguage) {

    //     $quizzes = Quiz::where('idLangage', $idLanguage)->get();
    //     if($quizzes) {
    //         return $this->successResponse($quizzes);
    //     } else {
    //         return $this->errorResponse('No quizzes found for this language', 404);
    //     }
    // }
    public function index(){
        $Quiz=Quiz::all();
        return view("admin/Quizzes/quiz")->with("Quizes",$Quiz);
    }


    public function store(Request $request) {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'idLangage' => 'required|integer|exists:langages,id',
        ]);
        $quiz = new Quiz();
        $quiz->titre = $validatedData['titre'];
        $quiz->description = $validatedData['description'];
        $quiz->idLangage = $validatedData['idLangage'];
        $quiz->save();
        return redirect()->back()->with('success', 'Quiz added successfully');
    }



    public function removeQuiz($id ){
        $Quiz = Quiz::find($id);
        if($Quiz){
            $Quiz->delete() ;
            return redirect()->back()->with('success', 'Langage added successfully');
        }
        else{
            echo 'you dont have the permission';
        }      
}

public function edit($id){
    $quiz=Quiz::find($id);
    return view("admin/Quizzes/editQuiz",compact("quiz"));
}
public function update(Request $request,$id){
    $quiz=Quiz::find($id);
    $quiz->idLangage=$request->idLangage;
    $quiz->titre=$request->titre;
    $quiz->description=$request->description;
    $quiz->update();
    return redirect("/quiz")->with("status","Data updated successfully");

}  
}
