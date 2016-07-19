<?php
include "../conexionBD.php";

$producto = isset($_GET['producto']) ? $_GET['producto'] : '';
echo $producto;

$delete="DELETE FROM producto WHERE ID=".$producto;
$result=$datos->query($delete);
$row= mysql_fetch_array($result);
header('location: ../index.php?cat=listap');

?>