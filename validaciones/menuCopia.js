$(".submenus").click(function(){

	$(this).children("ul").slideToggle();



})


$("ul").click(function(p){

	p.stopPropagation();



})



   

/*capturar evento de galeria */

/*
$(".producto").on('click',function(){

    var rutaOculta="https://enchapesyacabadosalfayomega.com/finalizado/";
	var rutaServidor="https://enchapesyacabadosalfayomega.com/finalizado/backend/";
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



	$(function () {
		$("#imgGaleria").imageLens({ lensSize: 250 });
		/*$("#img_03").imageLens({ imageSrc: "sample01.jpg" });*/
		/*$("#img_01").imageLens({ borderSize: 8, borderColor: "#06f" })*/;
		}); 



	/* prueba  */




	/* Control de Galeria */


	$(".cargarFotografia").on('click',function(){

	   let ruta=$(this).attr("ruta");

	   console.log("ruta",ruta);

	   document.getElementById("galeria").src="https://enchapesyacabadosalfayomega.com/backend/"+ruta;
	   


	})