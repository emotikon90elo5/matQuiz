@extends('layout')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection
@section('content')
    <form action="/users" method="post">
        <div class="registerbox">
            <div class="registerinnerbox">
                @csrf
                <div class="card">
                    <div class="input">
                        <label for="email"> E-mail </label>
                        <input type="text" id="email" name="email" value="{{ old('email') }}">

                        @error('email')
                            <div class="error">
                                <p class="errorMessage">

                                    {{ $message }}

                                </p>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="card">
                    <div class="input">
                        <label for="name"> login </label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}">

                        @error('name')
                            <div class="error">
                                <p class="errorMessage">

                                    {{ $message }}

                                </p>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="card">
                    <div class="input">
                        <label for="password"> password </label>
                        <input type="password" id="password" name="password" value="">
                        @error('password')
                            <div class="error">
                                <p class="errorMessage">
                                    {{ $message }}

                                </p>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="card">
                    <div class="input">
                        <label for="passwordconfirm"> password confirm </label>
                        <input type="password" id="passwordconfirm" name="password_confirmation" value="">

                        @error('password_confirmation')
                            <div class="error">
                                <p class="errorMessage">

                                    {{ $message }}

                                </p>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="card">
                    <div class="input">
                        <label for="type">Typ Konta</label>
                        <select name="type" class="type" b>
                            <option @if (old("type")== "teacher")
                                @selected(true)
                            @endif value="teacher">Nauczyciel</option>
                            <option @if (old("type")== "study")
                            @selected(true)
                        @endif value="study">Uczeń</option>
                          </select>
                          @error('type')
                          <div class="error">
                              <p class="errorMessage">

                                  {{ $message }}

                              </p>
                          </div>
                      @enderror
                    </div>
                </div>

                <input class="button" type="submit" value="Zarejestruj!">
                <div class="line"></div>
                <a href="/login" class="anyInteraction">Masz już konto? Kiknij aby się zalogować!</a>
            </div>
        </div>
    </form>
@endsection

