<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros_frances;
use App\Models\User;

class prestamos extends Model
{
    use HasFactory;
    

    protected $table = 'prestamos';
    protected $fillable = [
        
        'usuario_id',
        'libros_frances_id',
        'comentario',
        'finalizado',
        'fecha_prestamo',
        'fecha_final',
        'fecha_devolucion',
        'urgencia',
        'foto',

    
    ];
       protected $dates = ['fecha_inicial'];
       protected $dates2 = ['fecha_final'];
       protected $dates3 = ['fecha_devolucion'];

       public function usuario()
       {
        return $this->belongsTo(User::class, 'usuario_id');
       }


       public function libros()
{
    return $this->belongsTo(libros_frances::class, 'libros_frances_id');
}

}
