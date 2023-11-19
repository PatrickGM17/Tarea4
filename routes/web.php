<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('estudiante/registro',[EstudianteController::class, 'mostrarRegistro']);
Route::post('estudiante/guardar',[EstudianteController::class, 'guardarRegistro']);

Route::get('estudiante/login', [EstudianteController::class, 'mostrarFormularioLogin'])->name('estudiante.login');
Route::post('estudiante/login', [EstudianteController::class, 'login'])->name('estudiante.login_post');

Route::get('estudiante/cursos', [EstudianteController::class, 'mostrarCursos'])->name('estudiante.mostrar_cursos');

Route::get('docente/registro',[DocenteController::class, 'mostrarRegistro']);
Route::post('docente/guardar',[DocenteController::class, 'guardarRegistro']);

Route::get('docente/login', [DocenteController::class, 'mostrarFormularioLogin'])->name('docente.login');
Route::post('docente/login', [DocenteController::class, 'login'])->name('docente.login_post');

Route::get('docente/subir_curso', [DocenteController::class, 'mostrarFormularioCurso'])->name('docente.subir_curso');
Route::post('docente/subir_curso', [DocenteController::class, 'subirCurso'])->name('docente.subir_curso_post');


