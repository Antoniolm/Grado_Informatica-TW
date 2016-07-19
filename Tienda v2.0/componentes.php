		<h1 id="cajon-color-comp"> Componentes</h1>
		<!--Seccion del articulo destacado de componentes -->
		<section id="articulodestacado-comp">
		<h1>Articulo Destacado</h1>
				<!--Articulo  -->
				<article class="prodest">
					<articulo>
					<!--Seccion de imagen y pie   -->
					<section class="imagen-arti">
						<figura>
							<imagen><img src="./componentes/DiscoDuro_Seagate_1TB_SATA3_20150411/seagate_1tb_.jpg" alt = "seagate_1tb_.jpg" /></imagen>
							<pie>Disco Duro Seagate.</pie>
						</figura>
					</section>
					<!--Seccion de nombre,descripcion y precio   -->
					<section class="descrip">
						<nombre><a href="index.php?cat=disco">Disco Duro Seagate</a></nombre>
						<descripcion><p>Especificaciones:</p>
						<p>Nº de modelo: S1342314adfad, Interfaz SATA3 6Gb/s, Caché 64MB,Capacidad total de 1TB,
						Promedio de densidad de área 625Gb/in2,Sectores garantizados 1,223,212.5,Velocidad de giro (rpm) 7200</p>
						</descripcion>
						<precio>74€</precio>
					</section>
					</articulo>
				</article>
		</section>
		<h2 id="title-portada1">Productos</h2>
		<h2 id="title-portada2">Ofertas</h2>
		<h2 id="title-portada3">Publicidad</h2>
		<!--Primera seccion de productos  -->
		<section id="secprod1">
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
						<precio>357€</precio>
					</section>
					</articulo>
				</article>
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
						<nombre><a href="./perifericos/Monitor_Samsung_22_LED_20150311.html">Monitor Samsung 22 Pulgadas LED</a></nombre>
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
							<imagen><img src="./componentes/DiscoDuro_Seagate_1TB_SATA3_20150411/seagate_1tb_.jpg" alt = "seagate_1tb_.jpg" /></imagen>
							<pie>Disco Duro Seagate.</pie>
						</figura>
					</section>
					<!--Seccion de nombre,descripcion y precio   -->
					<section class="descrip">
						<nombre><a href="./componentes/DiscoDuro_Seagate_1TB_SATA3_20150411.html">Disco Duro Seagate</a></nombre>
						<descripcion><p>Interfaz SATA3 6Gb/s</p><p>Caché 64MB</p><p>Capacidad total de 1TB</p></descripcion>
						<precio>74€</precio>
					</section>
					</articulo>
				</article>

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

		<!--Tercera seccion: Publicidad  -->
		<section id="secanun1">
		<?php 
		include "conexionBD.php";

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