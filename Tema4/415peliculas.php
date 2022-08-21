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
    header("refresh:0;url=415index.php");
}else {

    if (!isset($_SESSION['peliculas'])){
        echo "Listado de películas no encontrado";
    }else{
        $plantilla = new PlantillaHTML("Listado de Películas");

        if (isset($_SESSION['usuario'])) {
            $opcionesMenu = array('Inicio' => '415index.php', 'Peliculas' => '415peliculas.php', 'Series' => '415series.php', 'Log out' => '415logout.php');
        } else {
            $opcionesMenu = array('Inicio' => '415index.php', 'Peliculas' => '415peliculas.php', 'Series' => '415series.php');

        }

        echo $plantilla->insertarEncabezado(). $plantilla->insertarMenuOpciones($opcionesMenu). crearListaDesdeArray($_SESSION['peliculas']) . $plantilla->cerrarCuerpo();
    }


}

