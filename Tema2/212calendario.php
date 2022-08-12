<?php

/*
212calendario.php: Escribe un programa similar a un calendario de manera que a partir de dia, mes y anyo muestre la fecha dentro de un día. 
Debes tener en cuenta que no todos los meses tienen 30 días. 
En este caso, no vamos a tener en cuenta los años bisiestos.
*/

if (!isset($_GET['dia']) && !isset($_GET['mes']) && !isset($_GET['anyo'])){
    echo "No se han pasado los suficientes parámetros";
}else{
    $dia = $_GET['dia'];
    $mes = $_GET['mes'];
    $anyo = $_GET['anyo'];

    if ($dia==31 and $mes==12){
        echo "1/1/" . $anyo+1;
    }else if ($dia==28 and $mes==2){
        echo "1/3/$anyo";
    }else if ($dia==30 and ($mes==4 or $mes==6 or $mes==9 or $mes==11) ){
        echo "1/" . $mes+1 ."/$anyo";
    }else if ($dia==31 and ($mes==1 or $mes==3 or $mes==5 or $mes==7 or $mes==8 or $mes==10)){
        echo "1/" . $mes+1 ."/$anyo";
    }else{
        echo $dia+1 . "/$mes/$anyo";
    }
}