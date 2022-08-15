<?php

/*
222potencia.php: A partir de una base y exponente, mediante la acumulación de productos, calcula la potencia utilizando la instrucción for.
*/

if(!isset($_GET['base']) || !$_GET['exponente']){
    echo "No se han pasado los parámetros correctos";
}else{

    $base = $_GET['base'];
    $exponente = $_GET['exponente'];

    $acumulador=1;
    for ($i=0;$i<$exponente;$i++){
        $acumulador = $acumulador * $base;
    }

    echo "La potencia de $base elevado a $exponente es igual a: $acumulador";

}