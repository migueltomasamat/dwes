<?php

/*
241parametrosVariables.php: Crea las siguientes funciones:

Una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor(): int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max().
Una función que concatene todos los parámetros recibidos separándolos con un espacio: function concatenar(...$palabras) : string. Utiliza el operador ....
*/

function mayor ():int{
    $arrayParametros=func_get_args();
    $mayor=0;
    foreach($arrayParametros as $numero){
        if ($numero>$mayor){
            $mayor=$numero;
        }
    }
    return $mayor;
}

function concatenar(...$palabras):string{
    $frase=false;
    foreach($palabras as $palabra){
        $frase .= $palabra. " ";
    }
    return trim($frase);
}


//Pruebas de las funciones

echo mayor(5,10,15,20,4,3,2);
echo "<br>";


echo concatenar("Habia", "una", "vez", "un", "circo");