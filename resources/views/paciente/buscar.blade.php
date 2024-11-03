<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/consulta.css'). '?v=' .time() }}">
    <title>Buscar</title>
</head>
<body>
    @include('partials.navegacion')
    <div ng-app="viagensCadastradas" ng-controller="AppCtrl">
        <div class="container">
          <header>
          <h1 class="text-center">Formulario de registro</h1>
          <H2>r</H2>
            <h1>CONSULTA DE CITA MEDICA</h1>
          </header>

          <form class="row g-3 needs-validation" action="{{ route('paciente.buscar') }}"  method="GET">
            {{-- <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Nombres</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" name="nombres" >
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Apellidos</label>
              <input type="text" class="form-control" id="validationCustom02" placeholder="Apellidos" name="apellido" >
              <div class="valid-feedback">
                Looks good!
              </div>
            </div> --}}
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Codigo</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Codigo" name="iniciales_dni" value="{{ $iniciales_dni }}">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

            <div class="col-12">
              <button class="btn btn-primary" type="submit" value="buscar">Buscar</button>
            </div>
          </form>
          <div class="card mb-4">
            <div class="card-body">
                <!-- Grid row -->
                <!-- Grid row -->
                <!--Table-->
                <table class="table table-striped">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Edad</th>
                            <th>telefono</th>
                            <th>direccion</th>
                            <th>Servicio</th>
                            <th>fecha</th>
                            <th>Descripción</th>
                            <th>codigo</th>
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>

                        @foreach ( $paciente as $paciente )
                            <tr>
                                <td>{{ $paciente->nombre }}</td>
                                <td>{{ $paciente->apellido }}</td>
                                <td>{{ $paciente->dni }}</td>
                                <td>{{ $paciente->edad }}</td>
                                <td>{{ $paciente->telefono }}</td>
                                <td>{{ $paciente->direccion }}</td>
                                <td>{{ $paciente->servicio }}</td>
                                <td>{{ $paciente->fecha }}</td>
                                <td>{{ $paciente->descripcion }}</td>
                                <td>{{ $paciente->iniciales_dni }}</td>


                            </tr>
                        @endforeach
                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>
        {{-- <script src="{{ asset('js/consulta.js') }}"></script> --}}
</body>
</html>
