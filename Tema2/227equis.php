<?php

/*
227equis.php: Basándote en el ejercicio anterior, ahora sólo debe aparecer el contenido de los dos diagonales.
*/

if (!isset($_POST['filas']) || !isset($_POST['columnas'])){
    echo "Los parámetros no se han recibido de forma correcta";
}else{
    $filas=$_POST['filas'];
    $columnas = $_POST['columnas'];

    //Creamos la cabecera de la tabla y la etiqueta del cuerpo
    echo "<table style='border: 2px solid black;rules=all'>";
    echo "<tbody>";
    

    for ($x=1;$x<=$filas;$x++){
        echo "<tr>";
        for($y=1;$y<=$columnas;$y++){
            if ($x==$y){
                echo "<td>($x,$y)</td>";
            }else{
                echo "<td></td>";
            }
            
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}