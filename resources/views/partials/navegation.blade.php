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
                    <li><a href="{{route('ortodoncia')}}">Ortodoncias</a></li>
                    <li><a href="#">Extracciones</a></li>
                    <li><a href="#">Cirugias</a></li>
                    <li><a href="#">Endodoncias</a></li>
                    <li><a href="#">Prótesis</a></li>
                    <li><a href="{{route('rayos')}}">Rayos x</a></li>
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
