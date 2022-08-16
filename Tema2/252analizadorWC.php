<?php

/*

Letras totales y cantidad de palabras
Una línea por cada palabra indicando su tamaño
Nota: no se puede usar str_word_count
252analizadorWC.php: Investiga que hace la función str_word_count, y vuelve a hacer el ejercicio.

*/

function analisisWordCount(string $frase){

    
    $arrayPalabras = str_word_count($frase,1);
    $acumuladorLetras = 0;
    foreach ($arrayPalabras as $palabra){
        $acumuladorLetras+=strlen($palabra);
        echo $palabra. ": ". strlen($palabra) . "<br>";
    }
    echo "Letras totales: ". $acumuladorLetras ."<br>";
    echo "Palabras totales: ". str_word_count($frase,0); 


}

//Prueba de la función 

analisisWordCount("La expectación generada por la nueva versión de PHP es muy importante");