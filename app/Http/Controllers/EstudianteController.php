<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

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
}
