<?php

/*

223tablaMultiplicar.php: Muestra dentro de una tabla HTML la tabla de multiplicar del numero que reciba como parámetro. 
Utiliza <thead> con sus respectivos <th> y <tbody> para dibujar la tabla. Por ejemplo:

a	*	b	=	a*b
7	*	1	=	7
7	*	2	=	14
...				
7	*	10	=	70

*/

if(!isset($_GET['numero'])){
    echo "No se han pasado los parámetros necesarios";
}else{
    $numero = $_GET['numero'];
    ?>
        <table style="border: 1px solid black;">
            <thead>
                <td style="width:5%;">a</td>
                <td style="width:5%;">*</td>
                <td style="width:5%;">b</td>
                <td style="width:5%;">=</td>
                <td style="width:10%;">a*b</td>
            </thead>
            <tbody style="border:1px red solid;">
    <?php
    for($i=1;$i<=10;$i++){
    ?>
                <tr>
                    <td><?=$numero?></td>
                    <td>*</td>
                    <td><?=$i?></td>
                    <td>=</td>
                    <td><?=$numero*$i?></td>
                </tr>
    <?php
    }
    ?>
        </tbody>
        </table>
    <?php


}
