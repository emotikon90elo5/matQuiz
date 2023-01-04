<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    public static function GetAnonims($id){
        $sel = self::find($id);

        return [
            "id"=>$id,
            "category"=> $sel["category"],
            "subCategory"=> $sel["subCategory"],
            "question"=> $sel["question"],
            "answer1"=> $sel["answer1"],
            "answer2"=> $sel["answer2"],
            "answer3"=> $sel["answer3"],
            "answer4"=> $sel["answer4"]
        ];
    }
    use HasFactory;
}
