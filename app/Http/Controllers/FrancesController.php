<?php

namespace App\Http\Controllers;

use App\Models\libros_frances;
use Illuminate\Http\Request;
use App\Http\Requests\FrancesRequest;
use PDF;

class FrancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $libros_frances = libros_frances::orderByDesc('id')->get(); 
    return view('/librosfrances', compact('libros_frances'));
    }


    public function pdf()
    {
       $libros_frances = libros_frances::paginate();
       $pdf = PDF::loadView('librosfrancespdf', ['libros_frances'=>$libros_frances]);
       return $pdf->setPaper('a4', 'landscape')->stream();
      
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('/registrarfrances') ;
    }


    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FrancesRequest $request)
    {
      $datos = $request->validated();
      //$material_ingles = material_ingles::create ( $datos );
       if( isset($datos["foto"] )) {
       //  $file = $request->file('foto');
        // $destinationPath = 'storage/app/public/imagenes/caratulas/';
       // dd($datos["foto"]->extension());
         $datos["foto"] = $filename = time().".".$datos["foto"]->extension();
        // $uploadSuccess = $request->file('foto')->move($destinationPath, $filename);
       //dd($datos);
        // $newIngles->foto =$destinationPath . $filename; 
      // }
       $request->foto->move(public_path("storage/app/public/imagenes/caratulas/"), $filename);
       $libros_frances = libros_frances::create ( $datos );
       }
       else{
        
        $libros_frances = libros_frances::create ( $datos );
      }
       
        return redirect()->route('librosfrances.index');


       // $datos = $request->validated();
       // $libros_frances = libros_frances::create ( $datos );
       // return redirect()->route('librosfrances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libros_frances  $libros_frances
     * @return \Illuminate\Http\Response
     */
    public function ver(libros_frances $libros_frances)
    {
            return view('verfrances', compact('libros_frances'));
      
        }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libros_frances  $libros_frances
     * @return \Illuminate\Http\Response
     */
    public function edit(libros_frances $libros_frances)
    {
   return view('editarfrances', compact('libros_frances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libros_frances  $libros_frances
     * @return \Illuminate\Http\Response
     */
    public function update(FrancesRequest $request, libros_frances $libros_frances)
    {
      $datos = $request->except('foto');
      $libros_frances->update($datos);
      return redirect()->route('librosfrances.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libros_frances  $libros_frances
     * @return \Illuminate\Http\Response
     */
    public function destroy(libros_frances $libros_frances)
    {
      $libros_frances->delete();
      return redirect()->route('librosfrances.index');
    }
}
