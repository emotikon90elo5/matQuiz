<?php

use App\Models\Keys;
use App\Models\questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/emo', function (){
    return response()->json([
        'e'=> [
            [
                'title'=> 'emo',
                'post'=> true
            ]
        ]
            ]);
});

Route::get('/keys', function (){
    return response()->json(Keys::getAll());
});

Route::get('/keys/{id}', function ($id){
    return response()->json([Keys::getById($id)]);
});

Route::get('/questions', function (){
    return response()->json(questions::all());
});

Route::get('/questions/{id}', function ($id){
    return response()->json(questions::ano($id));
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

