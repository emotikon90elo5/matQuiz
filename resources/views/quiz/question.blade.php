@extends("layout")
@section("head")

<link rel="stylesheet" href="{{asset('css/quiz/quiz.css')}}">
@endsection
@section("content")
<div class="bigBox">
    <div class="smallerBox">
        <div class="questonInput">
            <div class="questionText">
            {{$question}}
            </div>
        </div>
            <form action="" method="get" class="form">
                <div class="answers">

                    <div class="answer">
                        <input class="radio" type="radio" name="ans">
                        <label for="r1" class="label">{{$ans1}}</label>
                    </div>
                    <div class="answer">
                        <input class="radio" type="radio" name="ans">
                        <label for="r2" class="label">{{$ans2}}</label>
                    </div>
                    <div class="answer">
                        <input class="radio" type="radio" name="ans">
                        <label for="r3" class="label">{{$ans3}}</label>
                    </div>
                    <div class="answer">
                        <input class="radio" type="radio" name="ans">
                        <label for="r4" class="label">{{$ans4}}</label>
                    </div>
                    <div class="commit">
                        <input type="submit" com value="submit">
                    </div>
                </div>
            </form>
    </div>
</div>

@endsection
