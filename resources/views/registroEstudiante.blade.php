@extends('layouts.app')
@section('content')
<h1>Registrese para ver los cursos disponibles</h1>

<form method="post" action="/estudiante/guardar">
    @csrf
    Ingrese Apellidos: <input type="text" name="Apellidos" placeholder="Ingrese Apellidos"><br>
    Ingrese Nombres: <input type="text" name="Nombres" placeholder="Ingrese Nombres"><br>
    Ingrese Fecha de nacimiento :<input type="date" name="FechaDeNacimiento" placeholder="Ingrese su fecha de nacimiento"><br>
    Ingrese Telefono: <input type="text" name="Telefono" placeholder="Ingrese numero de telefono"><br>
    Ingrese Email: <input type="text" name="Email" placeholder="Ingrese direccion de correo"><br>
    Ingrese Metodo de pago:<input type="text" name="Tarjeta" placeholder="Ingrese nro de tarjeta"><br>
    Ingrese Contraseña:<input type="password" name="Password" placeholder="Ingrese contraseña"><br>
    <input type="submit" value="Guardar">
</form>   
@endsection