<?php

/*
225tabla.php: A partir de un número de filas y columnas, crear una tabla con ese tamaño. 
Las celdas deben estar rellenadas con los valores de las coordenadas de cada celda.
*/

if (!isset($_POST['filas']) || !isset($_POST['columnas'])){
    echo "Los parámetros no se han recibido de forma correcta";
}else{
    $filas=$_POST['filas'];
    $columnas = $_POST['columnas'];

    //Creamos la cabecera de la tabla y la etiqueta del cuerpo
    echo "<table style='border: 2px solid black' rules=all>";
    echo "<tbody>";
    

    for ($x=1;$x<=$filas;$x++){
        echo "<tr>";
        for($y=1;$y<=$columnas;$y++){
            echo "<td>($x,$y)</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}