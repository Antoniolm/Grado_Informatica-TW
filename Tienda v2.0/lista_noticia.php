
		<!--Menu  -->
		<table id="lista">
		<th><td>Titulo</td><td>Descripcion</td><td></td></th>
		<?php 
			include 'conexionBD.php';
			$selectnoti="SELECT * FROM noticia";
			$result=$datos->Query($selectnoti);
			while($row=mysql_fetch_array($result)){
			?>

		<tr><td></td><td><?php echo $row['titulo'] ?></td><td><?php echo $row['descripcion'] ?></td><td><button onClick="location.href = './script/script_eliminar_noticia.php?noticia=<?php echo $row['ID']?>'" >Eliminar	</button></td><td><button onClick="location.href = 'index.php?cat=modinoti&ID=<?php echo $row['ID'] ?>'" >Modificar</button></td></tr>
		
		<?php }?>
		</table>


