<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Program;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //

    public function index()
    {
        $facultades = Faculty::all();
        $programa_academico = Program::all();
        
        return view('auth.registro',  [
            'facultades' => $facultades,
            'programa_academico' => $programa_academico
        ]);
        

        
    }

    public function RegistroUsuario(Request $request)
    {
        //dd($request);
        $request->validate(

            [
           'primerNombre' => 'required',
            'segundoNombre' => 'required',
            'primerApellido' => 'required',
            'segundoApellido' => 'required',
            'email' => 'required|email',  // Cambié 'correo_institucional' a 'email'
            'password' => 'required',
            'cedulaCiudadania' => 'required',
            'cargo' => 'required',
            'numero_telefono' => 'required',
            'facultad' => 'required',
            'programa_academico' => 'required', // Añadido
            'rol' => 'required',

            ],
            [
                'primerNombre.required' => 'El primer nombre es requerido',
            'segundoNombre.required' => 'El segundo nombre es requerido',
            'primerApellido.required' => 'El primer apellido es requerido',
            'segundoApellido.required' => 'El segundo apellido es requerido',
            'email.required' => 'El correo institucional es requerido',
            'email.email' => 'El correo debe tener un formato válido',
            'password.required' => 'La contraseña es requerida',
            'cedulaCiudadania.required' => 'La cédula es requerida',
            'cargo.required' => 'El cargo es requerido',
            'numero_telefono.required' => 'El número de teléfono es requerido',
            'facultad.required' => 'La facultad es requerida',
            'programa_academico.required' => 'El programa académico es requerido', // Añadido
            'rol.required' => 'El rol es requerido',
            ]
        );

        $data = $request->all();
        // dd($request);

        try {
            $this->create($data);
            return redirect()->back()->with('success', 'Usuario creado exitosamente');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error al crear el usuario: ' . $th->getMessage());
        }
    }
    public function create(array $data)
    {
        // dd($data);
        try {
            User::create([
                'primerNombre' => $data['primerNombre'],
                'segundoNombre' => $data['segundoNombre'],
                'primerApellido' => $data['primerApellido'],
                'segundoApellido' => $data['segundoApellido'],
                'email' => $data['email'], // Cambiado 'correo_institucional' a 'email'
                'password' => bcrypt($data['password']),
                'cedulaCiudadania' => $data['cedulaCiudadania'],
                'cargo' => $data['cargo'],
                'numero_telefono' => $data['numero_telefono'],
                'facultad' => $data['facultad'],
                'programa_academico' => $data['programa_academico'], // Añadido
                'rol' => $data['rol'],
                'estado' => 'activo', 
                'fecha_sistema' => Carbon::now()
            ]);
          
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
