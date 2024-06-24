
var rutaOculta = $("#rutaOculta").val();


	/*=============================================
	 	MOSTRAR CATEGORIAS
	=============================================*/


$(".opcionCategoria").change(function() {


	var id=$(this).val();
	var datos = new FormData();

	datos.append("idUsuario",id);

	$.ajax({

		url:"ajax/productos.ajax.php",
		dataType: "json",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){

			var imagen=respuesta["imagenCategoria"];
			var valor=respuesta["visible"];
			var valor1=respuesta["novedadProducto"];

			
			
			if(valor==1){

				$(".valorCategoria").prop('checked', true);

			}else{

				$(".valorCategoria").prop('checked', false);

			}


			
			if(valor1==1){

				$(".nuevoProducto").prop('checked', true);

			}else{

				$(".nuevoProducto").prop('checked', false);

			}
			


			$('#nombreC').val(respuesta["nombreCategoria"]);
			$('#descripcionC').val(respuesta["descripcion"]);
			$('#idCategoria').val(respuesta["id"]);
			$('.previsualizarLogo').attr('src',rutaOculta+imagen);
			

			
		}

	})



});





	/*=============================================
	 	MOSTRAR SUBCATEGORIAS
	=============================================*/

$(".opcionSubcategoria").change(function(){

	//$(".Subcategoria").empty();

	var elemento=$(this).val();

	var datos = new FormData();
	datos.append("valor",elemento);

	$.ajax({
		
		url:"ajax/productos.ajax.php",
		dataType: "json",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){


			for(var i=0;i<respuesta.length; i++){


					$(".Subcategoria").append(

					'<option class="sub" value="'+respuesta[i]["idSubcategoria"]+'" idCategoria="'+respuesta[i]["idCategoria"]+'">'+respuesta[i]["nombreSubcategoria"]+'</option>'


					);				

			}


		}



	})


});




   $(".Subcategoria").change(function(){


				var idCategoria=$(".sub").attr("idCategoria");
				var subcategoria=$(this).val();
				var datos = new FormData();



				datos.append("idCat",idCategoria);
				datos.append("idSub",subcategoria);

				$.ajax({

					url:"ajax/productos.ajax.php",
					dataType: "json",
					method:"POST",
					data: datos,
					cache: false,
					contentType: false,
					processData: false,
					success:function(respuesta){

						var imagen=respuesta["imagenSubcategoria"];
						var valor=respuesta["visible"];
						var valor1=respuesta["novedadProducto"];


						/*=============================================
			 			 EVALUAR LA VISIBILIDAD DE LA SUBCATEGORIA
						=============================================*/


						if(valor==1){

							$(".valorSub").prop('checked', true);

						}else{

							$(".valorSub").prop('checked', false);

						}

						/*===================================================================
			  			EVALUAR EL ESTADO DE LA CATEGORIA PARA VISUALIZAR PRODUCTOS NUEVOS
						=====================================================================*/

						if(valor1==1){

							$(".nuevoProducto").prop('checked', true);
			
						}else{
			
							$(".nuevoProducto").prop('checked', false);
			
						}

							$('#id').val(respuesta["id"]);
							$('.nombreSub').val(respuesta["nombreSubcategoria"]);
							$('.descripcionSub').val(respuesta["descripcion"]);
							$('#idSubcategoria').val(respuesta["idSubcategoria"]);
							$('#idCategoria').val(respuesta["idCategoria"]);			
							$('.previsualizarLogo').attr('src',rutaOculta+imagen)


					}


				});   


			});












/*=============================================
	MOSTRAR EL LISTADO DEL LOS PRODUCTOS 
	=============================================*/


$(".SubcategoriaProductos").change(function(){

	$(".Opcionproductos").empty();

	var idCategoria=$(".SubcategoriaProductos").val();

	var datos = new FormData();

	datos.append("idC",idCategoria);

	$.ajax({
		url:"ajax/productos.ajax.php",
		dataType: "json",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){


			for(var i=0;i<respuesta.length; i++){

					$(".Opcionproductos").append(
					
					
					'<option class="productos" value="'+respuesta[i]["id"]+'">'+respuesta[i]["nombreProducto"]+'</option>'

					);


			}


		}


	})


})




			/*=============================================
			MOSTRAR EL PRODUCTO PARA ACTUALIZARLO
			=============================================*/


$(".Opcionproductos").change(function(){

	
	var id=$(this).val();
	var datos = new FormData();

	datos.append("idProducto",id);


	$.ajax({
		
		url:"ajax/productos.ajax.php",
		dataType: "json",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){

			
			var imagen=respuesta["imagenProducto"];
			var imagen1=respuesta["imagenProducto1"];
			var imagen2=respuesta["imagenProducto2"];
			var imagen3=respuesta.imagenProducto3;
			var valor=respuesta["visible"];
			var valor1=respuesta["novedadProducto"];
			
			/*=============================================
			  EVALUAR LA VISIBILIDAD DEL PRODUCTO
			=============================================*/


			if(valor==1){

				$(".valorProducto").prop('checked', true);

			}else{

				$(".valorProducto").prop('checked', false);

			}


			/*=============================================
			  EVALUAR EL ESTADO DEL PRODUCTO SI ES NUEVO
			=============================================*/


			if(valor1==1){

				$(".nuevoProducto").prop('checked', true);

			}else{

				$(".nuevoProducto").prop('checked', false);

			}


			$('#idproducto').val(respuesta["id"]);
			$('#idproducto1').val(respuesta["id"]);
			$('#idproducto2').val(respuesta["id"]);
			$('#idproducto3').val(respuesta["id"]);
			$('#idImgPrincipal').val(respuesta["id"]);
			$('.nombreProducto').val(respuesta["nombreProducto"]);
			$('.descripcionProducto').val(respuesta["descProducto"]);
			$('.codigoProducto').val(respuesta["codigo"]);
			$('.formatoProducto').val(respuesta["formato"]);
			$('.usoProducto').val(respuesta["uso"]);
			$('.calidadProducto').val(respuesta["calidad"]);
			$('.traficoProducto').val(respuesta["trafico"]);
			$('.acabadoProducto').val(respuesta["acabado"]);
			$('.texturaProducto').val(respuesta["textura"]);
			$('.disenoProducto').val(respuesta["diseno"]);
			$('.colorProducto').val(respuesta["color"]);
			$('.mtsxCajaProducto').val(respuesta["metrosxCaja"]);
			$('.udsxCajaProducto').val(respuesta["unidadesxCaja"]);
			$('.udsxMtsCuadradoProducto').val(respuesta["udsxMts"]);
			$('.pesoCajaProducto').val(respuesta["pesoxCaja"]);
			$('.datosImagen').val(imagen);	
			$('.previsualizarLogo').attr('src',rutaOculta+imagen)
			$('.previsualizarImagen1').attr('src',rutaOculta+imagen1)
			$('.previsualizarImagen2').attr('src',rutaOculta+imagen2)
			$('.previsualizarImagen3').attr('src',rutaOculta+imagen3)

	
		}


	})


})



/* ACTUALIZAR PRODUCTO REVISION  04/03/2022 */

	/*=============================================
	ACTUALIZAR FOTO DE PRODUCTO PRINCIPAL
	=============================================*/


$("#subirFotos").change(function(){

	var imagen=this.files[0];

	console.log("imagen",imagen);


	/*=============================================
	VALIDAMOS EL FORMATO DE LA IMAGEN
	=============================================*/


	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png" ){

		$("#subirFotos").val("");

		
		swal("Tipo de Extension no valida", "You clicked the button!", "error");


	}


	/*=============================================
	CARGAR LA IMAGEN
	=============================================*/


	var datosImagen=new FileReader();
	datosImagen.readAsDataURL(imagen);

	$(datosImagen).on("load",function(event){

		var rutaImagen=event.target.result;

		$(".previsualizarLogo").attr("src",rutaImagen);


	})

})	


/* Capturar Categoria */

$(".opcionCategoria").change(function(){


	var idCategoria=$(this).val();
	$("#idCategoria").val(idCategoria);


})



/* Capturar Sub Cateogria */

$(".SubcategoriaProductos").change(function(){
	

	/* Capturar id */
	var id=$(this).val();
	$("#idTipo").val(id);


	/* Capturar SubCategoria */
	var idSubcategoria=$('option:selected', this).attr("idTipo");
	$("#idSubcategoria").val(idSubcategoria);


})



/*=============================================
ELIMINAR PRODUCTO
=============================================*/

$("#eliminarProducto").click(function(){

	
	var idproducto = $("#idproducto").val();
	

	swal({
		title: "Desea Eliminar el Producto ?",
		text: "Despues de eliminado el producto no es posible recuperarlo!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {		

		if (willDelete) {

			window.location = "index.php?ruta=productos&id="+idproducto;

			swal("Poof! Your imaginary file has been deleted!", {
				icon: "success",
			});
		} else {
			swal("Accion Cancelada");
		}
	
	});
	
});


/*=============================================
ELIMINAR SUBCATEGORIA
=============================================*/

$("#eliminarSubcategoria").click(function(){

	var id = $("#id").val();
	var idCategoria = $("#idCategoria").val();
	var idSubcategoria=$("#idSubcategoria").val();

	
	console.log("idSubcategoria", idSubcategoria);


	
	swal({
		title: "Desea Eliminar el Producto ?",
		text: "Despues de eliminado el producto no es posible recuperarlo!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})

	.then((willDelete) => {		

		if (willDelete) {

			window.location = "index.php?ruta=subcategorias&id="+id+"&idCategoria="+idCategoria+"&idSubcategoria="+idSubcategoria;

			swal("Poof! Your imaginary file has been deleted!", {
				icon: "success",
			});
		} else {
			swal("Accion Cancelada");
		}
	
	});
	
	

				


});


/* Capturar Categoria  para la creacion de las Subcategorias*/

$(".opcionCategoriaSub").change(function(){


	var idCategoria=$(this).val();
	$("#idCategoria").val(idCategoria);


})



/*=============================================
ELIMINAR CATEGORIA
=============================================*/


$(".borrarCategoria").on('click',function(e){

	e.preventDefault();
	var id=$(this).attr('id');

	var datos = new FormData();
	datos.append("idCategoria",id);



	$.ajax({
		url:"ajax/productos.ajax.php",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){


			swal({
				title: "Eliminar Categoria ?",
				text: "Al realizar la siguiente accion eliminara la Categoria sin poder recuperarla nuevamente!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				
				if (willDelete) {

					jQuery('[id="'+id+'"]').parents('tr').remove();

					swal("Categoria eliminada correctamente!", {
						icon: "success",
					});
				} else {
					swal("Operacion Cancelada!");
				}
			});


			

		}

	})
	
});





$(".SeleccionCategoria").change(function() {


	var id=$(this).val();

	var datos = new FormData();

	datos.append("idUsuario",id);

	$.ajax({
		url:"ajax/productos.ajax.php",
		dataType: "json",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){

			var imagen=respuesta["imagenCategoria"];
			var valor=respuesta["visible"];

			if(valor==1){

				$(".valorCategoria").prop('checked', true);

			}else{

				$(".valorCategoria").prop('checked', false);

			}


			$('#nombreC').val(respuesta["nombreCategoria"]);
			$('#descripcionC').val(respuesta["descripcion"]);
			$('#idCategoria').val(respuesta["id"]);
			

			
		}

	})



});


/* ----------------------- MANEJO DE LA GALERIAS ---------------------------------------*/




/*--- previsualizar Imagen 1 -----*/

$("#subirImagen1").change(function(){

	var imagen=this.files[0];

	var datosImagen=new FileReader();
	datosImagen.readAsDataURL(imagen);

	$(datosImagen).on("load",function(event){

		var rutaImagen=event.target.result;


		$(".previsualizarImagen1").attr("src",rutaImagen);


	})

})	



/*--- previsualizar Imagen 2 -----*/

$("#subirImagen2").change(function(){

	var imagen=this.files[0];

	var datosImagen=new FileReader();
	datosImagen.readAsDataURL(imagen);

	$(datosImagen).on("load",function(event){

		var rutaImagen=event.target.result;


		$(".previsualizarImagen2").attr("src",rutaImagen);


	})

})	


/*--- previsualizar Imagen 3 -----*/

$("#subirImagen3").change(function(){

	var imagen=this.files[0];

	var datosImagen=new FileReader();
	datosImagen.readAsDataURL(imagen);

	$(datosImagen).on("load",function(event){

		var rutaImagen=event.target.result;


		$(".previsualizarImagen3").attr("src",rutaImagen);


	})

})	



/* ----------------------- VISUALIZAR IMAGENES DE BANNER ---------------------------*/

/* Imagen 1 */

$("#subirFotosBanner1").change(function(){

	var imagen=this.files[0];

	var datosImagen=new FileReader();
	datosImagen.readAsDataURL(imagen);

	$(datosImagen).on("load",function(event){

		var rutaImagen=event.target.result;


		$(".previsualizarLogoBanner1").attr("src",rutaImagen);


	})

})	


/* Imagen 2 */

$("#subirFotosBanner2").change(function(){

	var imagen=this.files[0];

	var datosImagen=new FileReader();
	datosImagen.readAsDataURL(imagen);

	$(datosImagen).on("load",function(event){

		var rutaImagen=event.target.result;


		$(".previsualizarLogoBanner2").attr("src",rutaImagen);


	})

})	


/* Imagen 3*/


$("#subirFotosBanner3").change(function(){

	var imagen=this.files[0];

	var datosImagen=new FileReader();
	datosImagen.readAsDataURL(imagen);

	$(datosImagen).on("load",function(event){

		var rutaImagen=event.target.result;


		$(".previsualizarLogoBanner3").attr("src",rutaImagen);


	})

})
