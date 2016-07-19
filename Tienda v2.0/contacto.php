
		<section id="contacto">
			<fieldset>
			<legend>Formulario de subcripcion</legend>
			<form action="procesar.php" method="post">
			<label for="camponombre">Nombre:</label>
			<input   type="text"   id="camponombre"   name="camponombre"/>
			<label for="campoapellido">Apellido:</label>
			<input   type="text"   id="campoapellido"   name="campoapellido"/><br>
			<label for="campocorreo">Correo electronico:</label>
			<input   type="text"   id="campocorreo"   name="campocorreo"/>
			<label for="campotelefono">Telefono:</label>
			<input   type="text"   id="campotelefono"   name="campotelefono"/><br>
			<label for="campopostal">Codigo Postal :</label>
			<input   type="text"   id="campopostal"   name="campopostal"/>
			<label for="campodir">Direccion:</label>
			<input   type="text"   id="campodir"   name="campodir"/><br>
			<label for="campociudad">Ciudad:</label>
			<input   type="text"   id="campociudad"   name="campociudad"/>
			<label for="campofecha">Fecha de nacimiento :</label>
			<input   type="text"   id="campofecha"   name="campofecha" /><br>
			<label for="campoDeTexto1">Sexo</label>
			Hombre <input type = "radio" id = "radiobutton1" name="menu" value = "hombre"  />
			Mujer<input type = "radio" id = "radiobutton2" name="menu" value = "mujer" checked/>

			<br><datalist id="listamotivos">
			<option value="Un amigo me hablo sobre ella">
	    	<option value="La vi en las redes sociales">
		    <option value="A traves de la pagina web de vuestros asociados">
			</datalist>
			<label for="campoDeTexto1">¿Como conociste la pagina? </label>
			<input type="text" id="campoDeTexto1" list="listamotivos"><br>
			<input type = "submit" id = "button1" value = "Registrar"/>
			<input type = "reset" id = "button2" value = "Reiniciar formulario" />
			</	fieldset>
		</form>
	

		</section>
