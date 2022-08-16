<?php

/*
256filtrado.php: El programa filtrará los números leídos para volver a mostrar únicamente los números pares e indicará la cantidad existente.

Dame números: 1 4 7 9 23 10 8
Los 3 números pares son: 4 10 8
*/

if (!isset($_POST['numeros'])){
    echo "No se han obtenido los parámetros correctamente";
}else{

    $numeros=$_POST['numeros'];
    $arrayNumeros= explode(" ",$numeros);

    $arrayPares= array();
    foreach($arrayNumeros as $numero){
        if($numero % 2 ==0){
            array_push($arrayPares,$numero);
        }
    }
    echo "Los ".count($arrayPares)." números pares son:";
    foreach($arrayPares as $numero){
        echo $numero ." ";
    }


}