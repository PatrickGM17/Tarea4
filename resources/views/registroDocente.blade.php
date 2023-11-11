@extends('layouts.app')
@section('content')
<h1>Registrese para comenzar</h1>

<form method="post" action="/docente/guardar">
    @csrf
    Ingrese apellidos: <input type="text" name="Apellidos" style="width: 250px" placeholder="Ingrese apellidos"><br>
    Ingrese nombres: <input type="text" name="Nombres" style="width: 250px" placeholder="Ingrese nombres"><br>
    Ingrese fecha de nacimiento: <input type="date" name="FechaDeNacimiento" placeholder="Ingrese su fecha de nacimiento"><br>
    Ingrese su asignatura : <input type="text" name="Asignatura" placeholder="Ingrese su asignatura"><br>
    Ingrese su numero de telefono :<input type="text" name="Telefono" style="width: 200px" placeholder="Ingrese numero de telefono"><br>
    Ingrese direccion de correo :<input type="text" style="width: 200px" name="Correo" placeholder="Ingrese direccion de correo"><br>
    Ingrese una constraseña :<input type="password" name="Password" placeholder="Ingrese contraseña"><br>
    <input type="submit" value="Guardar">
</form>   
@endsection