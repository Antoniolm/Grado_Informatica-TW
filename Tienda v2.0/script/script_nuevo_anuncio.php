<?php

include "../conexionBD.php";
//Inicializacion de las rutas a null
    $ruta_img=null;

    //Seleccion de imagen
    $path = "../imagenes/anuncios/";
    $path = $path . basename($_FILES['uploadedfile']['name']);
    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $path)) {
        $ruta_img = 'imagenes/anuncios/' . basename($_FILES['uploadedfile']['name']);
    }
	echo $ruta_img;
	if($ruta_img!=""){
	$cadena = "INSERT INTO anuncio (imagen) VALUES ('$ruta_img')";
	$result=$datos->Query($cadena);
	}
header('location: ../index.php');