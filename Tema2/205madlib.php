<?php

/*
205madlib.htmly 205madlib.php: A partir de un nombre, un verbo, un adjetivo y un adverbio, crea una historia que contenga dichos elementos. 
Por ejemplo:

Entrada: perro / caminar / azul / rápidamente
Salida: ¿ Te gusta caminar con tu perro azul rápidamente ?
205madlib2.html y 205madlib2.php Crea un madlib más extenso, leyendo más datos de entrada.
*/

$sustantivo = $_GET['inputSustantivo'];
$verbo = $_GET['inputVerbo'];
$adjetivo = $_GET['inputAdjetivo'];
$adverbio = $_GET['inputAdverbio'];


echo "¿Te gusta $verbo con tu $sustantivo $adjetivo $adverbio?";