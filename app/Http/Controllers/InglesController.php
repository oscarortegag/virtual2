<?php

namespace App\Http\Controllers;

use App\Models\material_ingles;
use Illuminate\Http\Request;
use App\Http\Requests\FrancesRequest;
use PDF;
use App\Imports\InglesImport;
use Maatwebsite\Excel\Facades\Excel;


class InglesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material_ingles = material_ingles::orderByDesc('id')->get(); 
        return view('/librosingles', compact('material_ingles'));
    }

    public function pdf()
    {
       $material_ingles = material_ingles::paginate();
       $pdf = PDF::loadView('librosinglespdf', ['material_ingles'=>$material_ingles]);
       return $pdf->setPaper('a4', 'landscape')->stream();
      
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/registraringles') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FrancesRequest $request)
    {
        // $newIngles = new InglesController();
        //dd($request->all());
        //dd($request->{'foto'}->getClientOriginalName() );
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
      $material_ingles = material_ingles::create ( $datos );
      }
    
    else{
     
        $material_ingles = material_ingles::create ( $datos );
   }
       return redirect()->route('librosingles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\material_ingles  $material_ingles
     * @return \Illuminate\Http\Response
     */
    public function ver(material_ingles $material_ingles)
    {
            return view('veringles', compact('material_ingles'));
      
        }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\material_ingles  $material_ingles
     * @return \Illuminate\Http\Response
     */
    public function edit(material_ingles $material_ingles)
    {
        return view('editaringles', compact('material_ingles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\material_ingles  $material_ingles
     * @return \Illuminate\Http\Response
     */
    public function update(FrancesRequest $request, material_ingles $material_ingles)
    {
        $datos = $request->except('foto');
      $material_ingles->update($datos);
      return redirect()->route('librosingles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\material_ingles  $material_ingles
     * @return \Illuminate\Http\Response
     */
    public function destroy(material_ingles $material_ingles)
    {
        $material_ingles->delete();
      return redirect()->route('librosingles.index');
    }

    public function importar(Request $request)
    {
        $file = $request->file('import_file');

        Excel::import(new InglesImport, $file);

        return redirect()->route('librosingles.index');
    }

}
