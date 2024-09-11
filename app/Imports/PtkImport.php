<?php

namespace App\Imports;

use App\Models\ptk;
use Maatwebsite\Excel\Concerns\ToModel;

class PtkImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ptk([
            //
        ]);
    }
}
