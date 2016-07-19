
		<!--Menu  -->
		<table id="lista">
		<th><td>ID</td><td>Imagen</td></th>
		<?php 
			include 'conexionBD.php';
			$selectanun="SELECT * FROM anuncio";
			$result=$datos->Query($selectanun);
			while($row=mysql_fetch_array($result)){
			?>

		<tr><td></td><td><?php echo $row['ID'] ?></td><td><?php echo $row['imagen'] ?></td><td><button onClick="location.href = './script/script_eliminar_anuncio.php?anuncio=<?php echo $row['ID']?>'" >Eliminar	</button></td><td><button onClick="location.href = 'index.php?cat=modian&ID=<?php echo $row['ID'] ?>'" >Modificar</button></td></tr>
		
		<?php }?>
		</table>


