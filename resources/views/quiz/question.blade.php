@extends('layout')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/quiz/quiz.css') }}">
@endsection
@section('content')
    <div class="bigBox">
        <div class="smallerBox">
            <div class="questonInput">
                <div class="questionText">
                    {{ $question }}
                </div>
            </div>
            <form action="" method="get" class="form">
                <div class="answers">

                    <div class="answer">
                        <input class="radio" type="radio" name="ans" value="1">
                        <label for="r1" class="label">{{ $ans1 }}</label>
                    </div>
                    <div class="answer">
                        <input class="radio" type="radio" name="ans" value="2">
                        <label for="r2" class="label">{{ $ans2 }}</label>
                    </div><br>
                    <div class="answer">
                        <input class="radio" type="radio" name="ans" value="3">
                        <label for="r3" class="label">{{ $ans3 }}</label>
                    </div>
                    <div class="answer">
                        <input class="radio" type="radio" name="ans" value="4">
                        <label for="r4" class="label">{{ $ans4 }}</label>
                    </div>
                    <div class="commit">
                        <input type="submit" class="submit" value="submit">

                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $id }}">
            </form>
        </div>
    </div>
@endsection

