<h1>Registrese para comenzar</h1>
<form method="post" action="/docente/registro">
    @csrf
    <input type="text" name="Apellidos y nombres" placeholder="Ingrese Apellidos y nombres">
    <input type="date" name="Fecha de nacimiento" placeholder="Ingrese su fecha de nacimiento">
    <input type="date" name="Asignatura" placeholder="Ingrese su asignatura">
    <input type="text" name="Telefono" placeholder="Ingrese numero de telefono">
    <input type="text" name="Correo electronico" placeholder="Ingrese direccion de correo">
    <input type="text" name="Password" placeholder="Ingrese contraseña">
    <input type="submit" value="Guardar">
</form>   