<?php

function mostrarResumenParametros(array $arrayParametros):string{
    $stringSalida="<table style='border:1px solid black;'>";
    foreach ($arrayParametros as $clave=>$valor){
        $stringSalida.= "<tr>";
        if (!is_array($valor)){
            $stringSalida.= "<td>$clave</td><td>$valor</td>";
        }else{
            $stringSalida.= "<td>$clave</td><td>";
            $aficiones=false;
            foreach($valor as $aficion){ //Vamos recorriendo las aficiones y añadiéndolas con un guión
                $aficiones .= $aficion ."-";
            }
            $stringSalida.= substr($aficiones,0,strlen($aficiones)-1); //borramos el guión al final de la última afición
            $stringSalida.= "</td>";
        }
        $stringSalida.= "</tr>";
    }
    $stringSalida.= "</table>";
    return $stringSalida;
}

session_start();
$arrayDatos = array();

//Recorremos los datos personales guardados en la session
if (!isset($_SESSION['nombre']) || !isset($_SESSION['apellidos']) || !isset($_SESSION['email']) || !isset($_SESSION['url']) || !isset($_SESSION['sexo'])){
    echo "No se ha podido leer la sesión <br>";
}else{
    foreach ($_SESSION as $clave => $valor){ //si tuvieramos datos almacenados en una sessión anterior se leerían y se mostrarían por pantalla
        $arrayDatos[$clave] = $valor;
    }
    if (!isset($_POST['convivientes']) || !isset($_POST['aficiones']) || !isset($_POST['menufavorito'])){
        echo "Error. Parámetros insuficientes";
    }else{
        foreach($_POST as $key => $value){
            $arrayDatos[$key] = $value;
        }
    }
}
echo mostrarResumenParametros($arrayDatos);