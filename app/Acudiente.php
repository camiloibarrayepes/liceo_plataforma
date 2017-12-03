<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acudiente extends Model
{
    protected $fillable = [
      'nombre', 'apellido', 'documento', 'telefono', 'direccion', 'est_id', 'parentezco'
    ];
}
