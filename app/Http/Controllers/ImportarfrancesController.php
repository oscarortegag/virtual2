<?php

namespace App\Http\Controllers;

use App\Models\libros_frances;
use Illuminate\Http\Request;
use App\Imports\InventarioImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportarfrancesController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('import_file');

        Excel::import(new InventarioImport, $file);

        return redirect()->route('librosfrances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libros_frances  $libros_frances
     * @return \Illuminate\Http\Response
     */
    public function show(libros_frances $libros_frances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libros_frances  $libros_frances
     * @return \Illuminate\Http\Response
     */
    public function edit(libros_frances $libros_frances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libros_frances  $libros_frances
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, libros_frances $libros_frances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libros_frances  $libros_frances
     * @return \Illuminate\Http\Response
     */
    public function destroy(libros_frances $libros_frances)
    {
        //
    }
}
