<?php

namespace App\Imports;

use App\Models\Task;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class TarefasImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Task([
           'name'       => $row[0],
           'details'    => $row[1],
           'status'     => $row[3],

        ]);
    }
}
