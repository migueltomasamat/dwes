<?php

/*
251vocales.php: A partir de una frase, devuelve la cantidad de cada una de las vocales, y el total de ellas.
*/

function contarVocales(string $frase):array{

    $arrayRetorno = array ('a'=>0,'e'=>0,'i'=>0,'o'=>0,'u'=>0);
    $acumulador = 0;
    foreach($arrayRetorno as $vocal =>$valor){
        $ocurrencias=substr_count($frase,$vocal);
        $acumulador+=$ocurrencias;
        $arrayRetorno[$vocal]=$ocurrencias;
    }
    $arrayRetorno['total']=$acumulador;
    return $arrayRetorno;
}


//Prueba de funciones

print_r(contarVocales("Teniamos una aventura por delante, aprender PHP"));