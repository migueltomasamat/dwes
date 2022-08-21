<?php

/*
 * 412peliculas.php: vista que muestra como título "Listado de Películas", y una lista desordenada con tres películas.
 */

include_once "app/PlantillaHTML.php";
include_once "app/Pelicula.php";

use app\PlantillaHTML;
use app\Pelicula;


function crearListaDesdeArray(array $arrayPeliculas):string{
    $salida="<ul style='margin-top:100px;'>";
    foreach($arrayPeliculas as $valor){
        $salida  .= $valor->mostrarDatosPeliculaLista();
    }
    $salida .= "</ul>";
    return $salida;
}
session_start();
if(!isset($_SESSION['usuario'])){
    header("refresh:0;url=410index.php");
}else {

    $p1 = new Pelicula("Padrino 1", 1956, "Martin Scorsese");
    $p2 = new Pelicula("Regreso al futuro", 1986, "Robert Zemekis");
    $p3 = new Pelicula("Forest Gump", 1998, "Robert Zemekis");

    $arrayPeli = array();
    array_push($arrayPeli, $p1);
    array_push($arrayPeli, $p2);
    array_push($arrayPeli, $p3);

    $plantilla = new PlantillaHTML("Listado de Películas");

    if (isset($_SESSION['usuario'])) {
        $opcionesMenu = array('Inicio' => '410index.php', 'Peliculas' => '412peliculas.php', 'Series' => '414series.php', 'Log out' => '413logout.php');
    } else {
        $opcionesMenu = array('Inicio' => '410index.php', 'Peliculas' => '412peliculas.php', 'Series' => '414series.php');

    }

    echo $plantilla->insertarEncabezado(). $plantilla->insertarMenuOpciones($opcionesMenu). crearListaDesdeArray($arrayPeli) . $plantilla->cerrarCuerpo();
}

