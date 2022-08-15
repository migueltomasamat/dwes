<?php

/*
222potenciaWhile.php: Reescribe el ejercicio anterior haciendo uso sólo de while.
*/

if(!isset($_GET['base']) || !$_GET['exponente']){
    echo "No se han pasado los parámetros correctos";
}else{

    $base = $_GET['base'];
    $exponente = $_GET['exponente'];

    $acumulador=1;
    $i=1;
    do{
        $acumulador = $acumulador * $base;
        $i++;
    }
    while ($i<=$exponente);
    
    echo "La potencia de $base elevado a $exponente es igual a: $acumulador";

}