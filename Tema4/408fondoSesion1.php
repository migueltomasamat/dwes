<?php

/*
 * 408fondoSesion1.php: Modifica el ejercicio anterior para almacenar el color de fondo en la sesión y no emplear cookies.
 * Además, debe contener un enlace al siguiente archivo. 408fondoSesion2.php: Debe mostrar el color y dar la posibilidad de:
 *  ** volver a la página anterior mediante un enlace
 *  ** y mediante otro enlace, vaciar la sesión y volver a la página anterior.
 */

function mostrarEncabezado(string $titulo): string{
    return "<!DOCTYPE html>
                <html lang='es'>
                <head>
                    <meta charset='UTF-8'>
                    <title>$titulo</title>
                </head>";
}
function inicializarCuerpoColor($color):string{
    return "<body style='background-color:$color;'>";
}

function cerrarCuerpo():string{
    return "</body>";
}
function mostrarFormularioSeleccionColor():string{
    $salida = "<form action='./408fondoSesion2.php' method=get>";
    $salida .="<label for='selectColores'>Seleccione el color de fondo que más le guste</label>";
    $salida .="<select id='selectColores' name='fondo'>";
    $salida .="<option value='white'>Blanco</option>";
    $salida .="<option value='red'>Rojo</option>";
    $salida .="<option value='blue'>Azul</option>";
    $salida .="<option value='green'>Verde</option>";
    $salida .="</select>";
    $salida .="<button type='submit'>Cambiar color de la siguiente página</button>";
    $salida .="</form>";
    return $salida;
}
session_start();

if (isset($_GET['borrarSesion'])){
    session_destroy();
}

echo mostrarEncabezado("Selección de color").inicializarCuerpoColor("white").mostrarFormularioSeleccionColor();
echo "<a href='408fondoSesion2.php'>Ir a la página 2 sin cambiar color</a>";
echo cerrarCuerpo();

