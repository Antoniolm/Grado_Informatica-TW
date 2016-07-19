<?php 
include 'conexionBD.php';
?>
<h1 id="cajon-color-port"> Portatiles</h1>
		<!--Sección de producto destacado de la seccion de portatiles  -->
		<section id="articulodestacado-port">
			<!--Articulo   -->
			<article id="producto">
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
						<nombre><a href="/index.htm" target="_blank" onmouseover="window.open('popup.php', '', 'width=600,height=600,top=130,left=150'); return false;">Portatil HP Intel</a></nombre>
						<descripcion><p>Especificaciones:</p>
						<ul>
						<li>Procesador Intol® Celaron® 2,16 GHz, hasta 2,58 GHz, 1 MB de caché, 2 núcleos</li>
						<li>Memoria RAM 4GB 1600 MHz SDRAM DDR3L</li>
						<li>Disco duro 500 GB 5400 rpm SATA</li>
						<li>Batería 3 celdas</li>
						<li>Cámara de portátil</li>
						<li>Realtek Ethernet</li>
						<li>Lector de Tarjetas</li>
						<li>Incorpora Bluetooth</li>
						<li>Sistema operativo De Windows 13</li>
						<li>Dimensiones 23 x 20 x 5 cm</li>
						<li>Microfono Integrado</li>
						<li>Peso 123</li>
						<li>Color Rojo negro</li>
						<li>1 x VGA</li>
						<li>1 x HDMI</li>
						<li>1 x RJ-45</li>
						</ul>
				
						</descripcion>
						<precio>357€</precio>
					</section>
					</articulo>
			</article>
			<h3>Productos Relacionados</h3>
			<!--Seccion de productos relacionados   -->
			<section id="productosre">
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
			<h3>Anuncios</h3>
			<!--Seccion de publicidad  -->
			<section id="caja-anun">
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
			<h3 id="etiqueta-opi">Opiniones</h3>
			<!--Seccion de opiniones de los usuarios  -->
			<section id="opinion">
				<?php 
					$select="SELECT * FROM comentarios";
					$result=$datos->Query($select);
					while($row=mysql_fetch_array($result)){
						$usu="SELECT * FROM usuarios WHERE ID=".$row['ID_Usuario'];
						$result2=$datos->Query($usu);
						$rowu=mysql_fetch_array($result2)
					?>
				<!--Comentario   -->
				<article class="comentario">
					<h3><?php echo $rowu['Nick']?></h3><h6><?php echo $row['Fecha']." ".$row['Hora']?></h6>
					<hr>
					<p><?php echo $row['Comentario']?></p>
				</article>
				<?php } ?>


			</section>
		</section>
			<?php if(isset($_SESSION["nick"])){?>
			<form id="ncoment" name="ncoment"  action="./script/script_nuevo_comentario.php" method="post" onsubmit="return valida_comentario(this);">
			<p>Añade tu comentario</p>
			  <textarea rows="4" cols="95" id="comentario" name="comentario"></textarea>
			  <input type="hidden" name="id" value="<?php  echo $_SESSION["id_usu"]?>">
			  <button type="submit" style="margin-top:2%;" > Añadir comentario</button>
			  </form>
			<?php } ?>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  