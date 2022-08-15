<?php

/*
238tablaDistintos.php: Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre 100 y 999 (ambos incluidos). 
Todos los números deben ser distintos, es decir, no se puede repetir ninguno.
Muestra a continuación por pantalla el contenido del array de tal forma que:

La columna del máximo debe aparecer en azul.
La fila del mínimo debe aparecer en verde
El resto de números deben aparecer en negro.
*/

$arrayBidimensional[0][0]=0;
$min=1000;
$max=99;
$columnaMaximo=0;
$filaMinimo=0;
for ($i=0;$i<6;$i++){
    for ($j=0;$j<9;$j++){

        $aleatorio=0;
        
        do{
            $encontrado=false;
            $aleatorio = mt_rand(100,178);

            foreach ($arrayBidimensional as $fila){
                $encontrado=in_array($aleatorio,$fila);
                if ($encontrado){break;}
            }
            
            //Si no queremos utilizar el break podemos crear un código más complicado
            /*$x=0;
            while ($x<=$i and $encontrado==false and $arrayBidimensional[$x]!=null){
                $encontrado=in_array($aleatorio,$arrayBidimensional[$x]);
                echo "encontrado $encontrado numero $aleatorio variable x:$x variable i:$i<br>";
                $x++;
            }*/
            
                
        }
        while ($encontrado==1);
        $arrayBidimensional[$i][$j]=$aleatorio;
        if($aleatorio<$min){
            $min=$aleatorio;
            $filaMinimo=$i;
        }
        if($aleatorio>$max){
            $max=$aleatorio;
            $columnaMaximo=$j;
        }
    }
}

echo "<table style='border:1px solid black; rules:all;'>";
for ($i=0;$i<6;$i++){
    echo "<tr>";
    for ($j=0;$j<9;$j++){
        if ($i==$filaMinimo){
            echo "<td style='background-color: green;'>". $arrayBidimensional[$i][$j] ."</td>";
        }else if ($j==$columnaMaximo){
            echo "<td style='background-color: blue;'>" . $arrayBidimensional[$i][$j] ."</td>";
        }else{
            echo "<td>". $arrayBidimensional[$i][$j] ."</td>";
        }       
    }
    echo "</tr>";
}
echo "</table>";