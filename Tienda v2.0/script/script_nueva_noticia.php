<?php

include '../conexionBD.php';

$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
 
	echo $titulo." ".$descripcion;
	$cadena = "INSERT INTO noticia (titulo,descripcion) VALUES ('".$titulo."','".$descripcion."')";
	$result=$datos->Query($cadena);
header('location: ../index.php?cat=listanoti');