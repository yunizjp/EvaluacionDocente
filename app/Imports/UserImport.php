<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User
        ([
            'name'               => $row['0'],
            'email'              => $row['1'],
            'password'           => Hash::make($row['2']),    
       ]);
    }
}
