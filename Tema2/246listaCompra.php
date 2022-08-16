<?php
    require_once './244euros.php';
/*
245imprimeTiquetCompra.php: Tras leer los datos del tiquet de compra, enumera en una tabla los productos, con su precio en euros y pesetas,
y finalmente, en una última fila, totalizar en ambas monedas.
*/

    function imprimirTiquetCompra (array $productos){

   
        echo "<ul>";
        foreach ($productos as $producto=>$precio){
            echo "<li>$producto $precio ". euros2pesetas($precio,166.386) ."<br>";
        }
        echo "</ul>";

    }