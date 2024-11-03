<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;
    protected $table = 'paciente';
    protected $fillable = ['nombre', 'apellido', 'dni','edad', 'telefono','direccion', 'servicio','fecha', 'descripcion', 'iniciales_dni'];
    public $timestamps = false;
}
