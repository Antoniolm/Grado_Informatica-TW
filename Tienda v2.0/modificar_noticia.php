		<?php 
		$ID = isset($_GET['ID']) ? $_GET['ID'] : '';
			include 'conexionBD.php';
			$selectanun="SELECT * FROM noticia WHERE ID=".$ID;
			$result=$datos->Query($selectanun);
			$row=mysql_fetch_array($result)
			?>
		<section id="contacto">
			<fieldset>
			<legend>Modificar noticia</legend>
			<form enctype="multipart/form-data" name="fnoticia" action="./script/script_modificar_noticia.php?ID=<?php echo $row['ID']?>" method="post" onsubmit="return valida_noticia(this);">
			<label for="titulo">titulo:</label>
			<input   type="text"   id="titulo"   name="titulo" value="<?php echo $row['titulo']?>"/>
			<label for="descripcion">Descripcion:</label>
			<textarea rows="4" cols="95" id="descripcion" name="descripcion" ><?php echo $row['descripcion']?></textarea>
			<button type="subrmit" >Modificar</button>
			</fieldset>
		</form>
	

		</section>
