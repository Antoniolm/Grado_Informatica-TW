		<?php 
		$ID = isset($_GET['ID']) ? $_GET['ID'] : '';
			?>
		<section id="contacto">
			<fieldset>
			<legend>Modificar anuncio</legend>
			<form enctype="multipart/form-data" name="fanuncio" action="./script/script_modificar_anuncio.php?ID=<?php echo $ID?>" method="post" onsubmit="return valida_anuncio(this);">
			<label for="uploadedfile">Imagen</label>
            <input type="file" name="uploadedfile" /><br>
			<button type="subrmit" >Modificar</button>
			</fieldset>
		</form>
	

		</section>
