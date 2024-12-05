<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\prestamos;

class libros_frances extends Model
{
    use HasFactory;
    
    protected $table = "libros_frances";
    protected $fillable = [
     'titulo',
     'nivel',
     'editorial',
     'autor',
     'isbn',
     'categoria',
     'idioma',
     'cantidad', 
     'foto'  
    ];

    public function prestamo()
    {
        return $this->HasMany(prestamos::class);
    }
}
