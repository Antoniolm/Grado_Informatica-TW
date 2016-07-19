
function valida_registro(){ 
   	//valido el nombre 
	var correcto=true;
   	if (document.fregistro.camponick.value.length==0){ 
		document.fregistro.camponick.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.fregistro.camponick.style.border="none";
	}

	if (document.fregistro.campopass.value.length==0){ 
		document.fregistro.campopass.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.fregistro.campopass.style.border="none";
	}

	var expresion_regular_email = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
	
	if(document.fregistro.campocorreo.value.length==0){   //comprobamos si el campo esta vacio
		document.fregistro.campocorreo.style.border="1px solid red";
		correcto= false;
	}else{
		document.fregistro.campocorreo.style.border="none";
	}
	
	if(expresion_regular_email.test(document.fregistro.campocorreo.value) == false ) {
			alert("Tiene que escribir el correo con el formato xxxx@xxx.xx");
			document.fregistro.campocorreo.style.border="1px solid red";
			correcto= false;
	}
	return correcto;
}

function valida_producto(){ 
   	//valido el nombre 
	var correcto=true;
   	if (document.fproducto.nombre.value.length==0){ 
		document.fproducto.nombre.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.fproducto.nombre.style.border="none";
	}

	if (document.fproducto.uploadedfile.value.length==0){ 
		document.fproducto.uploadedfile.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.fproducto.uploadedfile.style.border="none";
	}
	
	if (document.fproducto.descripcion.value.length==0){ 
		document.fproducto.descripcion.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.fproducto.descripcion.style.border="none";
	}
	
	if (document.fproducto.precio.value.length==0){ 
		document.fproducto.precio.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.fproducto.precio.style.border="none";
	}
	return correcto;
}

function valida_anuncio(){ 
   	//valido el nombre 
	var correcto=true;
   	if (document.fanuncio.uploadedfile.value.length==0){ 
		document.fanuncio.uploadedfile.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.fanuncio.uploadedfile.style.border="none";
	}
	return correcto;
}
function valida_noticia(){ 
   	//valido el nombre 
	var correcto=true;
   	if (document.fnoticia.titulo.value.length==0){ 
		document.fnoticia.titulo.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.fnoticia.titulo.style.border="none";
	}
	
	if (document.fnoticia.descripcion.value.length==0){ 
		document.fnoticia.descripcion.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.fnoticia.descripcion.style.border="none";
	}
	return correcto;
}
function valida_comentario(){
	var correcto=true;
		if (document.ncoment.comentario.value.length==0){ 
		document.ncoment.comentario.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.ncoment.comentario.style.border="none";
	}
	if (document.ncoment.comentario.value.length>150){ 
		alert("Numero maximo de letras->150");
		correcto=false;
	} 
	return correcto;
}