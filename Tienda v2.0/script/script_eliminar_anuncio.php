<?php
include "../conexionBD.php";

$anuncio = isset($_GET['anuncio']) ? $_GET['anuncio'] : '';
echo $anuncio;

$delete="DELETE FROM anuncio WHERE ID=".$anuncio;
$result=$datos->query($delete);
$row= mysql_fetch_array($result);
header('location: ../index.php?cat=listan');

?>