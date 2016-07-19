<?php
include "../conexionBD.php";

$nick = isset($_POST['usu']) ? $_POST['usu'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
echo $nick." ".$pass;

$select="SELECT * FROM usuarios WHERE Nick='".$nick."' and Contrasena='".$pass."'";
$result=$datos->query($select);
$row= mysql_fetch_array($result);
if(!empty($row)){
	session_start();
	$_SESSION["nick"] = $row['Nick']; 
	$_SESSION["id_usu"] = $row['ID']; 
	$_SESSION["privi"] = $row['privilegios']; 
	header('location: ../index.php');
}
else{
	header('location: ../index.php');
}
?>