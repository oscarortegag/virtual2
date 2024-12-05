<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile()
    {
        // Obtener los datos del usuario desde la base de datos
        $user = User::find(auth()->user()->id);

        // Pasar los datos del usuario a la vista
        return view('usuario', compact('user'));
    }
}