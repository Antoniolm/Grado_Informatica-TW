<?php 
include 'conexionBD.php';
?>
		<h1 id="cajon-color-redes"> Redes</h1>
		<!--Sección de producto destacado de la seccion de redes  -->
		<section id="articulodestacado-redes">
			<section id="producto">
					<articulo>
					<!--Seccion de imagen y pie   -->
					<section class="imagen-arti">
						<figura>
							<imagen><imagen><img src="./redes/TP_Wireless_Router_11n_20150411/tp_wireless_router_11n.jpg" alt = "tp_wireless_router_11n.jpg" /></imagen>
							<pie>TP-LUNK Wireless 11n</pie>
						</figura>
					</section>
					<!--Seccion de nombre,descripcion y precio   -->
					<section class="descrip">
						<nombre><a target="_blank" onmouseover="window.open('popup.php', '', 'width=600,height=600,top=130,left=150'); return false;">TP-LUNK Wireless Router 11n</a></nombre>
						<descripcion><p>Características:</p>
							<ul>
							<li>2 antenas con multiples direcciones.</li>
							<li>Soporta control para la difusion ERQPE para las ultimas versiones </li>
							<li>Soporta contraseña Wep de todas las longitudos posibles</li>
							<li>Soporta contraseña Wep de todas las longitudos posibles</li>
							<li>Permite realizar backup y restore de forma sencilla</li>
							<li>Sumergible a 300 metros de profundidad</li>
							<li>Resistente a golpes</li>
							<li>Difusión de conexión sin problemas de fluctuación</li>
							</ul>

</descripcion>
						<precio>23€</precio>
					</section>
					</articulo>
			</section>
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
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  