<?php
include "../conexionBD.php";

$nombre = isset($_POST['camponombre']) ? $_POST['camponombre'] : '';
$apellido = isset($_POST['campoapellido']) ? $_POST['campoapellido'] : '';
$correo = isset($_POST['campocorreo']) ? $_POST['campocorreo'] : '';
$nick = isset($_POST['camponick']) ? $_POST['camponick'] : '';
$pass = isset($_POST['campopass']) ? $_POST['campopass'] : '';

echo $nombre." ".$apellido." ".$correo." ".$nick." ".$pass;

	//Realizamos la consulta
    $result = $datos->Query("insert into usuarios (Nombre,Apellidos,Nick,Contrasena,email) values ('$nombre','$apellido','$nick','$pass','$correo')");
    //Comprobamos que se ha realizado el insert correctamente
    header('location: ../index.php');
	
?>