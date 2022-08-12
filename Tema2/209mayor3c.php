<?php

/*
209mayor3c.php: Utiliza en las condiciones los operadores lógicos.
*/

//Detectamos si las variables se han pasado como parámetros en la URL
if (!isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c']) ){
    echo "Variables no definidas";
}else{

    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if ($a > $b && $a > $c){
        echo "La variable a es la mayor";
    }else if ($b > $a && $b > $c){
        echo "La variable b es la mayor";
    }else if ($c > $a && $c > $b){
        echo "La variable c es la mayor";
    }else{
        echo "No existe una variable que sea mayor que el resto";
    }
}

