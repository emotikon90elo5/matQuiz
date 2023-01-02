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
        <form action="" method="POST">
            <div class="answers">

                <div class="answer">
                    <input type="button" value="{{$ans1}}">
                </div>
                <div class="answer">
                    <input type="button" value="{{$ans2}}">
                </div>
                <div class="answer">
                    <input type="button" value="{{$ans3}}">
                </div>
                <div class="answer">
                    <input type="button" value="{{$ans4}}">
                </div>
            </form>
    </div>
</div>

@endsection
