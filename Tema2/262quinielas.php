<?php

/*
262quinielas.php: Crea las siguientes funciones:
quinigol() : array → Genera un array multidimensional con 6 resultados aleatorios con combinaciones [012M, 012M]
quiniela() : array → Genera un array con una combinación de quiniela generada de manera aleatoria: 14 resultados con 1X2 y el pleno al quince con [012M, 012M]
tabla(array $quiniela) : string → transforma un array de una quniela en una tabla HTML
*/

function quinigol():array{
    $pronostico = array();
    $posiblesValores=array('0','1','2','M');
    for ($i=0;$i<6;$i++){
        $pronostico[$i][0]=$posiblesValores[mt_rand(0,count($posiblesValores)-1)];
        $pronostico[$i][1]=$posiblesValores[mt_rand(0,count($posiblesValores)-1)];
    }
    return $pronostico;

}

function quiniela():array{
    $posiblesValores=array('1','X','2');
    $posiblesValoresPleno=array('0','1','2','M');
    for ($i=0;$i<14;$i++){
        $pronostico[$i]=$posiblesValores[mt_rand(0,count($posiblesValores)-1)];
    }
    $pronostico[14][0]=$posiblesValoresPleno[mt_rand(0,count($posiblesValoresPleno)-1)];
    $pronostico[14][1]=$posiblesValoresPleno[mt_rand(0,count($posiblesValoresPleno)-1)];

    return $pronostico;
}

function tabla(array $quiniela) :string{
    
    $salida = "<table style='border:1px solid black'>";
    $i=1;
    foreach ($quiniela as $partido){
        if($i==15){
            $salida .= "<tr><td>Pleno al quince: $partido[0] - $partido[1]</td></tr>";
        }else{
            $salida.= "<tr><td>Partido $i: $partido</td></tr>";
        }
        $i++;
        
    }
    $salida.= "</table>";
    return $salida;

}


//Prueba de funciones

print_r(quinigol());
echo "<br>";
print_r(quiniela());
echo "<br>";
echo tabla(quiniela());

