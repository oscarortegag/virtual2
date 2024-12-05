<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class didacticos extends Model
{
    use HasFactory;

    protected $fillable = [
    'nombre',
    'categoria',
    'cantidad',  
    'foto' 
   ];
}
