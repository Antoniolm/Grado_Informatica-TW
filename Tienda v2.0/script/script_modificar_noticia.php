<?php

include '../conexionBD.php';

$ID = isset($_GET['ID']) ? $_GET['ID'] : '';
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';

	$cadena = "UPDATE noticia SET titulo='".$titulo."',descripcion='".$descripcion."' WHERE ID=".$ID;
	$result=$datos->Query($cadena);
header('location: ../index.php?cat=listanoti');