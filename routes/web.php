<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\QuestionController;
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
Route::get('/quiz', [MasterController::class, 'methodeQuiz'])->name("quiz");
// Route::post('', [MasterController::class, 'store']);

Route::get('/langage', [MasterController::class, 'methodelangage'])->name('langage');
Route::post('/admin/langage/store', [MasterController::class, 'store']);

