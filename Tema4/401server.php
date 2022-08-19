<?php

/*
401server.php: igual que el ejemplo visto en los apuntes, muestra los valores de $_SERVER al ejecutar un script en tu ordenador.
Prueba a pasarle parámetros por GET (y a no pasarle ninguno).
Prepara un formulario (401post.html) que haga un envío por POST y compruébalo de nuevo.
Crea una página (401enlace.html) que tenga un enlace a 401server.php y verifica el valor de HTTP_REFERER.
*/

echo "Información del servidor<br>";

foreach ($_SERVER as $clave=>$valor){
    if (!is_array($valor)){ //Evita un error de conversión entre array y string
        echo $clave.": ".$valor."<br>";
    }

}

echo $_POST['usuarios'];