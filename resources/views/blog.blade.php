<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="{{asset('css/styleimag.css')}}">
    <title>Blog</title>
</head>
<body>
@include('partials.navegation')

<div class="container">
    <div class="box" style="--clr:#64ffda;">
        <div class="content">
            <div class="icon"><ion-icon name="brush-outline"></ion-icon></div>
            <div class="text">
                <h3>Desing</h3>
                <p>Lorem ipsum dolor, sit amet consecutor adipiscing elit.quit, id!</p>
                <a href="">Read More</a>
            </div>
        </div>
    </div>

    <div class="box" style="--clr:#eb5ae5;">
        <div class="content">
            <div class="icon"><ion-icon name="code-slash-outline"></ion-icon></div>
            <div class="text">
                <h3>Development</h3>
                <p>Lorem ipsum dolor, sit amet consecutor adipiscing elit.quit, id!</p>
                <a href="">Read More</a>
            </div>
        </div>
    </div>

    <div class="box" style="--clr:#5b98eb;">
        <div class="content">
            <div class="icon"><ion-icon name="search-outline"></ion-icon></div>
            <div class="text">
                <h3>SEO</h3>
                <p>Lorem ipsum dolor, sit amet consecutor adipiscing elit.quit, id!</p>
                <a href="">Read More</a>
            </div>
        </div>
    </div>

</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>
</html>
