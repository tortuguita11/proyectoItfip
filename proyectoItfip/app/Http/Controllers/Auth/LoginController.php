<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login'); //registro
        //dd($request); // es para mostrar la informacionde l formulario
    }
    public function IniciarSesion(Request $request)
    {
        //dd($request);
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'El email es requerido',
                'password.required' => 'La contraseña es requerida'
            ]
        );

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'Las credenciales no son correctas']);
    }

    public function create(array $data)
    {
        User::create(
            [
                'nombre' => $data['nombre'],
                'email' => $data['email'],
                'password' => bcrypt($data['password'])
            ]
        );
    }
}
