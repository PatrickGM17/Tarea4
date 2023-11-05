<h1>Registrese para ver los cursos</h1>
<form method="post" action="/estudiante/registro">
    @csrf
    <input type="text" name="Apellidos y nombres" placeholder="Ingrese Apellidos y nombres">
    <input type="date" name="Fecha de nacimiento" placeholder="Ingrese su fecha de nacimiento">
    <input type="text" name="Telefono" placeholder="Ingrese numero de telefono">
    <input type="text" name="Correo electronico" placeholder="Ingrese direccion de correo">
    <input type="text" name="Password" placeholder="Ingrese contraseña">
    <input type="submit" value="Guardar">
</form>   