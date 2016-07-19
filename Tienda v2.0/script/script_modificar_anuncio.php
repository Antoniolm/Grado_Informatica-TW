<?php

include '../conexionBD.php';

$ID = isset($_GET['ID']) ? $_GET['ID'] : '';
//Inicializacion de las rutas a null
    $ruta_img=null;

    //Seleccion de imagen
   $path = "../imagenes/productos/";
    $path = $path . basename($_FILES['uploadedfile']['name']);
    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $path)) {
        $ruta_img = 'imagenes/productos/' . basename($_FILES['uploadedfile']['name']);
    }
	echo $ID." ".$nombre." ".$pie." ".$descripcion." ".$precio;
	$cadena = "UPDATE anuncio SET imagen='".$ruta_img."' WHERE ID=".$ID;
	$result=$datos->Query($cadena);
header('location: ../index.php?cat=listan');