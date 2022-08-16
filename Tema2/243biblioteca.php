<?php


/*
243biblioteca.php: crea un archivo con funciones para sumar, restar, multiplicar y dividir dos números.

*/

function sumar(int $num1,int $num2):int{
    return $num1+$num2;
}


function restar(int $num1,int $num2):int{
    return $num1-$num2;
}

function multiplicar(int $num1,int $num2):int{
    return $num1*$num2;
}

function dividir(int $num1,int $num2):int|bool{
    $retorno=false;
    if($num2!=0){
        $retorno=intval($num1/$num2);
    }
    return $retorno;
}