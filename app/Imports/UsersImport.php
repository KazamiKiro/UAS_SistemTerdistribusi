<?php

namespace App\Imports;

use App\Models\student;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return student|null
    */
    public function model(array $row)
    {
        return new student([
            'id'             => $row[0],
            'nama'           => $row[1], 
            'nim'            => $row[2],
            'JenisKelamin'   => $row[3], 
            'Semester'       => $row[4],
            'IPK'            => $row[5], 
         ]);
    }
}
