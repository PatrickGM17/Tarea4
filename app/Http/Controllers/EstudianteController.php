<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Cursos;

class EstudianteController extends Controller
{
    public function mostrarRegistro(){
        return view("registroEstudiante");
    }

    public function guardarRegistro(Request $request)
    {

    
    $estudiante = new Estudiante();
    $estudiante->Apellidos = $request["Apellidos"];
    $estudiante->Nombres = $request["Nombres"];
    $estudiante->FechaDeNacimiento = $request["FechaDeNacimiento"];
    $estudiante->Telefono = $request["Telefono"];
    $estudiante->Email = $request["Email"];
    $estudiante->Tarjeta = $request["Tarjeta"];
    $estudiante->Password = $request["Password"];
    $estudiante->save();

    return view('registroEstudianteGuardar');
  }
  public function mostrarCursos()
{
    $cursos = Cursos::all();
    return view('mostrarCursosEstudiante', compact('cursos'));
}
public function mostrarFormularioLogin()
    {
        return view('EstudianteLogin');
    }
    public function login(Request $request)
    {
        $request->validate([
            'Correo' => 'required|email',
            'Password' => 'required',
        ]);

        $estudiante = DB::table('estudiantes')->where('Correo', $request->Correo)->first();

        if ($estudiante && Hash::check($request->Password, $estudiante->Password)) {
            session(['estudiante_id' => $estudiante->id]);

            return redirect()->route('dashboard');
        }
        return back()->withErrors(['Correo' => 'Credenciales incorrectas'])->withInput();
    }
}

