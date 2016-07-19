<?php 
include 'conexionBD.php';
?>
<h1 id="cajon-color-comp"> Componente</h1>
		<!--Sección de producto destacado de la seccion de componentes  -->
		<section id="articulodestacado-comp">
			<section id="producto">
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
						<nombre><a target="_blank" onmouseover="window.open('popup.php', '', 'width=600,height=600,top=130,left=150'); return false;">Disco Duro Seagate Sata3 </a></nombre>
						<descripcion><p>Especificaciones:</p>
						<ul>
						<li>Nº de modelo: S1342314adfad</li>
						<li>Interfaz SATA3 6Gb/s</li>
						<li>Caché 64MB</li>
						<li>Capacidad total de 1TB</li>
						<li>Promedio de densidad de área 625Gb/in2</li>
						<li>Sectores garantizados 1,223,212.5</li>
						<li>Velocidad de giro (rpm) 7200 rpm</li>
						<li>Latencia promedio 4ms</li>
						<li>Tiempo de lectura menor a 8ms</li>
						<li>Tiempo de escrituramenor a 9.5ms</li>
						<li>Porcentaje de errores anuales menor al 1%</li>
						<li>Corriente inicial máxima, CC 1.0</li>
						<li>Peso 34k</li>
						<li>1 x VGA</li>
						<li>1 x HDMI</li>
						<li>1 x RJ-45</li>

						</ul>
						</descripcion>
						<precio>74€</precio>
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
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  