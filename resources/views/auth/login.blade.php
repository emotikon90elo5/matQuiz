@extends('layout')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection
@section('content')
    <form action="/users/auth" method="post">
        <div class="registerbox">
            <div class="registerinnerbox">
                @csrf
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

                <input class="button" type="submit" value="Zaloguj się!">
                <div class="line"></div>
                <a href="/register" class="anyInteraction">Nie masz  konto? Kiknij aby się zarejestrować!</a>
            </div>
        </div>
    </form>
@endsection

