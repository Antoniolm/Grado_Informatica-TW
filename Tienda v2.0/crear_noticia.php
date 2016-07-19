
		<section id="contacto">
			<fieldset>
			<legend>Formulario de nueva noticia</legend>
			<form enctype="multipart/form-data" name="fnoticia" action="./script/script_nueva_noticia.php" method="post" onsubmit="return valida_noticia(this);">
			<label for="titulo">*Titulo:</label>
			<input   type="text"   id="titulo"   name="titulo"/>
			<label for="descripcion">*Descripcion:</label>
			<textarea rows="4" cols="95" id="descripcion"   name="descripcion"></textarea>
			<button type="subrmit" >Nueva noticia</button>
			</fieldset>
		</form>
	

		</section>
