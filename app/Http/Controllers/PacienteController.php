<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacientes;
use Illuminate\Support\Facades\DB;

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
    public function buscar(Request $request){
        $query = $request->input('query');
        $iniciales_dni=trim($request->get('iniciales_dni'));
        $paciente=DB::table('paciente')
        ->select('nombre','apellido','dni','edad','telefono','direccion','servicio','fecha','descripcion','iniciales_dni')
        ->where('iniciales_dni', 'LIKE', '%' . $iniciales_dni . '%')
        ->orderBy('apellido', 'asc')
        ->get();
        return view('paciente.buscar', compact('paciente','iniciales_dni'));
}

}
