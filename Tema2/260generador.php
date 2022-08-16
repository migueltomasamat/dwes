<?php

/*
260generador.php: Crea una función que permite generar una letra aleatoria, mayúscula o minúscula.
*/

function letraAleatoria():string{

    $arrayAbecedario=array('a','b','c','d','e','f','g','h','i','j','k','l','m','ñ','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $numeroLetras= count($arrayAbecedario);

    return $arrayAbecedario[mt_rand(0,$numeroLetras)];
}


//Prueba de la función 

$fin = 40;
for($i=0;$i<$fin;$i++){
    echo letraAleatoria(). "<br>";
}