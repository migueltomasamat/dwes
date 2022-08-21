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
    header("refresh:0;url=410index.php");
}else {

    $s1 = new Serie("Breaking Bad", 2011);
    $s2 = new Serie("Better Call Saul", 2017);
    $s3 = new Serie("Lost", 2006);

    $arrayTele = array();
    array_push($arrayTele, $s1);
    array_push($arrayTele, $s2);
    array_push($arrayTele, $s3);

    $plantilla = new PlantillaHTML("Listado de Series");

    if (isset($_SESSION['usuario'])) {
        $opcionesMenu = array('Inicio' => '410index.php', 'Peliculas' => '412peliculas.php', 'Series' => '414series.php', 'Log out' => '413logout.php');
    } else {
        $opcionesMenu = array('Inicio' => '410index.php', 'Peliculas' => '412peliculas.php', 'Series' => '414series.php');

    }

    echo $plantilla->insertarEncabezado() . $plantilla->insertarMenuOpciones($opcionesMenu) . crearListaDesdeArray($arrayTele) . $plantilla->cerrarCuerpo();
}