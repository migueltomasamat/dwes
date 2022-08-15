<?php

/*
228cuadradoMultiplicar.php: Crea un programa que muestre por pantalla un cuadrado exactamente igual 
(fíjate bien en los encabezados, tanto de las filas como de las columnas) al de la imagen con las tablas de multiplicar.

*/

$filas = 10;
$columnas = 10;

?>

<table style="border: 1px black solid;">
        <?php
        for ($x=0;$x<=$filas+1;$x++){
            echo "<tr>";
            for ($y=0;$y<=$columnas+1;$y++){
                if ($x==0 && $y==0){
                    echo "<td style='background-color:blue;width:5%;color:white'>X</td>";
                }
                else if ($x==0){
                    echo "<td style='background-color:blue;width:5%;color:white'>". $y-1 ."</td>";
                }
                else if ($y==0){
                    echo "<td style='background-color:orange;width:5%;'>". $x-1 ."</td>";
                }else{
                    echo "<td>" . ($x-1)*($y-1) ."</td>";
                }

            }
        }
        ?>
</table>