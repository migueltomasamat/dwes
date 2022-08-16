<?php

/*
    244euros.php: Crea una biblioteca con dos funciones:

peseta2euros: pasa de pesetas a euros
euros2pesetas: pasa de euros a pesetas
Cada función debe recibir dos parámetros:

La cantidad a transformar
La cotización, con un parámetro por defecto con el factor de transformación.
*/

function peseta2euros(int $num, float $cambio):float{
    return $num/$cambio;
}

function euros2pesetas(float $num, float $cambio): int{
    return intval($num*$cambio);
}