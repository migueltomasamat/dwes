<?php

/*
 *
 * 410index.php: formulario de inicio de sesión
 *
 */
include_once "app/PlantillaHTML.php";
use app\PlantillaHTML;

$plantilla = new PlantillaHTML("Login de usuario");
echo $plantilla->insertarFormularioLogin("415controlador.php","post");