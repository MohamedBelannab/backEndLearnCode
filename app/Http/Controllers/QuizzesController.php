<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    use HttpResponses ;

    // $quizzes = Quiz::where('idLanguage', $idLanguage)->get();
    // foreach ($quizzes as $quiz) {
    //     $questions = Question::where('idQuiz', $quiz->id)->get();
    //     $quiz['questions'] = $questions;
    // }
    // return $this->successResponse($quizzes, 'Quizzes retrieved successfully');

    public function getQuizLanguage($idLanguage) {

        // $quizzes = Quiz::where('idLangage', $idLanguage)->get();
        // if($quizzes) {
        //     return $this->successResponse($quizzes);
        // } else {
        //     return $this->errorResponse('No quizzes found for this language', 404);
        // }
    }


    public function  addQuiz(Request $request) {
        // $validatedData = $request->validate([
        //     'titre' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'idLangage' => 'required|integer|exists:langages,id',
        // ]);
        // $quiz = new Quiz();
        // $quiz->titre = $validatedData['titre'];
        // $quiz->description = $validatedData['description'];
        // $quiz->idLangage = $validatedData['idLangage'];
        // $quiz->save();
        // return $this->successResponse($quiz, 201);
        // return response()->json($quiz);
    }


    public function removeQuiz($idQuiz) {
        // $quiz = Quiz::findOrFail($idQuiz);
        // $quiz->delete();
        // return $this->successResponse('Quiz deleted successfully');
    }

    

    public function editQuiz(Request $request, $idQuiz){
    //     $validatedData = $request->validate([
    //         'titre' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'idLangage' => 'required|integer|exists:langages,id',
    //     ]);

    //     $quiz = Quiz::findOrFail($idQuiz);
    //     $quiz->titre = $validatedData['titre'];
    //     $quiz->description = $validatedData['description'];
    //     $quiz->idLangage = $validatedData['idLangage'];
    //     $quiz->save();
    //     return $this->successResponse($quiz);
    // }

    }
}
