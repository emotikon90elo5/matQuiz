<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;

class QuizController extends Controller
{
    public function show(){

        $quest=Questions::GetAnonims(rand(1,1001));
        return view("quiz.question",[
            "question"=>$quest["question"],
            "ans1"=> $quest["answer1"],
            "ans2"=> $quest["answer2"],
            "ans3"=> $quest["answer3"],
            "ans4"=> $quest["answer4"],
        ]);

    }

    //
}
