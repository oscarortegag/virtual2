<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\prestamos;
use App\Models\libros_frances;


class EstadisticasController extends Controller
{
    public function index()
    {

        $libroMasPrestado = prestamos::select('libros_frances_id', DB::raw('COUNT(*) as total_prestamos'))
        ->groupBy('libros_frances_id')
        ->orderByDesc('total_prestamos')
        ->first();
        // Obtener los datos de todos los libros prestados y la cantidad de veces prestados
        $librosPrestados = prestamos::select('libros_frances_id', DB::raw('count(*) as total_prestamos'))
            ->groupBy('libros_frances_id')
            ->orderByDesc('total_prestamos')
            ->get();


            // Obtener los detalles completos del libro más prestado (opcional)
        $libros2 = libros_frances::find($libroMasPrestado->libros_frances_id);

        // Obtener los detalles completos de cada libro
        $libros = libros_frances::whereIn('id', $librosPrestados->pluck('libros_frances_id'))
            ->get();
      
     // Datos de ejemplo para la gráfica de pastel
        $datosEjemplo = [
           'English' => 50,
           'French' => 30,
           'Teaching Material' => 20,
        ];

        return view('/estadisticas', compact('librosPrestados','libroMasPrestado', 'libros' ,'libros2', 'datosEjemplo'));
    }
}