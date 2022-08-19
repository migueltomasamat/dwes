<?php

/*
 * 404subida.html y 404subida.php: Crea un formulario que permita subir un archivo al servidor.
 * Además del fichero, debe pedir en el mismo formulario dos campos numéricos que soliciten la anchura y la altura.
 * Comprueba que tanto el fichero como los datos llegan correctamente.
 */

if(!isset($_FILES['fichero'])){
    if(!is_uploaded_file($_FILES['fichero']['tmp_name'])){
        echo "Problema en la transferencia del fichero. ";
        echo $_FILES['fichero']['error']."<br>";
    }
    echo "El fichero no se ha recibido";
}else{

    //Mostramos los atributos del fichero
    echo "<br>Se ha recibido la imagen ". $_FILES['fichero']['name']."<br>";
    echo "Tamaño del fichero: ".$_FILES['fichero']['size']."<br>";
    echo "Tipo de fichero:".$_FILES['fichero']['type']."<br>";

    //Creamos el directorio donde se va a almacenar el fichero
    mkdir("./uploads",0777);

    //Movemos el fichero al nuevo directorio
    move_uploaded_file($_FILES['fichero']['tmp_name'], "./uploads/{$_FILES['fichero']['name']}");

    //Mostramos la imagen en pantalla
    echo "<img src='./uploads/".$_FILES['fichero']['name']."'>";

}