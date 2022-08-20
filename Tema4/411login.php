<?php

/*
 *
 * 411login.php: hace de controlador, por lo que debe comprobar los datos recibidos
 * (solo permite la entrada de usuario/usuario y si está bien correcto,
 * ceder el control a la vista del siguiente ejercicio. No contiene código HTML.
 *
 */

const USUARIO_REGISTRADO = "miguel";
const CONTRASENYA_REGISTRADA = "leugim";

if (!isset($_POST['usuario']) || !isset($_POST['contrasenya'])){
    echo "Parámetros incorrectos";
}else{
    //Proceso de filtrado del usuario y la contraseña
    $usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $contrasenya = filter_var($_POST['contrasenya'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    session_start();
    $_SESSION['usuario']=$usuario;
    $_SESSION['contrasenya']=$contrasenya;
    if ($usuario == USUARIO_REGISTRADO and $contrasenya==CONTRASENYA_REGISTRADA){
        header("refresh:0;url=412peliculas.php");
    }else{
        header("refresh:0;url=410login.php");
    }
}