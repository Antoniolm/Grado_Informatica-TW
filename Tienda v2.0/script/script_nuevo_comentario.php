<?php

include "../conexionBD.php";
$comentario = isset($_POST['comentario']) ? $_POST['comentario'] : '';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$fecha=date("d")."-".date("m")."-".date("Y");
$hora=date("G").":".date("i");
if($comentario!=''){
	$cadena = "INSERT INTO comentarios (ID_Usuario,Fecha,Hora,Comentario) VALUES (".$id.",'".$fecha."','".$hora."','".$comentario."')";
	$result=$datos->Query($cadena);
}
header('location: ../index.php');