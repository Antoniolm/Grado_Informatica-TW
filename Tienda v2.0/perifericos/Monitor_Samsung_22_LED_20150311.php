<?php 
include 'conexionBD.php';
?>
		<h1 id="cajon-color-peri"> Perifericos</h1>
		<!--Sección de producto destacado de la seccion de perifericos  -->
		<section id="articulodestacado-peri">
			<article id="producto">
					<articulo>
					<!--Seccion de imagen y pie   -->
					<section class="imagen-arti">
						<figura>
							<imagen><img src="./Perifericos/Monitor_Samsung_22_LED_20150311/samsung_22__led_290_290.jpg" alt = "samsung_22__led_290_290.jpg" /></imagen>
							<pie>Monitor Samsung 22 pulgadas </pie>
						</figura>
					</section>
					<!--Seccion de nombre,descripcion y precio   -->
					<section class="descrip">
						<nombre><a href="/index.htm" target="_blank" onmouseover="window.open('popup.php', '', 'width=600,height=600,top=130,left=150'); return false;">Monitor Samsung 22 Pulgadas LED</a></nombre>
						<descripcion><p>Características:</p>
							<p>Podras actualizar a un nivel mas avanzado.
							Experimentara los mejores niveles de color,calidad de imagen visto hasta ahora.</p>
							<p>Control de brillo auto ajustable para ahorrar energia.Include un plan Ahorro epo que hace el que el ahorro energetico se mas facil que nunca.Podras ajustar el brillo segun cuanta energia quieras ahorrar ese dia.</p>
							<p>Podra sentarse donde cualquier angulo sin tener que perder visión.
Podras ver tus peliculas y series desde cual punto de la habitacion (excepto pegado en el techo) con nuestro nuevo monitor con visión mejorada sera posible.</p>
</descripcion>
						<precio>678€</precio>
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