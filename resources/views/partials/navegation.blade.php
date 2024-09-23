<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body class="mobile">
<nav>
    <div class="container nav-wrapper">
        <div class="brand">
{{--            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
{{--                <path--}}
{{--                    d="M10.5 10a2.5 2.5 0 1 1-5.001-.001A2.5 2.5 0 0 1 10.5 10zM16 4v12c0 1.1-.9 2-2 2H2c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2zm-3.5 6a4.5 4.5 0 1 0-9 0 4.5 4.5 0 0 0 9 0zm6.715-4.914L17 6.562v7l2.215 1.477a.505.505 0 0 0 .785-.42V5.506a.505.505 0 0 0-.785-.42z" />--}}
{{--            </svg>--}}
            <span><h2>Centro Odolongico Zamora</h2></span>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li><a href="{{route('blog')}}">Reservas</a></li>
            <li>
                <a href="{{route('servicios')}}">Servicios</a>
                <ul class="dropdown-list">
                    <li><a href="{{route('restauraciones')}}">Restauraciones</a></li>
                    <li><a href="{{route('profilaxis')}}">Profilaxis</a></li>
                    <li><a href="{{route('blanqueamiento')}}">Blanqueamiento</a></li>
                    <li><a href="#">Ortodoncias</a></li>
                    <li><a href="#">Extracciones</a></li>
                    <li><a href="#">Cirugias</a></li>
                    <li><a href="#">Endodoncias</a></li>
                    <li><a href="#">Prótesis</a></li>
                    <li><a href="#">Rayos x</a></li>
                </ul>
            </li>
            <li><a href="#">Q&A</a></li>
            <li><a href="{{route('nosotros')}}">Contact</a></li>
        </ul>
    </div>
</nav>

<script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
