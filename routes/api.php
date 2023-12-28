<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\BlogsController;
use App\Models\Language;
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
});

// Route::group(['middleware'=>['auth:sanctum']],function(){
   
    
// });

// Route::post('/removeLanguage/{id}/{titre}' , [LanguageController::class  , 'removeLanguage']);


Route::get('/getAllLanguages' ,[LanguageController::class , 'getAllLanguages']);
Route::get('/getQuiz/{id}' ,[LanguageController::class , 'getQuiz']);
Route::get('/blogs', [BlogsController::class, 'getAllBlogs']);