<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;

class QuizController extends Controller
{
    public function show(){

        $question=Questions::GetAnonims(rand(1,1001));
        return view("quiz.question",[
            "id"=>$question["id"],
            "question"=>$question["question"],
            "ans1"=> $question["answer1"],
            "ans2"=> $question["answer2"],
            "ans3"=> $question["answer3"],
            "ans4"=> $question["answer4"],
        ]);

    }

    public function check(Request $request){
        $id = $request-> id;
        $ans = $request-> ans;
        $question = Questions::find($id);
        if ($question["trueAnswer"]==$ans) {
           $message="Odpowiedziałeś poprawnie!";
        }else{
            $message="Poprawna odpowiedź to ".$question["trueAnswer"].". <code>".$question["answer".$question["trueAnswer"]]."</code>. A ty odpowiedziałeś ".$ans.". <code>".$question["answer".$ans]."</code>.";
        }
        return back()->withErrors(["message"=>"$message"]);

    }
    //
}
