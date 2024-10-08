<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerController extends Controller
{
    //
    public function index()
    {
        $data = User::all();
        return view('auth.usuarios.ver', ['usuarios' => $data]);
    }
    public function verUsuario($id)
    {
        $data = User::find($id);
        // dd($data);
        return view('auth.usuarios.ver_usuario', ['data' => $data]);
    }
}
