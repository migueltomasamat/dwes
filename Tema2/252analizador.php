<?php

/*
252analizador.php: A partir de una frase con palabras sólo separadas por espacios, devolver

Letras totales y cantidad de palabras
Una línea por cada palabra indicando su tamaño
Nota: no se puede usar str_word_count
252analizadorWC.php: Investiga que hace la función str_word_count, y vuelve a hacer el ejercicio.
*/

function analizarFrase(string $frase){
    $acumuladorLetras=0;
    $arrayPalabras=explode(" ",$frase);
    foreach ($arrayPalabras as $palabra){
        $acumuladorLetras+=strlen($palabra);
        echo $palabra. ": ". strlen($palabra). "<br>";
    }
    echo "Hay un total de ". count($arrayPalabras)  ." palabras<br>";
    echo "Hay un total de $acumuladorLetras letras<br>";
}


//Prueba de la función 

analizarFrase("La expectación generada por la nueva versión de PHP es muy importante");