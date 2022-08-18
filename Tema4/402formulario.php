<?php

/*
 *402formulario.html y 402formulario.php: Crea un formulario que solicite:

Nombre y apellidos.
Email.
URL página personal.
Sexo (radio).
Número de convivientes en el domicilio.
Aficiones (checkboxes) – poner mínimo 4 valores.
Menú favorito (lista selección múltiple) – poner mínimo 4 valores.
Muestra los valores cargados en una tabla-resumen.
 */


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

echo mostrarResumenParametros($_POST);

