<?php

namespace App\Imports;

use App\Models\material_ingles;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class InglesImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new material_ingles([
            'isbn' => $row['isbn'],
'titulo'  => $row['titulo'],
'nivel'  => $row['nivel'],
'autor'  => $row['autor'],
'editorial' => $row['editorial'],
'categoria' => $row['categoria'],
'cantidad' => $row['cantidad'],
'idioma' => $row['idioma'],

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
   