<?php

require_once './244euros.php';
/*
244calculadoraEuros.php: utiliza 243euros.php y prueba las funciones pasando tanto cantidades con la cotización por defecto, 
como con nuevas cotizaciones. Recuerda que 1 euro son/eran 166.36 pesetas.
*/

echo peseta2euros(15000,166.386) ." €";
echo "<br>";
echo euros2pesetas(200,166.386) ." pts";
echo "<br>";
