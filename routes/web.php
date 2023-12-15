<?php

use App\Http\Controllers\AnserwersController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtrauserController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\questionsController;
use App\Http\Controllers\QuizzesController;
use App\Http\Controllers\UserresultsController;
use App\Http\Controllers\UsersController;
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
Route::get('/admin/question/{id}/delete', [questionsController::class, 'removeQuestion']);
Route::get('/editquestions/{id}', [questionsController::class, 'edit']);
Route::put('/update-data-questions/{id}', [questionsController::class, 'update']);
// Route::get('/edit/{id}', [questionsController::class, 'edit']);
// Route::put('/update-data/{id}', [questionsController::class, 'update']);
// _____________________ Methode Blogs_______________________________________
Route::get('/blogs', [BlogsController::class, 'index'])->name("blogs");
Route::post('/admin/blogs/store', [BlogsController::class, 'store']);
Route::get('/admin/blogs/{id}/delete', [BlogsController::class, 'removeBlogs']);
Route::get('/editblogs/{id}', [BlogsController::class, 'edit']);
Route::put('/update-data-blogs/{id}', [BlogsController::class, 'update']);
// _____________________ Methode Likes_______________________________________
Route::get('/likes', [LikesController::class, 'index'])->name("likes");
Route::post('/admin/likes/store', [LikesController::class, 'store']);
Route::get('/admin/likes/{id}/delete', [LikesController::class, 'removeLikes']);
Route::get('/editlikes/{id}', [LikesController::class, 'edit']);
Route::put('/update-data-likes/{id}', [LikesController::class, 'update']);

// _____________________ Methode anserwers_______________________________________
Route::get('/anserwers', [AnserwersController::class, 'index'])->name("anserwers");
Route::post('/admin/anserwers/store', [AnserwersController::class, 'store']);
Route::get('/admin/anserwers/{id}/delete', [AnserwersController::class, 'removeanserwers']);
Route::get('/editanserwers/{id}', [AnserwersController::class, 'edit']);
Route::put('/update-data-anserwers/{id}', [AnserwersController::class, 'update']);


// _____________________ Methode Users_______________________________________
Route::get('/users', [UsersController::class, 'index'])->name("users");
Route::post('/admin/users/store', [UsersController::class, 'store']);
Route::get('/admin/users/{id}/delete', [UsersController::class, 'removusers']);
Route::get('/editusers/{id}', [UsersController::class, 'edit']);
Route::put('/update-data-users/{id}', [UsersController::class, 'update']);

// _____________________ Methode Extrauser_______________________________________
Route::get('/extrauser', [ExtrauserController::class, 'index'])->name("extrauser");
Route::post('/admin/extrauser/store', [ExtrauserController::class, 'store']);
Route::get('/admin/extrauser/{id}/delete', [ExtrauserController::class, 'removusers']);
Route::get('/editextrauser/{id}', [ExtrauserController::class, 'edit']);
Route::put('/update-data-extrauser/{id}', [ExtrauserController::class, 'update']);

// _____________________ Methode userresults_______________________________________
Route::get('/userresults', [UserresultsController::class, 'index'])->name("userresults");
Route::post('/admin/userresults/store', [UserresultsController::class, 'store']);
Route::get('/admin/userresults/{id}/delete', [UserresultsController::class, 'removusers']);
Route::get('/edituserresults/{id}', [UserresultsController::class, 'edit']);
Route::put('/update-data-userresults/{id}', [UserresultsController::class, 'update']);



// _____________________ Counter_Dash ______________________________________________
Route::get('/', [DashboardController::class, 'CountDashbord']);




