<?php
    require_once './244euros.php';
/*
245imprimeTiquetCompra.php: Tras leer los datos del tiquet de compra, enumera en una tabla los productos, con su precio en euros y pesetas,
y finalmente, en una última fila, totalizar en ambas monedas.
*/

    function imprimirTiquetCompra (array $productos){

   
        echo "<table style='border:1px solid black;'>";
        echo "<thead>";
        echo "<th>Nombre</th>";
        echo "<th>Precio en €</th>";
        echo "<th>Precio en Pts</th>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($productos as $producto=>$precio){
            echo "<tr><td>$producto</td><td>$precio</td><td>". euros2pesetas($precio,166.386) ."</td></tr>";
        }

        echo "</tbody>";
        echo "</table>";

    }