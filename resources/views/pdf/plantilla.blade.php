<!-- resources/views/pdf/template.blade.php -->
<h1>Reporte</h1>
<p>Lista de los Pacientes del día de : {{$fechaInicio}}</p>


<table class="table table-striped" border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>DNI</th>
            <th>Servicio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->apellido }}</td>
                <td>{{ $paciente->edad }}</td>
                <td>{{ $paciente->dni }}</td>
                <td>{{ $paciente->servicio }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
