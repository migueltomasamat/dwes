<?php

/*
208posnegcero.php: A partir de un numero, muestra por pantalla si el número es positivo, negativo o cero.
*/

if (!isset($_GET['numero'])){
    echo "Introduzca el parámero numero en la URL";
}else{
    $numero=$_GET['numero'];

    if ($numero>0){
        echo "El número es positivo";
    }else if ($numero < 0){
        echo "El número es negativo";
    }else{
        echo "El número es 0";
    }
}

