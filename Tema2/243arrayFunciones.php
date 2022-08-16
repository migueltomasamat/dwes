<?php

    require_once './243biblioteca.php';
/*
243arrayFunciones.php: haciendo uso de un array que almacene el nombre de las funciones del archivo anterior, a partir de dos números recibidos por URL,
recorre el array e invoca a las funciones de manera dinámica haciendo uso de funciones variable.
*/

$arrayFunciones = ['sumar','restar','multiplicar','dividir'];

if (!isset($_GET['num1']) || !isset($_GET['num2'])){
    echo "No se han pasado los parámetros correctos";
}else{
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];

    foreach($arrayFunciones as $funcion){
        echo "$funcion:". $funcion($num1,$num2) ."<br>";
    }
}
 

