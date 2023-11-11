<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

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
        $docente->Password = $request["Password"];
        $docente->save();

        return view('registroDocenteGuardar');
    }
}

