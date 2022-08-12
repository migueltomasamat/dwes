<?php
/*
211reloj.php: Escribe un programa que funcione similar a un reloj, 
de manera que a partir de los valores de hora, minuto y segundo muestre la hora dentro de un segundo. 
Tras las 23:59:59 serán las 0:0:0.
*/

if (!isset($_GET['hora']) && !isset($_GET['minuto']) && !isset($_GET['segundo'])){
    echo "No se han pasado los suficientes parámetros";
}else{
    $hora = $_GET['hora'];
    $minuto = $_GET['minuto'];
    $segundo = $_GET['segundo'];

    if ($hora==23 and $minuto==59 and $segundo==59){
        echo "0:0:0";
    }else if ($segundo==59 and $minuto==59){
        echo $hora+1 . ":0:0";
    }else if ($segundo ==59){
        echo "$hora:". $minuto+1 .":0";
    }else{
        echo "$hora:$minuto:" . $segundo+1;
    }
}