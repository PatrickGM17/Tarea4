<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Models\Docente;
use App\Models\Cursos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DocenteController extends Controller
{
        public function mostrarRegistro(){
            return view("registroDocente");
        }

        public function guardarRegistro(Request $request)
        {
            /*$request->validate([
                "Apellidos y nombres" => "required|string",
                "Fecha de nacimiento" => "required|date",
                "Asignatura" => "required|string",
                "Telefono" => "required",
                "Correo electronico" => "required",
                "Password" => "required",
            ]);

            Docente::create($request->all());*/
            
    
        $docente = new Docente();
        $docente->Apellidos = $request["Apellidos"];
        $docente->Nombres = $request["Nombres"];
        $docente->FechaDeNacimiento = $request["FechaDeNacimiento"];
        $docente->Asignatura = $request["Asignatura"];
        $docente->Telefono = $request["Telefono"];
        $docente->Correo = $request["Correo"];
        $docente->Password = Hash::make($request->input('Password'));
        $docente->save();

        return view('registroDocenteGuardar');
    }
    public function mostrarFormularioCurso()
    {
        return view('formularioCurso');
    }

    public function subirCurso(Request $request)
    {
        $request->validate([
            'NombreDeCurso' => 'required|string',
            'Descripcion' => 'required|string',
            'Duracion' => 'required|',
            'CantidadDeTemas' => 'required|',
        ]);

        $curso = new Cursos();
        $curso->nombre = $request->input('NombreDeCurso');
        $curso->descripcion = $request->input('Descripcion');
        $curso->duracion = $request->input('Duracion');
        $curso->cantidadDeTemas = $request->input('CantidadDeTemas');

        $curso->docente_id = auth()->user()->id;
        $curso->save();

        return redirect()->route('dashboard')->with('success', 'Curso subido exitosamente');
    }
    public function mostrarFormularioLogin()
    {
        return view('DocenteLogin');
    }
    public function login(Request $request)
    {
        $request->validate([
            'Correo' => 'required|email',
            'Password' => 'required',
        ]);

        $docente = DB::table('docentes')->where('Correo', $request->Correo)->first();

        if ($docente && Hash::check($request->Password, $docente->Password)) {
            session(['docente_id' => $docente->id]);

            return redirect()->route('dashboard');
        }
        return back()->withErrors(['Correo' => 'Credenciales incorrectas'])->withInput();
    }
}

