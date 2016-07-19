<?php

include "../conexionBD.php";

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$pie = isset($_POST['campopie']) ? $_POST['campopie'] : '';
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
$precio = isset($_POST['precio']) ? $_POST['precio'] : '';
//Inicializacion de las rutas a null
    $ruta_img=null;

    //Seleccion de imagen
    $path = "../imagenes/productos/";
    $path = $path . basename($_FILES['uploadedfile']['name']);
    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $path)) {
        $ruta_img = 'imagenes/productos/' . basename($_FILES['uploadedfile']['name']);
    }
	echo $nombre." ".$ruta_img." ".$pie." ".$descripcion." ".$precio;
	if($ruta_img!=""){
	$cadena = "INSERT INTO producto (Nombre,Imagen,Pie,Descripcion,Precio) VALUES ('".$nombre."','".$ruta_img."','".$pie."','".$descripcion."','".$precio."')";
	$result=$datos->Query($cadena);
	}
header('location: ../index.php?cat=listap');