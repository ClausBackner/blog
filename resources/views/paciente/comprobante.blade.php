<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta</title>
</head>
<body>
    @include('partials.navegacion')
<hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
<form id="searchthis" action="/search" method="get">
    <input id="search-box" name="q" type="text" placeholder="DESTINO"/>
    <input id="search-btn" value="BUSCAR" type="submit"/>
  </form>
</body>
</html>
