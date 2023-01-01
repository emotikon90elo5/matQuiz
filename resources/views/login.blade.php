@extends("layout")

@section("content")

<link rel="stylesheet" href="{{asset('css/auth/login.css')}}">

<div id="loginbox">

    <div id="logininnerbox">

        <div id="logininpu">
            <div class="input">
                <input type="text" id="login" name="login" value="">
                <label for="login"> login </label>
                <div class="error">
                    <p id="errorlogin">
                        @error('record')
                        @enderror
                    </p>
                </div>
            </div>
        </div>

        <div id="passwordinpu">
            <div class="input">
                <input type="password" id="password" name="pasword" value="">
                <label for="password"> password </label>
                <div class="error">
                    <p id="errorpassword">
                        @error('record')
                        @enderror
                    </p>
                </div>
            </div>
        </div>

        <div class="buttons">
            <button id="loginbut">Zalogój</button>
            <button id="registrbut">Rejestrój</button><br>
            <button id="paswordresetbut">Rejestrój<br> hasło</button>
        </div>

    </div>

</div>

@endsection
