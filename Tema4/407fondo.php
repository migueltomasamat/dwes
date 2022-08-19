<?php

/*
 * 407fondo.php: Mediante el uso de cookies, crea una página con un desplegable con varios colores,
 * de manera que el usuario pueda cambiar el color de fondo de la página (atributo bgcolor).
 * Al cerrar la página, ésta debe recordar, al menos durante 24h,
 * el color elegido y la próxima vez que se cargue la pagina,
 * lo haga con el último color seleccionado.
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
    $salida = "<form action='./407fondo.php' method=get>";
    $salida .="<label for='selectColores'>Seleccione el color de fondo que más le guste</label>";
    $salida .="<select id='selectColores' name='fondo'>";
    $salida .="<option value='white'>Blanco</option>";
    $salida .="<option value='red'>Rojo</option>";
    $salida .="<option value='blue'>Azul</option>";
    $salida .="<option value='green'>Verde</option>";
    $salida .="</select>";
    $salida .="<button type='submit'>Enviar</button>";
    $salida .="</form>";
    return $salida;
}

//Primero comprobamos si nos llega por parametro el color a cambiar, si es así establecemos el valor de la cookie y refrescamos la página
if (isset($_GET['fondo'])) {
    $color = $_GET['fondo'];
    setcookie("colorFondo", $color, time() + 60 * 60 * 24);
    header("refresh:0;url=407fondo.php");
}else{
    //Si tenemos una cookie con el valor del color mostramos la web a través de las funciones con el color preestablecido
    if (isset($_COOKIE['colorFondo'])){
        $color= $_COOKIE['colorFondo'];
        echo mostrarEncabezado("CambiarColor").inicializarCuerpoColor($color).mostrarFormularioSeleccionColor().cerrarCuerpo();
    }else { //En caso de no tener la cookie establecida mostramos la web en color blanco
        $color = "white";
        echo mostrarEncabezado("CambiarColor") . inicializarCuerpoColor($color) . mostrarFormularioSeleccionColor() . cerrarCuerpo();
    }

}

