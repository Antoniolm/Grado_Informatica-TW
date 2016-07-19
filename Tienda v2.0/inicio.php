<?php include 'conexionBD.php';
?>
		<h2 id="title-portada1">Productos</h2>
		<h2 id="title-portada2">Ofertas</h2>
		<h2 id="title-portada3">Noticias</h2>
		<!--Primera seccion de productos  -->
		<section id="secprod1">
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
						<nombre><a href="./portatil/Portatil_HP_Intel _15_20150411.html"><?php echo $row['Nombre']?></a></nombre>
						<descripcion><?php echo $row['Descripcion']?></descripcion>
						<precio><?php echo $row['Precio']?>€</precio>
					</section>
					</articulo>
				</article>
				<?php } ?>
				

		</section>

		
		<!--Segunda seccion de productos  -->
		<section id="secprod2">
					<!--Articulo   -->
					<article class="prodest">
					<articulo>
					<!--Seccion de imagen y pie   -->
					<section class="imagen-arti">
						<figura>
							<imagen><img src="./perifericos/Monitor_Samsung_22_LED_20150311/samsung_22__led_290_290.jpg" alt = "hp_250_intel.jpg" /></imagen>
							<pie>Monitor Samsung 22 Pulgadas.</pie>
						</figura>
					</section>
					<!--Seccion de nombre,descripcion y precio   -->
					<section class="descrip">
						<nombre><a href="./perifericos/Monitor_Samsung_22_LED_20150311.html">Monitor Samsung</a></nombre>
						<descripcion>
							<p>Configuracion optima.</p>
							<p>Control de brillo auto ajustable para ahorrar.</p>
						</descripcion>
						<precio>678€</precio>
					</section>
					</articulo>
				</article>
				<!--Articulo   -->
				<article class="prodest">
					<articulo>
					<!--Seccion de imagen y pie   -->
					<section class="imagen-arti">
						<figura>
							<imagen><img src="./portatil/Portatil_HP_Intel _15_20150411/hp_250_intel.jpg" alt = "hp_250_intel.jpg" /></imagen>
							<pie>Portatil HP.</pie>
						</figura>
					</section>
					<!--Seccion de nombre,descripcion y precio   -->
					<section class="descrip">
						<nombre><a href="./portatil/Portatil_HP_Intel _15_20150411.html">Portatil HP Intel</a></nombre>
						<descripcion><p>Procesador Intol® Celaron® 2,16 GHz</p><p>Memoria RAM 4GB</p><p>Disco duro 500 GB</p></descripcion>
						<precio>356€</precio>
					</section>
					</articulo>

		</section>

		<!--Tercera seccion,Seccion de noticias y publicidad  -->
		<section id="secanun1">
			<!--Noticia   -->
			<?php 
					$cont=0;
					$select="SELECT * FROM noticia";
					$result=$datos->Query($select);
					while($row=mysql_fetch_array($result)){
					if($cont!=2){
					?>
			<article id="ultnoticias">
				<h4><?php echo $row['titulo']?></h4><hr>
				<p><?php echo $row['descripcion']?></p>
			</article>
			<?php $cont++;}
			}?>
			<h2>Publicidad</h2>				
			<?php 
					$cont=0;
					$select="SELECT * FROM anuncio";
					$result=$datos->Query($select);
					while($row=mysql_fetch_array($result)){
					if($cont!=1){
					?>
			<!--Anuncio   -->
			<article class="anuncion">
				<img src="<?php echo $row['imagen'] ?>" ></img>
			</article>
			<?php $cont++;}}?>
		</section>
