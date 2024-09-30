<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Cards - Tarjetas con efecto Hover</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>
    @include('partials.navegacion')
<!--   Tarjetas-->
<div class="title-cards">
    <h2>Servicios que Ofrecemos</h2>
</div>
<div class="container-card">

    <div class="card">
        <figure>
            <img src="https://www.dentalalfa.com/wp-content/uploads/2013/11/antes-y-despues-de-restauracion.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Restauraciones</h3>
            <p>La restauración dental permite recuperar la estructura y anatomía de dientes dañados mediante la aplicación de técnicas y materiales específicos.</p>
            <a href="{{route('servicios.restauraciones')}}">Leer Màs</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="https://i0.wp.com/onsmile.cl/wp-content/uploads/2024/09/0dac0-profilaxis-dental.jpg?fit=1080%2C1080&ssl=1">
        </figure>
        <div class="contenido-card">
            <h3>profilaxis</h3>
            <p> La profilaxis dental es el término técnico que se refiere a una limpieza dental llevada a cabo por un odontólogo o por una higienista dental por prescripción del odontólogo.</p>
            <a href="{{route('servicios.profilaxis')}}">Leer Màs</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="https://www.clinicagramadent.com/wp-content/uploads/2017/07/blanqueamiento-tratamientos-clinica-dental-gramadent.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Blanqueamientos</h3>
            <p>El blanqueamiento dental consiste en un tratamiento no invasivo que mejora la apariencia de los dientes, aclarándolos y dejándolos más blancos.</p>
            <a href="{{route('servicios.blanqueamiento')}}">Leer Màs</a>
        </div>
    </div>

</div>
<div class="container-card">

    <div class="card">
        <figure>
            <img src="https://static.wixstatic.com/media/ca9b4b9a4c494157b7aac8c5ad1a334d.jpg/v1/fill/w_568,h_378,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/ca9b4b9a4c494157b7aac8c5ad1a334d.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Rayos X</h3>
            <p>Las radiografías dentales son un tipo de imagen de los dientes y la boca.</p>
            <a href="{{route('servicios.rayos')}}">Leer Màs</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="https://images.squarespace-cdn.com/content/v1/59303b953e00bebc0feaff9f/d6df1776-ac35-4094-b353-e4d9b9087682/ortodoncia-clinica-dental-murcia.jpeg">
        </figure>
        <div class="contenido-card">
            <h3>Ortodoncias</h3>
            <p>La ortodoncia lingual consiste en el cementado de Brackets de forma individualizada a la anatomía de cada diente</p>
            <a href="{{route('servicios.ortodoncia')}}">Leer Màs</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="https://westelpasodentist.com/wp-content/uploads/2023/03/tooth-extraction_el-paso-tx.jpeg">
        </figure>
        <div class="contenido-card">
            <h3>Extracciones</h3>
            <p>Una extracción dental es un procedimiento para extraer un diente de la encía.</p>
            <a href="{{route('servicios.extraccion')}}">Leer Màs</a>
        </div>
    </div>

</div>
<div class="container-card">

    <div class="card">
        <figure>
            <img src="https://smilelabibi.com/wp-content/uploads/2024/02/cirugia_dental.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Cirugias</h3>
            <p>La cirugía oral es aquella que se realiza en la boca, conocida en odontología como cavidad oral</p>
            <a href="{{route('servicios.cirugia')}}">Leer Màs</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="https://menedent.es/wp-content/uploads/2020/05/que_es_una_endodoncia.png">
        </figure>
        <div class="contenido-card">
            <h3>Endodoncias</h3>
            <p>La endodoncia es un tratamiento para dientes infectados o descompuestos gravemente cuya causa parte del nervio del diente</p>
            <a href="{{route('servicios.endodoncia')}}">Leer Màs</a>
        </div>
    </div>
    <div class="card">
        <figure>
            <img src="https://clinicakranion.com/wp-content/uploads/2024/02/1-614x1024.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Protesis</h3>
            <p>La prótesis dental es una estructura metálica con varios dientes artificiales que se ancla a los dientes y sirve para reponer las piezas ausentes o estructuras óseas que se han reabsorbido a lo largo del tiempo con la pérdida de los dientes naturales.</p>
            <a href="{{route('servicios.protesis')}}">Leer Màs</a>
        </div>
    </div>

</div>
<!--Fin   Tarjetas-->
</body>
</html>
