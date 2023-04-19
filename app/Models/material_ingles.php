<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material_ingles extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'nivel',
        'editorial',
        'autor',
        'isbn',
        'categoria',
        'idioma',
        'cantidad',   
       ];
}
