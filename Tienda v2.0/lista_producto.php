
		<!--Menu  -->
		<table id="lista">
		<th><td>Nombre</td><td>Imagen</td><td>Precio</td></th>
		<?php 
			include 'conexionBD.php';
			$selectanun="SELECT * FROM producto";
			$result=$datos->Query($selectanun);
			while($row=mysql_fetch_array($result)){
			?>

		<tr><td></td><td><?php echo $row['Nombre'] ?></td><td><?php echo $row['Imagen'] ?></td><td><?php echo $row['Precio'] ?></td><td><button onClick="location.href = './script/script_eliminar_producto.php?producto=<?php echo $row['ID']?>'" >Eliminar	</button></td><td><button onClick="location.href = 'index.php?cat=modip&ID=<?php echo $row['ID'] ?>'" >Modificar</button></td></tr>
		
		<?php }?>
		</table>


