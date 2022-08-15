<?php

/*
237gestionarPersonas.php: A partir de las personas introducidas, mostrar sus datos en una tabla,
 y posteriormente, destacar los datos del más alto y el del más bajo.
*/

$totalDatos=count($_POST);
$totalPersonas = $totalDatos / 3;

//Obtenemos los datos de las personas 


echo "<table style='border:1px solid black'>";
echo "<thead>";
echo "<td>Nombre</td><td>Altura</td><td>Email</td>";
echo "</thead>";
echo "<tbody>";

foreach ($_POST as $clave => $valor){
    if (str_starts_with($clave,'nombrePersona')){
        echo "<tr>";
    }
    echo "<td>$valor</td>";
    if (str_starts_with($clave,'emailPersona')){
        echo "</tr>";
    }
}
echo "</tbody>";
echo "</table>";