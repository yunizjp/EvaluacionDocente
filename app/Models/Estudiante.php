<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable =[
        'periodo',
        'carrera',
        'asignatura',
        'num_matricula',
        'cedula',
        'nombre_completo',
        'sexo',
        'correo',
        'nivel',
        'paralelo',
        'jornada',
        'estado'
    ];
       
}
