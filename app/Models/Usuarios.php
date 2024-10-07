<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['nombre', 'apellido', 'fecha_nacimiento'];

    public function getInicialesAttribute()
    {
        return strtoupper(substr($this->nombre, 0, 1)) . '.' . strtoupper(substr($this->apellido, 0, 1)) . '.';
    }
}
