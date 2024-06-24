/*=============================================
	VALIDAR FORMULARIO CONTACTENOS
	=============================================*/

function validarContactenos(){

		var nombre=$("#nombre").val();
		var email=$("#email").val();
		var mensaje=$("#mensaje").val();
	



	/*=============================================
	VALIDACION DEL NOMBRE
	=============================================*/

	if(nombre==""){


		$("#nombreContactenos").before('<h6 class="alert alert-danger">Escriba por favor el nombre </h6>');


		return false;

	}else{


		var expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(nombre)){


			$("#nombreContactenos").before('<h6 class="alert alert-danger">Escriba por favor solo letras sis caracteres especiales </h6>');

			return false;

		}

	/*=============================================
	VALIDACION DEL CORREO
	=============================================*/

}if(email==""){


	$("#emailContactenos").before('<h6 class="alert alert-danger">Escriba por favor una direccion de correo </h6>');

	return false;


}else{

	var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

	if(!expresion.test(email)){


		$("#emailContactenos").before('<h6 class="alert alert-danger">Por favor escriba correctamente una direccion de correo valida </h6>');

		return false;

	}



}


	/*=============================================
	VALIDACION DEL MENSAJE
	=============================================*/
	if(mensaje==""){


		$("#mensajeContactenos").before('<h6 class="alert alert-danger">Por favor escriba un mensaje </h6>');

		return false;


	}else{

		var expresion = /^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(mensaje)){


			$("#mensajeContactenos").before('<h6 class="alert alert-danger">Escriba un mensaje sin caracteres especiales.</h6>');

			return false;

		}

	}

	return true;

}


function validarDatos(){


		var nombre=$("#nombre").val();
		var email=$("#email").val();
		var mensaje=$("#mensaje").val();
		var telefono=$("#telefono").val();



	/*=============================================
	VALIDACION DEL NOMBRE
	=============================================*/

	if(nombre==""){


		$("#nombre").before('<h6 class="alert alert-danger">Escriba por favor el nombre </h6>');


		return false;

	}else{


		let expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(nombre)){


			$("#nombre").before('<h6 class="alert alert-danger">Escriba por favor solo letras sis caracteres especiales </h6>');

			return false;

		}

	/*=============================================
	VALIDACION DEL CORREO
	=============================================*/

}if(email==""){


	$("#email").before('<h6 class="alert alert-danger">Escriba por favor una direccion de correo </h6>');

	return false;


}else{

	let expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

	if(!expresion.test(email)){


		$("#email").before('<h6 class="alert alert-danger">Por favor escriba correctamente una direccion de correo valida </h6>');

		return false;

	}


}


	/*=============================================
	VALIDACION DEL MENSAJE
	=============================================*/
	if(mensaje==""){


		$("#mensaje").before('<h6 class="alert alert-danger">Por favor escriba un mensaje </h6>');

		return false;


	}else{

		let expresion = /^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(mensaje)){


			$("#mensaje").before('<h6 class="alert alert-danger">Escriba un mensaje sin caracteres especiales.</h6>');

			return false;

		}

	}

	

	if(telefono==""){

		$("#telefono").before('<h6 class="alert alert-danger">Por favor escriba un telefono de contacto </h6>');



	}else{


		let expresion= /^[-]?[0-9]+[\.]?[0-9]+$/;

		if(!expresion.test(telefono)){

		$("#telefono").before('<h6 class="alert alert-danger">Escriba solamente numeros .</h6>');

			return false;

		}

	}


	return true;


}
