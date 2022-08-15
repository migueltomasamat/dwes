<?php

/*
232mates.php: A partir del ejercicio 230, genera un array aleatorio de 33 elementos con números comprendidos entre el 0 y 100 y calcula:

El mayor
El menor
La media
*/

$array = array();

for ($i=0;$i<33;$i++){
    $array[$i]=rand(0,100);
}

echo "El mayor elemento es: ". max($array) ."<br>";
echo "El menor elemento es: ". min($array) ."<br>";
echo "La media de los elementos es: ". array_sum($array)/count($array) ."<br>";