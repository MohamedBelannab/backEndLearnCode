<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();




// Route::get('/quizzes/language/{idLanguage}', [QuizzesController::class, 'getQuizLanguage']);
// Route::post('/quizzes',[QuizzesController::class,'addQuiz']);
// Route::delete('/quizzes/{id}', [QuizzesController::class, 'removeQuiz']);
// Route::put('/quizzes/{id}', [QuizzesController::class, 'editQuiz']);

// Retrieve quizzes for a specific language
// Route::get('quizzes/{idLanguage}', [QuizzesController::class, 'getQuizLanguage']);

// Add a new quiz
Route::post('quizzes', [QuizzesController::class, 'addQuiz']);

// // Remove a quiz
// Route::delete('quizzes/{id}', [QuizzesController::class, 'removeQuiz']);

// // Edit a quiz
// Route::put('quizzes/{id}', [QuizzesController::class, 'editQuiz']);





});
