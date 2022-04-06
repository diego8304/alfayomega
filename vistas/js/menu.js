$(".submenus").click(function(){

	$(this).children("ul").slideToggle();



})


$("ul").click(function(p){

	p.stopPropagation();



})



   

/*capturar evento de galeria */

/*
$(".producto").on('click',function(){

    var rutaOculta="http://localhost/finalizado/";
	var rutaServidor="http://localhost/finalizado/backend/";
    var id=$(this).attr("idproducto");
	

	console.log("URL", URLsearch);



	var datos = new FormData();

	datos.append("idProducto",id);
	
	$.ajax({
		url:rutaOculta+"vistas/ajax/productos.ajax.php",
		dataType: "json",
		method:"POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(respuesta){

			
			$('#modal').dialog({
				
                modal : true,
				title: 'Descripcion',
				height: 'auto',
				resizable:true
          }); 
		
			   

		}


	})

	

	


})
*/



/* Menu Desplegable  */
	
	function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	} 



	
	/* Control de Galeria */


	$(".cargarFotografia").on('click',function(){

		let ruta=$(this).attr("ruta");


	   document.getElementById("galeria").src="http://localhost/finalizado/backend/"+ruta;



	   $("#galeria").elevateZoom({
			
		zoomType: "lens",
		  lensShape : "round",
		  lensSize  : 250,
		borderSize: 1 


		/*
		tint:true, 
		tintColour:'#F90', 
		tintOpacity:0.5,
		zoomWindowPosition:10,
		zoomWindowHeight: 150, 
		zoomWindowWidth:200, 
		borderSize: 0, 
		easing:true
		*/
	});

	   

	})

	

	$("#galeria").elevateZoom({
			
		zoomType: "lens",
		  lensShape : "round",
		  lensSize  : 250,
		borderSize: 1 


		/*
		tint:true, 
		tintColour:'#F90', 
		tintOpacity:0.5,
		zoomWindowPosition:10,
		zoomWindowHeight: 150, 
		zoomWindowWidth:200, 
		borderSize: 0, 
		easing:true
		*/
	});


	