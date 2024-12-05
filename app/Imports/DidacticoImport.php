<?php

namespace App\Imports;

use App\Models\didacticos;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class DidacticoImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new didacticos([
            'nombre' => $row['nombre'],
            'categoria'  => $row['categoria'],
            'cantidad'  => $row['cantidad'],
        ]);
    }
    public function  batchSize(): int
    {
     return 1000;
    }
 
    public function  chunkSize(): int
    {
     return 1000;
    }
 }

