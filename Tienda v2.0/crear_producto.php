
		<section id="contacto">
			<fieldset>
			<legend>Formulario de registro</legend>
			<form enctype="multipart/form-data" name="fproducto" action="./script/script_nuevo_producto.php" method="post" onsubmit="return valida_producto(this);">
			<label for="nombre">*Nombre:</label>
			<input   type="text"   id="nombre"   name="nombre"/>
			<label for="uploadedfile">*Imagen</label>
            <input type="file" name="uploadedfile" /><br>
			<label for="campopie">Pie de imagen:</label>
			<input type="text" id="campopie" name="campopie"/><br>
			<label for="descripcion">*Descripcion:</label>
			<textarea rows="4" cols="95" id="descripcion"   name="descripcion"></textarea>
			<label for="precio">*precio:</label>
			<input   type="text"   id="precio"   name="precio"/><br>
			<button type="subrmit" >Nuevo producto</button>
			</fieldset>
		</form>
	

		</section>
