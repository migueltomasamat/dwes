<?php

/*
233sexos.php: Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo ["M", "M", "F", "M", ...]). 
Una vez completado, vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los valores almacenando el resultado en un array asociativo 
['M' => 44, 'F' => 66] (no utilices variables para contar las M o las F).
Finalmente, muestra el resultado por pantalla
*/

$arraySexos = array();

for ($i=0;$i<100;$i++){
    $sexo = rand(0,1);
    if ($sexo == 0){
        $arraySexos[$i]='M';
    }else{
        $arraySexos[$i]='F';
    }
}
$cuentaValores = array_count_values($arraySexos);
foreach ($cuentaValores as $clave => $valor){
    echo "El valor $clave se ha encontrado $valor veces<br>";
}