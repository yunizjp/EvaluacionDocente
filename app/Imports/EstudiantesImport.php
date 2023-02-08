<?php

namespace App\Imports;

use App\Models\Estudiante;
use Maatwebsite\Excel\Concerns\ToModel;

class EstudiantesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Estudiante([
            'periodo'            => $row['0'],
            'carrera'            => $row['1'],
            'asignatura'         => $row['2'],
            'num_matricula'      => $row['3'],
            'cedula'             => $row['4'],
            'nombre_completo'    => $row['5'],
            'sexo'               => $row['6'],
            'correo'             => $row['7'],
            'nivel'              => $row['8'],
            'paralelo'           => $row['9'],
            'jornada'            => $row['10'],
            'estado'             => $row['11'],
        ]);
    }
}
