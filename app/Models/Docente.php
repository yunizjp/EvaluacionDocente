<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable =[
        'periodo',
        'carrera',
        'nivel',
        'asignatura',
        'paralelo',
        'jornada',
        'cedula',
        'nombre_completo',
    ]; 
}
