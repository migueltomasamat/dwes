<?php

/*
235alturas.php: Mediante un array asociativo, almacena el nombre y la altura de 5 personas (nombre => altura). 
Posteriormente, recorre el array y muéstralo en una tabla HTML. Finalmente añade una última fila a la tabla con la altura media.
*/

$alturas = array('Miguel'=>180,'Alba'=>160,'Inma'=>165,'Elena'=>157,'Juanjo'=>182);

?>

<table style='border: black 2px solid; rules:all'>

    <?php
    foreach ($alturas as $nombre => $altura){
        echo "<tr>";
        echo "<td>$nombre</td>";
        echo "<td>$altura</td>";
        echo"</tr>";
    }

    echo "<tr><td>Altura Media</td><td>". array_sum($alturas)/count($alturas) ."</td></tr>";
    ?>
</table>