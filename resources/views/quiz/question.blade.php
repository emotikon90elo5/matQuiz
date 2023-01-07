@extends('layout')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/quiz/quiz.css') }}">
    <title>pytanie</title>
@endsection
@section('content')
    <div class="bigBox">
        <div class="smallerBox">
            <div class="questonInput">
                <div class="questionText">
                    {{ $question }}
                </div>
            </div>
            <form action="/question/check" method="post" class="form">
                @csrf
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
                    <input type="submit" class="submit" value="submit">
                </div>
                <input type="hidden" name="id" value="{{ $id }}">



            </form>
            @error('message')
                    <div class="popup">
                        <button id="close">&times;</button>
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                                  <!--Script-->
                <script type="text/javascript">
                    window.addEventListener("load", function() {
                        document.querySelector(".popup").style.display = "block";
                        let val = document.querySelector(".popup p").textContent;
                        val.replaceAll("<code>", "<div class='code'>");
        val.replaceAll("</code>", "</div>");
                        document.querySelector(".popup p").innerHTML = val;
                    });


                    document.querySelector("#close").addEventListener("click", function() {
                        document.querySelector(".popup").style.display = "none";
                    });
                </script>
                @enderror
        </div>
    </div>
@endsection

