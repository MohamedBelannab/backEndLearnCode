<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ExtrauserController;
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


Route::get('/getAllLanguages' ,[LanguageController::class , 'getAllLanguages']);
Route::get('/getQuiz/{id}' ,[LanguageController::class , 'getQuiz']);
Route::get('/blogs', [BlogsController::class, 'getAllBlogs']);
Route::get('/blogs/{uuid}', [BlogsController::class, 'Blog']);


Route::post('/register',[UsersController::class,'register']);
Route::post('/login',[UsersController::class,'Login']);
Route::post('/check', [UsersController::class, 'checkEmail']);

Route::put('/extrauser/{id}', [ExtrauserController::class, 'updateUser']);
Route::delete('/extrauser/{id}', [ExtrauserController::class, 'destroy']);
Route::post('/extra', [ExtrauserController::class, 'add']);
Route::get('/getExtra/{id}', [ExtrauserController::class, 'getExtraById']);