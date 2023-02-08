<?php

namespace App\Imports;

use App\Models\Docente;
use Maatwebsite\Excel\Concerns\ToModel;

class DocentesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Docente([
            'periodo'                 => $row['0'],
            'carrera'                 => $row['1'],
            'nivel'                   => $row['2'],
            'asignatura'              => $row['3'],
            'paralelo'                => $row['4'],
            'jornada'                 => $row['5'],
            'cedula'                  => $row['6'],
            'nombre_completo'         => $row['7'],
        ]);
    }
}
