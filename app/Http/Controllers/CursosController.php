<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function cursoPorId(int $id){
        $curso = Curso::find($id);
        return view("mostrarCursos")->with("cursos", $curso);
    }
}
