<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\QuizController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});
Route::get('/teacher', function () {
    return view('teacher/acountmenager');
});


Route::get('/login', [UserControler::class,"show"])->name("login")->middleware("guest");
Route::get('/register', [UserControler::class,"create"])->middleware("guest");
Route::post('/users', [UserControler::class,"store"]);
Route::post('/users/auth', [UserControler::class,"auth"]);
Route::get('/logout', [UserControler::class,"logout"]);
//
Route::get('/question', [QuizController::class,"show"]);
//
Route::get('/question', [QuizController::class,"show"]);


