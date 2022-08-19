<?php

/*
 * 405subidaImagen.php: Modifica el ejercicio anterior para que únicamente permita subir imágenes
 * (comprueba la propiedad type del archivo subido).
 * Si el usuario selecciona otro tipo de archivos, se le debe informar del error y permitir que suba un nuevo archivo.
 * En el caso de subir el tipo correcto, visualizar la imagen con el tamaño de anchura y altura recibido como parámetro.
 */

if(!isset($_FILES['fichero'])){
    if(!is_uploaded_file($_FILES['fichero']['tmp_name'])){
        echo "Problema en la transferencia del fichero. ";
        echo $_FILES['fichero']['error']."<br>";
    }
    echo "El fichero no se ha recibido";
}else{
    //Creamos un array con los tipos de datos que queremos soportar
    $arrayTiposSoportados = array(image_type_to_mime_type(IMAGETYPE_GIF),image_type_to_mime_type(IMAGETYPE_JPEG),
        image_type_to_mime_type(IMAGETYPE_PNG),image_type_to_mime_type(IMAGETYPE_BMP),image_type_to_mime_type(IMAGETYPE_ICO));

    if (!in_array($_FILES['fichero']['type'],$arrayTiposSoportados)){
        //Sirve para hacer una redirección, se puede configurar un retorno.
        // Debe ejecutarse antes de cualquier echo o respuesta del servidor.
        header("refresh:5;url=405subidaImagen.html");
        echo "Tipo de fichero incompatible.";

    }else {

        //Mostramos los atributos del fichero
        echo "<br>Se ha recibido la imagen " . $_FILES['fichero']['name'] . "<br>";
        echo "Tamaño del fichero: " . $_FILES['fichero']['size'] . "<br>";
        echo "Tipo de fichero:" . $_FILES['fichero']['type'] . "<br>";

        //Creamos el directorio donde se va a almacenar el fichero
        if (!file_exists('uploads')){
            mkdir("./uploads", 0777);
        }

        //Movemos el fichero al nuevo directorio
        move_uploaded_file($_FILES['fichero']['tmp_name'], "./uploads/{$_FILES['fichero']['name']}");

        //Mostramos la imagen en pantalla
        echo "<img src='./uploads/" . $_FILES['fichero']['name'] . "' width=" . $_POST['anchura'] . " height=" . $_POST['altura'] . ">";
    }
}