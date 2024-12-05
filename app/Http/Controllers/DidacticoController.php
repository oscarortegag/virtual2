<?php

namespace App\Http\Controllers;

use App\Models\didacticos;
use Illuminate\Http\Request;
use App\Http\Requests\MaterialRequest;
use App\Imports\DidacticoImport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


class DidacticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $didacticos = didacticos::orderByDesc('id')->get(); 
        return view('/materialdidactico', compact('didacticos'));
    }


    public function pdf()
    {
       $didacticos = didacticos::paginate();
       $pdf = PDF::loadView('materialdidacticopdf', ['didacticos'=>$didacticos]);
       return $pdf->setPaper('a4', 'landscape')->stream();
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/registrardidactico') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterialRequest $request)
    {

        $datos = $request->validated();
        //$material_ingles = material_ingles::create ( $datos );
         if( isset($datos["foto"] )) {
         //  $file = $request->file('foto');
          // $destinationPath = 'storage/app/public/imagenes/caratulas/';
           $datos["foto"] = $filename = time().".".$datos["foto"]->extension();
          // $uploadSuccess = $request->file('foto')->move($destinationPath, $filename);
          // $newIngles->foto =$destinationPath . $filename; 
        // }
         $request->foto->move(public_path("storage/app/public/imagenes/caratulas/"), $filename);
         $didacticos = didacticos::create ( $datos );
         }
          return redirect()->route('materialdidactico.index');

       // $datos = $request->validated();
       // $didacticos = didacticos::create ( $datos );
       // return redirect()->route('materialdidactico.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\didacticos  $didacticos
     * @return \Illuminate\Http\Response
     */
    public function ver(didacticos $didacticos)
    {
        return view('verdidactico', compact('didacticos'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\didacticos  $didacticos
     * @return \Illuminate\Http\Response
     */
    public function edit(didacticos $didacticos)
    {
        return view('editardidactico', compact('didacticos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\didacticos  $didacticos
     * @return \Illuminate\Http\Response
     */
    public function update(MaterialRequest $request, didacticos $didacticos)
    {
        $datos = $request->except('foto');
      $didacticos->update($datos);
      return redirect()->route('materialdidactico.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\didacticos  $didacticos
     * @return \Illuminate\Http\Response
     */
    public function destroy(didacticos $didacticos)
    {
        $didacticos->delete();
        return redirect()->route('materialdidactico.index');
    }

    public function importar(Request $request)
    {
        $file = $request->file('import_file');

        Excel::import(new DidacticoImport, $file);

        return redirect()->route('materialdidactico.index');
    }
}
