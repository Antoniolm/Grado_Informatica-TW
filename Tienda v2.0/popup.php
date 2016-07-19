<?php include 'conexionBD.php';
?>
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
	<section id="secprin" style="float:left; width:100%">

		<h2 id="title-portada1" style="width:45%">Productos</h2>
		<h2 id="title-portada3"style="width:45%" >Noticias</h2>
		<!--Primera seccion de productos  -->
		<section id="secprod1" style="width:45%">
				<?php 
					$select="SELECT * FROM producto";
					$result=$datos->Query($select);
					while($row=mysql_fetch_array($result)){
					?>
				<!--Articulo   -->
				<article class="prodest">
					<articulo>
					<!--Seccion de imagen y pie   -->
					<section class="imagen-arti">
						<figura>
							<imagen><img src="<?php echo $row['Imagen'] ?>" alt = "hp_250_intel.jpg" /></imagen>
							<pie><?php echo $row['Pie']?></pie>
						</figura>
					</section>
					<!--Seccion de nombre,descripcion y precio   -->
					<section class="descrip">
						<nombre><a href="./portatil/Portatil_HP_Intel _15_20150411.php"><?php echo $row['Nombre']?></a></nombre>
						<descripcion><?php echo $row['Descripcion']?></descripcion>
						<precio><?php echo $row['Precio']?>€</precio>
					</section>
					</articulo>
				</article>
				<?php } ?>
				

		</section>
		<!--Tercera seccion,Seccion de noticias y publicidad  -->
		<section id="secanun1" style="width:45%">
			<!--Noticia   -->
			<?php 
					$select="SELECT * FROM noticia";
					$result=$datos->Query($select);
					while($row=mysql_fetch_array($result)){
					?>
			<article id="ultnoticias">
				<h4><?php echo $row['titulo']?></h4><hr>
				<p><?php echo $row['descripcion']?></p>
			</article>
			<?php }?>
			<h2>Publicidad</h2>				
			<?php 
					$select="SELECT * FROM anuncio";
					$result=$datos->Query($select);
					while($row=mysql_fetch_array($result)){
					?>
			<!--Anuncio   -->
			<article class="anuncion">
				<img src="<?php echo $row['imagen'] ?>" ></img>
			</article>
			<?php }?>
		</section>
	</section>
	<!--Aside ultimo flotando en el centro del espacio restante   -->
</body>
</html>
