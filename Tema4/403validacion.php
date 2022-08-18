<?php

/*403validacion.php: A partir del formulario anterior, introduce validaciones en HTML mediante el atributo required de los campos
(uso los tipos adecuados para cada campo), y en el php comprueba los tipos de los datos y que cumplen los valores esperados
(por ejemplo, en los checkboxes que los valores recogidos forman parte de todos los posibles).
Puedes probar a pasarle datos erróneos via URL y revisar su comportamiento.
Tip: Investiga el uso de la función filter_var.*/

if (!isset($_GET['nombre']) || !isset($_GET['apellidos']) || !isset($_GET['email']) || !isset($_GET['sexo'])){
    echo "Error, parámetros definidos de forma incorrecta<br>";
}else{
    foreach ($_GET as $clave=>$valor){

        switch ($clave){
            case "nombre":{
                if(!filter_var($valor)){
                    echo "Error en el nombre. Demasiado largos <br>";
                }
                break;
            }
            case "apellidos":{
                if (!filter_var($valor)){
                    echo "Error en los apellidos. Demasiado largos<br>";
                }
                break;
            }
            case "email":{
                if(!filter_var($valor,FILTER_VALIDATE_EMAIL)){
                    echo "Error en el correo electrónico<br>";
                }
                break;
            }
            case "url":{
                if(!filter_var($valor,FILTER_VALIDATE_URL)){
                    echo "Error en la url personal<br>";
                }
                break;
            }
            case "sexo":{
                if ($valor!='M' && $valor!='F'){
                    echo "Los valores recibidos para el sexo son incorrectos<br>";
                }
                break;
            }
            case "convivientes":{
                if (!filter_var($valor,FILTER_VALIDATE_INT)){
                    echo "Valor incorrecto para los convivientes<br>";
                }
                break;
            }
            case "aficiones":{
                if (comprobarCheck($valor,"Deporte","Videojuegos","Cine","Redes Sociales")){
                    echo "Valores del check incorrectos<br>";
                }
                break;
            }
            case "menufavorito":{
                if (comprobarValorLista($valor,"Italiano","Chino","Turco","Español")){
                    echo "Ha habido un error con el valor de menú recibido<br>";
                }
                break;
            }
            default:
                echo "Parámetro incorrecto";
        }
    }
}


function comprobarCheck(array $parametrosCheck,string ...$opciones):bool{
    $error=false;
    foreach ($parametrosCheck as $opcion){
        if(!in_array($opcion,$opciones)){
            $error=true;
        }
    }
    return $error;
}

function comprobarValorLista(string $cadenaAComprobar,string ...$opciones):bool{
    $error = false;
    return !in_array($cadenaAComprobar,$opciones);
}