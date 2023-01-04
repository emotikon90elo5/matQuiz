<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    @yield('head')
</head>

<body>
    <nav>
        <div class="logo">
            <a href="/">
                <img id="img" src="{{ asset('logo.svg') }}" alt="no img">
            </a>
        </div>
        <div class="nav">
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
        <div class="nav">
            <div class="dropdown">
                <button class="dropbtn">sites</button>
                <div class="dropdown-content">
                    <a href="#">about us</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
        <div class="nav">
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
        <div class="nav">
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
        <div>
            <div class="socialbg">
<<<<<<< HEAD
            <a href="https://github.com/emotikon90elo5">
                <img class="social" src="{{asset('github.png')}}" alt="no img">
            </a>
            <div>
        </div>
        @auth
        Siemka {{auth()->user()->name}}
    @else
        <a href="/login">Zaloguj się!</a>
    @endauth
=======
                <a href="https://github.com/emotikon90elo5">
                    <img class="social" src="{{ asset('github.png') }}" alt="no img">
                </a>
                <div>
                </div>
>>>>>>> 9c46dc0066684abd160726702f4f2e9ff2c30a38
    </nav>
    <article>@yield('content')</article>
    <footer>footer</footer>
</body>

</html>

