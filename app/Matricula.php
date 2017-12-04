<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Validator;

class Matricula extends Model
{
    protected $fillable = [
        'f_matricula', 'valor_matricula', 'estado_matricula', 'estado_materiales', 'estado_seguro', 'estado_bono', 'observaciones', 'est_id', 'estado'
    ];
}
