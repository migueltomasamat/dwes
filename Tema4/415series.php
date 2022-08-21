<?php

/*
 * 412peliculas.php: vista que muestra como título "Listado de Películas", y una lista desordenada con tres películas.
 */
include_once "app/PlantillaHTML.php";
include_once "app/Serie.php";

use app\PlantillaHTML;
use app\Serie;


function crearListaDesdeArray(array $arraySeries):string{
    $salida="<ul style='margin-top: 50px;'>";
    foreach($arraySeries as $valor){
        $salida  .= $valor->mostrarDatosSerieLista();
    }
    $salida .= "</ul>";
    return $salida;
}
session_start();
if(!isset($_SESSION['usuario'])){
    header("refresh:0;url=415index.php");
}else {

    if (!isset($_SESSION['peliculas'])) {
        echo "Listado de películas no encontrado";
    } else {

        $plantilla = new PlantillaHTML("Listado de Series");

        if (isset($_SESSION['usuario'])) {
            $opcionesMenu = array('Inicio' => '415index.php', 'Peliculas' => '415peliculas.php', 'Series' => '415series.php', 'Log out' => '415logout.php');
        } else {
            $opcionesMenu = array('Inicio' => '415index.php', 'Peliculas' => '415peliculas.php', 'Series' => '415series.php');

        }

        echo $plantilla->insertarEncabezado() . $plantilla->insertarMenuOpciones($opcionesMenu) . crearListaDesdeArray($_SESSION['series']) . $plantilla->cerrarCuerpo();

    }
}