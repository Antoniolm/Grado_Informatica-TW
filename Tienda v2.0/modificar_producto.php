		<?php 
		$ID = isset($_GET['ID']) ? $_GET['ID'] : '';
			include 'conexionBD.php';
			$selectanun="SELECT * FROM producto WHERE ID=".$ID;
			$result=$datos->Query($selectanun);
			$row=mysql_fetch_array($result)
			?>
		<section id="contacto">
			<fieldset>
			<legend>Modificar Producto</legend>
			<form enctype="multipart/form-data" name="fproducto" action="./script/script_modificar_producto.php?ID=<?php echo $row['ID']?>" method="post" onsubmit="return valida_producto(this);">
			<label for="nombre">Nombre:</label>
			<input   type="text"   id="nombre"   name="nombre" value="<?php echo $row['Nombre']?>"/>
			<label for="uploadedfile">Imagen</label>
            <input type="file" name="uploadedfile" /><br>
			<label for="campopie">Pie de imagen:</label>
			<input type="text" id="campopie" name="campopie" value="<?php echo $row['Pie']?>"/><br>
			<label for="descripcion">Descripcion:</label>
			<textarea rows="4" cols="95" id="descripcion" name="descripcion" ><?php echo $row['Descripcion']?></textarea>
			<label for="precio">precio:</label>
			<input   type="text"   id="precio"   name="precio" value="<?php echo $row['Precio']?>"/> <br>
			<button type="subrmit" >Modificar</button>
			</fieldset>
		</form>
	

		</section>
