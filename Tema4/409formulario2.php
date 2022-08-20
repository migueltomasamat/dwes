<?php

function insertarFormulario():string{
    return "
        <form action='409formulario3.php' method='post'>
        <label for='inputConvivientes'>Introduce el número de convivientes</label>
        <input type='number' name='convivientes' id='inputConvivientes' placeholder='Introduce el numero de convivientes' alt='introduce convivientes'>
        <p>Selecciona tus aficiones</p>
        <input type='checkbox' id='checkDeporte' name='aficiones[]' value='Deporte'>
        <label for='checkDeporte'>Deporte</label>
        <input type='checkbox' id='checkCine' name='aficiones[]' value='Cine'>
        <label for='checkCine'>Cine</label>
        <input type='checkbox' id='checkVideojuegos' name='aficiones[]' value='Videojuegos'>
        <label for='checkVideojuegos'>Videojuegos</label>
        <input type='checkbox' id='checkRedes' name='aficiones[]' value='Redes Sociales'>
        <label for='checkRedes'>Redes Sociales</label><br>
        <label for='listaMenuFavorito'>Introduce tu menú favorito</label>
        <select name='menufavorito' id='listaMenuFavorito'>
            <option>Chino</option>
            <option>Italiano</option>
            <option>Turco</option>
            <option>Español</option>
        </select><br>

        <button type='submit' id='botonEnviar'>Enviar Datos</button>
        </form>";
        
}

function mostrarEncabezado(string $titulo): string{
    return "<!DOCTYPE html>
                <html lang='es'>
                <head>
                    <meta charset='UTF-8'>
                    <title>$titulo</title>
                </head>
                <body>";
}

function cerrarCuerpo():string{
    return "</body>";
}


if (!isset($_POST['nombre']) || !isset($_POST['apellidos']) || !isset($_POST['email']) || !isset($_POST['url']) || !isset($_POST['sexo'])){
    echo "Parámetros insuficientes";
}else{
    session_start();
    foreach ($_POST  as $clave => $valor){
        $_SESSION[$clave]=$valor;
    }
    echo mostrarEncabezado("Datos secundarios").insertarFormulario().cerrarCuerpo();
    
}