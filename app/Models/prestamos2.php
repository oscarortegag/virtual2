<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros_frances;

class prestamos2 extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'prestamos2';
    protected $fillable = [
        'titulo',
        'fecha_prestamo',
        'fecha_devolucion'
    
    ];
       protected $dates = ['fecha_prestamo'];
       protected $dates2 = ['fecha_devolucion'];


   public function libros()
{
    return $this->belongsTo(libros_frances::class, 'titulo');
}

}