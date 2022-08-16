<?php

/*
253cani.php: EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI.
*/

function stringCani (string $frase): string{
    $par=0;
    $i=0;
    while ($i<strlen($frase)){
        if ($par==0 && $frase[$i]!=' '){
            $frase[$i]=strtoupper($frase[$i]);
            $par=1;
        }else if($par==1 && $frase[$i]!=' '){
            $frase[$i]=strtolower($frase[$i]);
            $par=0;
        }
        $i++;
    }
    return $frase;

}


//Prueba de la función

echo stringCani ("Una vaca vestida de uniforme");