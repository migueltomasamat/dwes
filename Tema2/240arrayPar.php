<?php

/*
240arrayPar.php: Crea las siguientes funciones:

Una función que averigüe si un número es par: esPar(int $num): bool
Una función que devuelva un array de tamaño $tam con números aleatorios comprendido entre $min y $max : arrayAleatorio(int $tam, int $min, int $max) : array
Una función que reciba un $array por referencia y devuelva la cantidad de números pares que hay almacenados: arrayPares(array &$array): int

*/

function esPar (int $num): bool{
    $retorno=false;
    if ($num%2==0){
        $retorno=true;
    }else{
        $retorno=false;
    }
    return $retorno;
}

function arrayAleatorio(int $tam, int $min, int $max) : array{
    $arrayAleatorio = array();
    for ($i=0;$i<$tam;$i++){
        $arrayAleatorio[$i]=mt_rand($min,$max);
    }
    return $arrayAleatorio;
}

function arrayPares(array &$array): int{
    $contador=0;

    foreach($array as $numero){
        if (esPar($numero)){
            $contador++;
        }
    }
    return $contador;
}


//Pruebas de las funciones 


echo esPar(4) ."<br>";

$arrayAleatorio= arrayAleatorio(10,5,200);
print_r($arrayAleatorio);
echo "<br>";

echo arrayPares($arrayAleatorio);

