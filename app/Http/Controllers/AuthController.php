<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libros_frances;
use App\Models\prestamos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $id = $request->query('id');
    $enable = $request->query('enable');

    $info = prestamos::join("libros_frances", 'libros_frances.id', '=', 'prestamos.libros_frances_id')
        ->where('prestamos.usuario_id', '=', $id)
        ->when(isset($enable), function ($query) use ($enable) {
            // Filtrar por el estado de finalizado solo si el parámetro $enable está presente en la solicitud
            return $query->where('prestamos.finalizado', '=', $enable);
        })
        ->select('libros_frances.titulo', 'prestamos.fecha_final', 'prestamos.foto')
        ->get();

    if ($info->isEmpty()) {
        $response = [
            "message" => "No hay préstamos"
        ];
        return response()->json($response);
    }

    $datos = [];
    foreach ($info as $inf) {
        $imagePath = 'app/public/imagenes/caratulas/' . $inf->foto;
        $imageUrl = url(Storage::url($imagePath));

        $datos[] = [
            "titulo" => $inf->titulo,
            "fecha_final" => $inf->fecha_final,
            "image" => $imageUrl
        ];
    }

    return response()->json($datos);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = $request->user();
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'message' => 'Inicio de sesión exitoso',
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    } else {
        throw ValidationException::withMessages([
            'email' => ['Las credenciales proporcionadas son incorrectas.'],
        ]);
    }
} 


public function listar(){

    $info = prestamos::join("libros_frances", 'libros_frances.id', '=', 'prestamos.libros_frances_id')
    ->join("users", 'users.id', '=', 'prestamos.usuario_id')
    ->select('libros_frances.titulo', 'prestamos.fecha_final' ,'users.name')
    ->get();

if ($info->isEmpty()) {
    $response = [
        "message" => "No hay préstamos"
    ];
    return response()->json($response);
}

return response()->json($info);
}


public function libros(){

    $libros = libros_frances::select('titulo','nivel','editorial','autor','categoria','isbn')->get();
    //$user = User::all();
    return response()->json($libros);
    //return $user;

}
}
