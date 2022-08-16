<?php

/*
254palindromo.php: Escribe una función que devuelva un booleano indicando si una palabra es palíndroma 
(se lee igual de izquierda a derecha que de derecha a izquierda, por ejemplo, “ligar es ser agil”).
*/

function esPalindromo (string $frase):bool{
    $palindromo = false;
    $frase = str_replace(' ','',$frase);

    if($frase==strrev($frase)){
        $palindromo=true;
    }

    return $palindromo;
}


//Prueba de la función

echo esPalindromo("ligar es ser agil");