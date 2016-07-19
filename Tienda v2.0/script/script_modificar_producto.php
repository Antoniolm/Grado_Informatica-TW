<?php

include '../conexionBD.php';

$ID = isset($_GET['ID']) ? $_GET['ID'] : '';
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$pie = isset($_POST['campopie']) ? $_POST['campopie'] : '';
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
$precio = isset($_POST['precio']) ? $_POST['precio'] : '';
//Inicializacion de las rutas a null
    $ruta_img=null;

    $path = "../imagenes/productos/";
    $path = $path . basename($_FILES['uploadedfile']['name']);
    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $path)) {
        $ruta_img = 'imagenes/productos/' . basename($_FILES['uploadedfile']['name']);
    }
	echo $ID." ".$nombre." ".$pie." ".$descripcion." ".$precio;
	if($ruta_img!=""){
	$cadena = "UPDATE producto SET Nombre='".$nombre."',Imagen='".$ruta_img."',Pie='".$pie."',Descripcion='".$descripcion."',Precio=".$precio." WHERE ID=".$ID;
	$result=$datos->Query($cadena);
	}
header('location: ../index.php?cat=listap');