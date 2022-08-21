<?php

/*
 *
 * 411login.php: hace de controlador, por lo que debe comprobar los datos recibidos
 * (solo permite la entrada de usuario/usuario y si está bien correcto,
 * ceder el control a la vista del siguiente ejercicio. No contiene código HTML.
 *
 */

include_once "app/Serie.php";
include_once "app/Pelicula.php";
use app\Serie;
use app\Pelicula;

const USUARIO_REGISTRADO = "miguel";
const CONTRASENYA_REGISTRADA = "leugim";

if (!isset($_POST['usuario']) || !isset($_POST['contrasenya'])){
    echo "Parámetros incorrectos";
}else{
    //Proceso de filtrado del usuario y la contraseña
    $usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $contrasenya = filter_var($_POST['contrasenya'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    session_start();
    if ($usuario == USUARIO_REGISTRADO and $contrasenya==CONTRASENYA_REGISTRADA){
        $_SESSION['usuario']=$usuario;
        $_SESSION['contrasenya']=$contrasenya;
        header("refresh:0;url=415peliculas.php");

        //Creamos el listado de películas y lo guardamos en la SESSION
        $p1 = new Pelicula("Padrino 1", 1956, "Martin Scorsese");
        $p2 = new Pelicula("Regreso al futuro", 1986, "Robert Zemekis");
        $p3 = new Pelicula("Forest Gump", 1998, "Robert Zemekis");

        $arrayPelis=array();
        array_push($arrayPelis, $p1);
        array_push($arrayPelis, $p2);
        array_push($arrayPelis, $p3);

        $_SESSION['peliculas']=$arrayPelis;

        $arraySeries = array();
        $s1 = new Serie("Breaking Bad", 2011);
        $s2 = new Serie("Better Call Saul", 2017);
        $s3 = new Serie("Lost", 2006);

        array_push($arraySeries, $s1);
        array_push($arraySeries, $s2);
        array_push($arraySeries, $s3);

        $_SESSION['series']=$arraySeries;


    }else{
        header("refresh:0;url=415index.php");
    }
}