<?php

/*
250fraseImpares.php: Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares.
*/

function fraseImpar (string $frase):string{
    $stringSalida=false;
    $i=1;
    while($i<strlen($frase)){
        $stringSalida.=$frase[$i];
        $i+=2;
    }
    return $stringSalida;

}


//Prueba de funciones

echo fraseImpar("Mary tenia un corderito");