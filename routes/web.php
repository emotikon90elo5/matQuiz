<?php

use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/{id}', function ($id) {
    return view('hi', [
        "id" => $id
    ]);
})->where('id', '[0-9]+');


Route::get('/emotka', function () {
    return Questions::all().'';
});

Route::get('/emotka/{id}', function ($id) {
    return Questions::getById($id).$id;
})->where('id', '[0-9]+');

Route::get('/questions', function () {
    return view("question", [
        "questions"=> Questions::all()
    ]);
});


Route::get('/register', [UserControler::class,"create"]);
Route::post('/users', [UserControler::class,"store"]);
