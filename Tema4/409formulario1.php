<?php


function insertarFormulario():string{
    return "
        <form action='409formulario2.php' method='post'>
        <label for='inputNombre'>Introduce el nombre</label>
        <input type='text' name='nombre' id='inputNombre' placeholder='Introduce tu nombre' alt='Introducir nombre'><br>
        <label for='inputApellidos'>Introduce tus apellidos</label>
        <input type='text' name='apellidos' id='inputApellidos' placeholder='Introduce tus apellidos' alt='Introducir apellidos'><br>
        <label for='inputEmail'>Introduce tu email</label>
        <input type='email' name='email' id='inputEmail' placeholder='Introduce tu correo electrónico' alt='Introducir correo electrónico'><br>
        <label for='inputURL'>Introduce tu web personal</label>
        <input type='url' name='url' id='inputURL' placeholder='Introduce tu página personal' alt='introducir página personal'><br>
        <p>Selecciona tu sexo</p>
            <input type='radio' name='sexo' id='radioMasculino' value='M'>
            <label for='radioMasculino'>Masculino</label>
            <input type='radio' name='sexo' id='radioFemenino' value='F'>
            <label for='radioFemenino'>Femenino</label><br>
            
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

echo mostrarEncabezado("DatosPersonales").insertarFormulario().cerrarCuerpo();