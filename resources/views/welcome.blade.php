<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/stilomagen.css')}}">
    <title>Inicio</title>
</head>
<body>
@include('partials.navegacion')

<div class="slider">

    <ul>
        <li><img src="https://www.colgate.com/content/dam/cp-sites/oral-care/oral-care-center/global/article/gscp/latam/cheerful-man-dentist-talking.jpg" alt=""></li>
        <li><img src="https://cdn.prod.website-files.com/66183cdcc69331bd58af1786/66646552144fb707a8d2b6a0_22-1024x731.jpeg" alt=""></li>
        <li><img src="https://www.postgradounab.cl/wp-content/uploads/2022/10/400x243-Conoce-los-5-tipos-de-cirugia-dental-mas-requeridas.jpg" alt=""></li>
        <li><img src="https://cdn.prod.website-files.com/66183cdcc69331bd58af1786/66646552144fb707a8d2b6a0_22-1024x731.jpeg" alt=""></li>
    </ul>

</div>

@include('partials.cartas')

<script type="text/javascript">
    let slider = document.querySelector('div.slider');
    window.addEventListener('scroll', function (){
        let value = 1 + window.scrollY/-600;
        slider.style.opacity=value;
    })
</script>
</body>
</html>
