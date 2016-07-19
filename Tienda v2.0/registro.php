
		<section id="contacto">
			<fieldset>
			<legend>Formulario de registro</legend>
			<form name="fregistro" action="./script/script_registrar_usuario.php" method="post" onsubmit="return valida_registro(this);">
			<label for="camponombre">Nombre:</label>
			<input   type="text"   id="camponombre"   name="camponombre"/>
			<label for="campoapellido">Apellido:</label>
			<input   type="text"   id="campoapellido"   name="campoapellido"/><br>
			<label for="campocorreo">Correo electronico:</label>
			<input   type="text"   id="campocorreo"   name="campocorreo"/>
			<label for="camponick">Nick:</label>
			<input   type="text"   id="camponick"   name="camponick"/><br>
			<label for="campopass">Contraseña:</label>
			<input   type="text"   id="campopass"   name="campopass"/><br>
			<button type="subrmit" >Registrarse</button>
			</fieldset>
		</form>
	

		</section>
