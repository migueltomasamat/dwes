<?php

/*
220paresAB.php: A partir del anterior, refactorizar para que funcione con inicio y fin.
*/

if (!isset($_GET['inicio']) && isset($_GET['fin'])){
    echo "No se han pasado los parámetros necesarios";
}else{

    $i=$_GET['inicio'];
while ($i<=$_GET['fin']){
    echo $i . "<br>";
    $i+=2;
}
}