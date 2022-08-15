<?php

/*
221sumaAB.php: A partir del anterior, refactorizar para que funcione con inicio y fin.
*/

if (!isset($_GET['inicio']) || !isset($_GET['fin'])){
    echo "No se han pasado los parámetros correctos";
}else{

    $acumulador=0;
    $inicio=$_GET['inicio'];
    $fin=$_GET['fin'];
    for ($i=$inicio;$i<=$fin;$i++){
        $acumulador+=$i;
    }

    echo "La suma total es de: $acumulador";
}