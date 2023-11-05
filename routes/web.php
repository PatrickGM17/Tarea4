<?php

use Illuminate\Support\Facades\Route;

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
Route::post('estudiante/registro',[EstudianteController::class, 'guardarRegistro']);

Route::get('docente/registro',[DocenteController::class, 'mostrarRegistro']);
Route::post('docente/registro',[DocenteController::class, 'guardarRegistro']);

Route::get('cursos/mostrar', [CursosController::class, 'show']);