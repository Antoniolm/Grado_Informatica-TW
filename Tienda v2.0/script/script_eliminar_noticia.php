<?php
include "../conexionBD.php";

$noticia = isset($_GET['noticia']) ? $_GET['noticia'] : '';
echo $noticia;

$delete="DELETE FROM noticia WHERE ID=".$noticia;
$result=$datos->query($delete);
$row= mysql_fetch_array($result);
header('location: ../index.php?cat=listanoti');

?>