<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacientes;

class PacienteController extends Controller
{
    public function crear(){
        return view("paciente.crear");
    }
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:225',
            'apellido' => 'required|string|max:255',
            'dni' => 'required|integer',
            'edad' => 'required|integer',
            'telefono' => 'required|integer',
            'direccion' => 'required|string|max:225',
            'servicio' => 'required|string|max:255',
            'fecha' => 'required|date',
            'descripcion' => 'required|string|max:225'
        ]);
         // Generar las iniciales
    $iniciales = strtoupper(substr($request['nombre'], 0, 1)) . strtoupper(substr($request['apellido'], 0, 1));

    // Concatenar las iniciales con el DNI
    $inicialesDni = $iniciales . '-' . $request['dni'];

        $paciente = new Pacientes();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->dni = $request->dni;
        $paciente->edad = $request->edad;
        $paciente->telefono = $request->telefono;
        $paciente->direccion = $request->direccion;
        $paciente->servicio = $request->servicio;
        $paciente->fecha = $request->fecha;
        $paciente->descripcion = $request->descripcion;
        $paciente->iniciales_dni = $inicialesDni;
        $paciente->save();

        return redirect()->back()->with('success','Cita reservada éxito');
    }
    public function comprobante(){
        return view("paciente.comprobante");
    }
    public function buscar(Request $request)
{
    // Validar que el código esté presente en la solicitud
    $request->validate([
        'codigo' => 'required|string',
    ]);

    // Obtener el código ingresado
    $codigo = $request->input('codigo');

    // Buscar el paciente por el campo 'iniciales_dni'
    $paciente = Pacientes::where('iniciales_dni', $codigo)->first();

    // Verificar si se encontró el paciente
    if ($paciente) {
        // Si el paciente existe, devolver la vista con los datos del paciente
        return view('paciente.comprobante', compact('paciente'));
    } else {
        // Si no se encuentra, redireccionar con un mensaje de error
        return redirect()->back()->with('error', 'Paciente no encontrado.');
    }
}

}
