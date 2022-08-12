<?php

/*
210nombreEdad.php: A partir de una edad muestra por pantalla:

bebé si tiene menos de 3 años
niño si tiene entre 3 y 12 años
adolescente entre 13 y 17 años
adulto entre 18 y 66
jubilado a partir de 67

*/

if (!isset($_GET['edad'])){
    echo "No se ha pasado una edad como parámetro";
}else{
    $edad = $_GET['edad'];
    if ($edad < 3){
        echo "Bebé";
    }else if ($edad >=3 && $edad <= 12){
        echo "Niño";
    }else if ($edad >12 && $edad <=17){
        echo "Adolescente";
    }else if ($edad >=18 && $edad <=66){
        echo "Adulto";
    }else if ($edad >=67){
        echo "Jubilado";
    } else{
        echo "Edad negativa";
    }
         
}