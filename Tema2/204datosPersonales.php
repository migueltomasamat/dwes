<?php

/*
203datosPersonales.php: Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido, email, año de nacimiento y teléfono.
Luego muéstralos por pantalla dentro de una tabla.
*/

$nombre = $_POST["nombreUsuario"];
$primerApellido = $_POST["primerApellidoUsuario"];
$segundoApellido = $_POST["segundoApellidoUsuario"];
$email = $_POST["emailUsuario"];
$anyoNacimiento = $_POST["anyoNacimientoUsuario"];
$telefono = $_POST["telefonoUsuario"];

echo "<table border= black solid 1px>";
echo "<tr>";
echo "<th>Nombre</th><td>$nombre</th>";
echo "<tr>";
echo "<th>Primer Apellido</th><td>$primerApellido</th>";
echo "<tr>";
echo "<th>Segundo Apellido</th><td>$segundoApellido</th>";
echo "<tr>";
echo "<th>Email</th><td>$email</th>";
echo "<tr>";
echo "<th>Año de Nacimiento</th><td>$anyoNacimiento</th>";
echo "<tr>";
echo "<th>Teléfono</th><td>$telefono</th>";
echo "<tr>";
echo "</table>";