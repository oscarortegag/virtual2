<?php

namespace App\Http\Controllers;

use App\Models\material_ingles;
use Illuminate\Http\Request;
use App\Http\Requests\FrancesRequest;
use PDF;


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
        $datos = $request->validated();
        $material_ingles = material_ingles::create ( $datos );
        return redirect()->route('librosingles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\material_ingles  $material_ingles
     * @return \Illuminate\Http\Response
     */
    public function show(material_ingles $material_ingles)
    {
        //
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
        $datos = $request->validated();
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
}
