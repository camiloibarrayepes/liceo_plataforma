<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    
    protected $fillable = [
    	'nombre', 'apellido', 'documento', 'f_nacimiento', 'telefono', 'direccion', 'eps', 'grado', 'grado_colegio_anterior'
    ];
}
