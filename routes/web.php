<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\questionsController;
use App\Http\Controllers\QuizzesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/quiz', function () {
    return view('quiz');
});
Route::get('/tables', function () {
    return view('layouts/tables');
});
// Route::post('', [MasterController::class, 'store']);

// _____________________ Methode langage_______________________________________

Route::get('/langage', [MasterController::class, 'methodelangage'])->name('langage');
Route::post('/admin/langage/store', [MasterController::class, 'store']);
Route::get('/admin/langage/{id}/delet', [MasterController::class, 'removeLanguage']);
Route::get('/edit/{id}', [MasterController::class, 'edit']);
Route::put('/update-data/{id}', [MasterController::class, 'update']);

// _____________________ Methode Quiz_______________________________________

Route::get('/quiz', [QuizzesController::class, 'index'])->name("quiz");
Route::post('/admin/quiz/store', [QuizzesController::class, 'store']);
Route::get('/admin/quiz/{id}/delet', [QuizzesController::class, 'removeQuiz']);
Route::get('/editquiz/{id}', [QuizzesController::class, 'edit']);
Route::put('/update-data-quiz/{id}', [QuizzesController::class, 'update']);

// _____________________ Methode Question_______________________________________
Route::get('/question', [questionsController::class, 'index'])->name("question");
Route::post('/admin/question/store', [questionsController::class, 'store']);
Route::get('/admin/quiz/{id}/delete', [questionsController::class, 'removeQuestion']);
// Route::get('/edit/{id}', [questionsController::class, 'edit']);
// Route::put('/update-data/{id}', [questionsController::class, 'update']);
// _____________________ Methode Blogs_______________________________________
Route::get('/blogs', [BlogsController::class, 'index'])->name("blogs");




