<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
@include('partials.navegacion')
<hr>
<hr>
<hr>
<hr>
<hr>

    <table>
        <thead>
            <tr>
                <h1>Iniciales</h1>
                <th>Fecha de Nacimiento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $user)
                <tr>
                    <td>{{ $user->iniciales }}</td>
                    <td>{{ $user->fecha_nacimiento }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
