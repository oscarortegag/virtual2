<?php

namespace App\Http\Controllers;

use App\Models\prestamos;
use Illuminate\Http\Request;
use App\Models\libros_frances;
use App\Http\Requests\FrancesRequest;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\validacionPrestamo;
use App\Models\user;


class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $libros = prestamos::with('usuario:id,name,matricula', 'libros:id,titulo,foto')->orderBy('fecha_inicial')->get();
     // dd($libros);
       return view('/prestamolistado', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libro = Libros_frances::withCount(['prestamo' => function(Builder $query)
    {
        $query->whereNull('fecha_devolucion');
    }])->get()->filter(function($item, $key)
     {
        return $item->cantidad > $item->prestamo_count;
     })->pluck('titulo', 'id');
    // dd($libros);
        
    return view('/registrarprestamo', compact('libro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validacionPrestamo $request)
    {

        $libro = Libros_frances::findOrFail($request->libro_id);

        $libro->prestamo()->create([
            'fecha_inicial' => $request->fecha_inicial,
            'fecha_final' => $request->fecha_final,
            'comentario' => $request->comentario,
            'usuario_id' => auth()->user()->id,
            'foto' =>$libro->foto,
        ]);
       return redirect()->route('prestamo.index')->with('mensaje', 'El libro Prestado se registro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function devolver(Request $request,  $libros_frances_id)
    {
      
      if ($request) {
          // Establecemos la zona horaria a la que corresponde
          date_default_timezone_set('America/Cancun'); // Cambia esto según tu zona horaria

            prestamos::where('libros_frances_id', $libros_frances_id)
            ->whereNull('fecha_devolucion')
            ->update([
                'fecha_devolucion' => date('Y-m-d\TH:i'),
                'finalizado' => 1,
            ]);
        } else {
            abort(404);
        }
    
    return redirect()->route('prestamo.index');
}
      
       
       
        // $libros->delete();
     
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function edit(prestamos $prestamos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prestamos $prestamos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestamos $prestamos)
    {
        //
    }
}
