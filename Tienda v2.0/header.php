<!doctype html>
<html>
<head>
<title>Tienda Online</title>
<meta charset = "UTF-8" />
<link rel = "stylesheet" type = "text/css" href = "estilo.css" />
<xml id="2" src="producto.xml"></xml>
 <script src="js/scripts.js"></script>
</head>
<body>
	<aside id="asidedch">
	<img src="./imagenes/publicidad2.png"></img>
	</aside>
	<aside id="asideup">
	<img src="./imagenes/publicidad.png"></img>
	</aside>
	<section id="secprin">
		<header id ="head">
		<a href="index.php"><img src="./imagenes/logo.png"></img></a>
		</header>
		<nav>
		<!--Menu  -->
		<ul id="menu">
		<li><a href="index.php">Inicio</a></li>
		<li><a href="index.php?cat=portatil">Portatiles</a></li>
		<li><a href="index.php?cat=smesa">SobreMesa</a></li>
		<li><a href="index.php?cat=comp">Componentes</a></li>
		<li><a href="index.php?cat=redes">Redes</a></li>
		<li><a href="index.php?cat=peri">Perifericos</a></li>
		
		<li>
		<?php 
		session_start();
		if(!isset($_SESSION["nick"])){?>
		<form action="./script/script_iniciar_sesion.php" method="post"> Usuario<input type="text" style="width:10%" name="usu" id="usu">
		  	   Contraseña<input type="password" style="width:10%" name="pass" id="pass">	
			   <button type="submit" >Logear</button></form><form style="margin-top:2.5%" id="regis" action="index.php?cat=registrarse" method="post"> <button type="submit" >Registrarse</button></form></li>
		<?php }
		else{ ?>
			<li>Bienvenido <?php echo $_SESSION["nick"]?> -</li><a href="./script/script_cerrar_sesion.php">Desconectar</a>
		<?php } ?>
		</ul>
		</nav>
		
		<?php 
		if(isset($_SESSION["nick"]) && $_SESSION["privi"]==1){?>
		<nav>
		<!--Menu  -->
		<ul id="menu" style="margin-top:-1%;">
		<li><a href="index.php?cat=nproducto" style="font-size:14px">Crear Producto</a></li>
		<li><a style="font-size:14px" href="index.php?cat=listap">Listar Producto</a></li>
		<li><a style="font-size:14px" href="index.php?cat=nanuncio">Crear anuncio</a></li>
		<li><a style="font-size:14px" href="index.php?cat=listan">Listar anuncio</a></li>
		<li><a style="font-size:14px" href="index.php?cat=nnoticia">Crear noticia</a></li>
		<li><a style="font-size:14px" href="index.php?cat=listanoti">Listar noticia</a></li>
		</ul>
		</nav>
		<?php }?>

