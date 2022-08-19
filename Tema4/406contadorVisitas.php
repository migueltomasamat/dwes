<?php

/*
 * 406contadorVisitas.php: Mediante el uso de cookies, informa al usuario de si es su primera visita,
 *  o si no lo es, muestre su valor (valor de un contador).
 * Además, debes permitir que el usuario reinicialice su contador de visitas.
 */

function reiniciarContadorVisitas(): string
{
    $salida = false;
    //Creamos un formulario que llama a este mismo fichero .php
    $salida ="<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
    $salida .="<input type='submit' name='botonBorrar' value='borrar' />";
    $salida .= "</form>";
    return $salida;
}


$visitas=0;
//Comprobamos si se ha pulsado el botón de borrado
if(isset($_POST['botonBorrar'])){
    setcookie("visitas","",1);
}else {
    //Comprobamos si existe la cookie de visitas, hay que notar que siempre se trabaja con setcookie antes de mostrar nada por pantalla
    if (!isset($_COOKIE['visitas'])) {
        setcookie("visitas", 1);
        echo "Esta es tu primera visita";
        echo  reiniciarContadorVisitas();

    } else {
        $visitas = $_COOKIE['visitas'];
        setcookie("visitas", $visitas + 1);
        echo "Bienvenido otra vez. Esta es tu " . $visitas . "<br>";
        echo reiniciarContadorVisitas();
    }
}