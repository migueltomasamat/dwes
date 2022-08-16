<?php
    include '245imprimeTiquetCompra.php';
/*
245preparaTiquetCompra.php: A partir de una cantidad de productos, leer el nombre y coste de la cantidad de productos indicados (similar al ejercicio 237,
pero esta vez no hace falta crear el formulario con la cantidad, se recibe mediante un parámetro GET via URL).
*/

if(!isset($_GET['cantidad'])){
    echo "No se ha recibido la cantidad de productos";
}else{
   
        $arrayProductos=array();
        $cantidad=$_GET['cantidad'];
    
        for ($i=0;$i<$cantidad;$i++){
            $arrayProductos[$_GET["nombre$i"]]=$_GET["precio$i"];
        }
        imprimirTiquetCompra($arrayProductos);
    
}