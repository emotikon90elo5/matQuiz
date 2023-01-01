@extends("layout")

@section("content")

<link rel="stylesheet" href="{{asset('css/auth/register.css')}}">

<div id="registerbox">
    <div id="registerinnerbox">
        <div id="emailinpu">
            <div class="input">
                <input type="text" id="email" name="email" value="">
                <label for="e-mail"> E-mail </label>
                <div class="error">
                    <p id="erroremail">
                        @error('record')
                        @enderror
                    </p>
                </div>
            </div>
        </div>

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

        <div id="nickinpu">
            <div class="input">
                <input type="text" id="nick" name="nick" value="">
                <label for="nick"> nick </label>
                <div class="error">

                    <p id="errornick">
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

        <div id="passwordConfirm">
            <div class="input">
                <input type="password" id="passwordconfirm" name="paswordconfirm" value="">
                <label for="passwordconfirm"> password confirm </label>

                <div class="error">
                    <p id="errorpaswordconfirm">
                        @error('record')
                        @enderror
                    </p>
                </div>
            </div>
        </div>
        <div id="but">
            <button id=registerbut></button>
        </div>
    </div>
</div>


@endsection
