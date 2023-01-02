@extends("layout")
@section("head")

<link rel="stylesheet" href="{{asset('css/auth/register.css')}}">
@endsection
@section("content")

<form action="/users" method="post">
    <div id="registerbox">
        <div id="registerinnerbox">
            <div id="emailinpu">
                <div class="input">
                    <label for="e-mail"> E-mail </label>
                    <input type="text" id="email" name="email" value="">

                    @error('email')
                    <div class="error">
                        <p id="erroremail">

                            {{$message}}

                        </p>
                    </div>
                    @enderror
                </div>
            </div>

            <div id="logininpu">
                <div class="input">
                    <label for="name"> login </label>
                    <input type="text" id="name" name="name" value="">

                    @error('name')
                    <div class="error">
                        <p id="errorlogin">

                            {{$message}}

                        </p>
                    </div>
                    @enderror
                </div>
            </div>


            <div id="passwordinpu">
                <div class="input">
                    <label for="password"> password </label>
                    <input type="password" id="password" name="password" value="">

                </div>
                @error('password')
                <div class="error">
                    <p id="errorpaswordconfirm">
                        {{$message}}

                    </p>
                </div>
                @enderror
            </div>

            <div id="passwordConfirm">
                <div class="input">
                    <label for="passwordconfirm"> password confirm </label>
                    <input type="password" id="passwordconfirm" name="password_confirmation" value="">

                    @error('password_confirmation')
                    <div class="error">
                        <p id="errorpaswordconfirm">

                            {{$message}}

                        </p>
                    </div>
                    @enderror
                </div>
            </div>
            <div id="but">
                <input id="registerbut" type="submit">
            </div>
        </div>
    </div>
</form>


@endsection

