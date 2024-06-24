/*

$(".editar").click(function(){

	var numero=$(this).attr("idUsuario");
	var rutaActual = location.href;

		var datos = new FormData();
		datos.append("idUsuario", numero);

		$.ajax({
			url:rutaActual+"crearUsuarios.php",
			method:"POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success:function(respuesta){
			
				
					

			
			}

		})


})

*/


$("#crearRegistro").attr('disabled',true);


$("#repetir_password").on('input',function(){

	var password=$('#password').val();

	if  ($(this).val()==password){

		$('#resultado').text('Password Iguales');
		$('#resultado').parents('.form-group').addClass('has-success').removeClass('has-error');
		$('input#password').parents('.form-group').addClass('has-success').removeClass('has-error');
		$("#crearRegistro").attr('disabled',false);

	}else{


		$('#resultado').text('Los Passwords no son iguales');
		$('#resultado').parents('.form-group').addClass('has-error').removeClass('has-success');
		$('input#password').parents('.form-group').addClass('has-error').removeClass('has-success');

	}

})


/*Borrar Registros */

$(".borrarRegistro").on('click',function(e){

	e.preventDefault();
	var id=$(this).attr('id');
	var tipo=$(this).attr('tipo');


	var datos = new FormData();
	datos.append("idUsuario",id);
	datos.append("tipo",tipo);


	$.ajax({
		url:"ajax/usuarios.ajax.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){


			swal({
				title: "Eliminar Usuario ?",
				text: "Al realizar la siguiente accion eliminara el usuario sin poder recuperarlo nuevamente!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {

					jQuery('[id="'+id+'"]').parents('tr').remove();

					swal("Usuario eliminado correctamente!", {
						icon: "success",
					});
				} else {
					swal("Operacion Cancelada!");
				}
			});




			

		}

	})
	
});











