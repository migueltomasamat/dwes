<?php

/*
209mayor3.php: Sin hacer uso de condiciones que utilicen dentro la condición los operadores lógicos, muestra el mayor de tres números (a, b y c).
*/

//Detectamos si las variables se han pasado como parámetros en la URL
if (!isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c']) ){
    echo "Variables no definidas";
}else{

    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $noMayor = false;

    if ($a > $b){
        if ($a > $c){
            echo "La variable a es la mayor";
            $noMayor = true;
        }
    }
    if ($b > $a){
        if ($b > $c){
            echo "La variable b es la mayor";
            $noMayor = true;
        }
    }
    if ($c > $a){
        if ($c > $b){
            echo "La variable c es la mayor";
            $noMayor = true;
        }
    }
    if (!$noMayor){
        echo "Ninguna de las variables es estrictamente mayor al resto";
    }
}