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

Route::get('/{id}', function ($id) {
    return view('hi', [
        "id" => $id
    ]);
})->where('id', '[0-9]+');

Route::get('/login', [UserControler::class,"show"]);
Route::get('/register', [UserControler::class,"create"]);
Route::post('/users', [UserControler::class,"store"]);
//
Route::get('/question', [QuizController::class,"show"]);
