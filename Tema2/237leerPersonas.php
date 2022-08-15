<?php

/*
237leerPersonas.php: a partir de un formulario con un campo de cantidad de personas, 
generar un nuevo formulario para leer el nombre, altura y email de cantidad personas.
*/

if (!isset($_POST['numero'])){
    echo "No se han introducido los parámetros correctamente";
}else{

    $numero = $_POST['numero'];
    echo "<form action='237gestionarPersonas.php' method=post>";


    for ($i=0;$i<$numero;$i++){
        echo "<br>";
        echo "<label for=nombrePersona$i>Introduce el nombre de la persona". $i+1 ."</label>";
        echo "<input type=text name=nombrePersona$i id=nomPers$i placeholder='Introduce el nombre de la persona $i alt='nombre persona $i'><br>";

        echo "<label for=alturaPersona$i>Introduce la altura de la persona". $i+1 ."</label>";
        echo "<input type=number name=alturaPersona$i id=altPers$i placeholder='Introduce la altura de la persona $i alt='altura persona $i'><br>";

        echo "<label for=emailPersona$i>Introduce el correo electrónico de la persona". $i+1 ."</label>";
        echo "<input type=email name=emailPersona$i id=emailPers$i placeholder='Introduce el correo de la persona $i alt='correo persona $i'><br>";

        
    }

    echo "<br><button type='submit'>Pulsa para enviar</button>";
}
