<?php	

class ControladorProducto{



	static public function ctrMostrarProductos($id){

		$tabla="categorias";

		$respuesta=ModeloProductos::mdlMostrarProductos($tabla,$id);

		return $respuesta;

	}


	/* Actualizar Categoria  */


	public function ctrActualizarCategoria(){


		$tabla="categorias";
		$ruta=null;

		if(isset($_POST["nombreC"])){


			if(isset($_FILES["datosImagen"]["tmp_name"]) && !empty($_FILES["datosImagen"]["tmp_name"])){

				/*=============================================
				PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
				=============================================*/

				$directorio="vistas/img/categorias/";


				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/

				list($ancho, $alto) = getimagesize($_FILES["datosImagen"]["tmp_name"]);

				$nuevoAncho = 900;
				$nuevoAlto = 700;	

				$aleatorio = mt_rand(100, 999);

				if($_FILES["datosImagen"]["type"] == "image/jpeg"){

					$ruta = "vistas/img/categorias/".$aleatorio.".jpg";

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefromjpeg($_FILES["datosImagen"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta);

				}

				if($_FILES["datosImagen"]["type"] == "image/png"){

					$ruta = "vistas/img/categorias/".$aleatorio.".png";

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefrompng($_FILES["datosImagen"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagealphablending($destino, FALSE);

					imagesavealpha($destino, TRUE);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagepng($destino, $ruta);

				}

			}


			if(isset($_POST["valorCategoria"])){

				$valor=1;


			}else{

				$valor=0;

			}



			   /*=============================================
				 VALIDAR VISIBILIDAD DE LOS PRODUCTOS NUEVOS EN LA CATEGORIA 
				=============================================*/

				if(isset($_POST['nuevoProducto'])){

					$valor1=1;
	
				}else{
	
					$valor1=0;
	
				}


				/*=============================
				CAPTURAR DATOS DEL FORMULARIO
				===============================*/


			$datos = array("nombreCategoria" => $_POST["nombreC"],
				"descCategoria" => $_POST["descripcionC"],
				"valorCategoria"=>$valor,
				"productoNuevo"=>$valor1,
				"idCategoria" => $_POST["idCategoria"]);


			
			$respuesta=ModeloProductos::mdlActualizarCategorias($tabla,$datos,$ruta);
	


			if($respuesta == "ok"){


				echo '<script>
		

				swal("Good job!", "Actualizacion Realizada Correctamente!", "success");


				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				
				}


				window.location = "categorias"

				</script>';







			}else{


				echo"error";


			}
			

			}


		}


				/*=============================================
				MOSTRAR SUBCATEGORIAS 
				=============================================*/

				static public function ctrMostrarSubCategorias($id){


					$tabla="subcategoria";

					$respuesta=ModeloProductos::mdlMostrarSubcategorias($tabla,$id);

					return $respuesta;


				}


				/*=============================================
				TRAER SUBCATEGORIAS 
				=============================================*/

				static public function ctrMostrarSubcategoria($idcategoria,$idSubcategoria){

					$tabla="subcategoria";

					$respuesta=ModeloProductos::mdlMostrarProductosSubcategoria($tabla,$idcategoria,$idSubcategoria);

					return $respuesta;




				}


			    /*=============================================
				ACTUALIZAR  SUBCATEGORIAS 
				=============================================*/

	public function ctrActualizarSubcategorias(){

					$tabla="subcategoria";
					$ruta=null;


	


		if(isset($_POST["nombreSub"])){


			if(isset($_FILES["datosImagen"]["tmp_name"]) && !empty($_FILES["datosImagen"]["tmp_name"])){

				/*=============================================
				PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
				=============================================*/

				$directorio="vistas/img/subcategorias/";


				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/

				list($ancho, $alto) = getimagesize($_FILES["datosImagen"]["tmp_name"]);

				$nuevoAncho = 500;
				$nuevoAlto = 500;	

				$aleatorio = mt_rand(100, 999);

				if($_FILES["datosImagen"]["type"] == "image/jpeg"){

					$ruta = "vistas/img/subcategorias/".$aleatorio.".jpg";

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefromjpeg($_FILES["datosImagen"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta);

				}

				if($_FILES["datosImagen"]["type"] == "image/png"){

					$ruta = "vistas/img/subcategorias/".$aleatorio.".png";

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefrompng($_FILES["datosImagen"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagealphablending($destino, FALSE);

					imagesavealpha($destino, TRUE);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagepng($destino, $ruta);

				}

			}



			if(isset($_POST["valorSub"])){

				$valor=1;


			}else{

				$valor=0;

			}

			
			  /*=============================================
				 VALIDAR VISIBILIDAD DE LOS PRODUCTOS NUEVOS EN LA CATEGORIA 
				=============================================*/

				if(isset($_POST['nuevoProducto'])){

					$valor1=1;
	
				}else{
	
					$valor1=0;
	
				}


			$datos = array("nomSubcategoria" => $_POST["nombreSub"],
				"descriSubcategoria" => $_POST["descSubcategoria"],
				"valorSubcategoria"=>$valor,
				"productoNuevo"=>$valor1,
				"idCategoria" => $_POST["idCategoria"],
				"idSubcategoria" => $_POST["idSubcategoria"]);

			
			$respuesta=ModeloProductos::mdlActualizarSubcategorias($tabla,$datos,$ruta);


			if($respuesta == "ok"){




			echo '<script>
		

				swal("Good job!", "Actualizacion Realizada Correctamente!", "success");


				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				
				}


				window.location = "subcategorias"

				</script>';




			}else{


				echo"error";


			}


		}



}

  /*=============================================
	ELIMINAR PRODUCTO
	=============================================*/

	public function ctrEliminarSubcategoria(){

		if(isset($_GET["id"])){

			$id = $_GET["id"];
			$idCategoria = $_GET["idCategoria"];
			$idSubcategoria = $_GET["idSubcategoria"];


/*
			if($_GET["foto"] != ""){

				unlink($_GET["foto"]);
				rmdir('vistas/img/productos/'.$_GET["id"]);

			}

*/

			$respuesta = ModeloProductos::mdlEliminarSubcategoria($id,$idCategoria,$idSubcategoria);
			

			if($respuesta == "ok"){


				echo '<script>			

				swal("Good job!", "Producto Eliminado Correctamente!", "success"); 

				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );

				}

				window.location = "subcategorias"


				</script>	';




			}



		}

	}






				/*=============================================
				MOSTRAR PRODUCTOS 
				=============================================*/

				static public function ctrMostrarProductosFisicos($datos){


					$tabla="productos";

					$respuesta=ModeloProductos::mdlMostrarProductosFisicos($tabla,$datos);

					return $respuesta;


				}



				static public function ctrConsultarProductosFisicos($idCategoria,$idSubcategoria){


					$tabla="productos";

					$respuesta=ModeloProductos::mdlConsultarProductosFisicos($tabla,$idCategoria,$idSubcategoria);

					return $respuesta;


				}


				/*=============================================
				MOSTRAR PRODUCTOS 
				=============================================*/



				static public function ctrTraerProductos($datos){

					$tabla="productos";

					$respuesta=ModeloProductos::mdlTraerProductos($tabla,$datos);

					return $respuesta;



				}




				/*=============================================
				ACTUALIZAR PRODUCTOS 
				=============================================*/


	public function ctrActualizarProducto(){
				

				$ruta=null;
				$ruta1=null;
				$ruta2=null;
				$ruta3=null;
		
				
			if(isset($_POST["nombrePro"])){


			 	if(isset($_FILES["datosImagen"]["tmp_name"]) && !empty($_FILES["datosImagen"]["tmp_name"])){


				/*=============================================
				PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
				=============================================*/



				$directorio="vistas/img/productos";


				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/

				list($ancho, $alto) = getimagesize($_FILES["datosImagen"]["tmp_name"]);

				$nuevoAncho = 500;
				$nuevoAlto = 500;	

				$aleatorio = mt_rand(100, 999);

				if($_FILES["datosImagen"]["type"] == "image/jpeg"){

					$ruta = "vistas/img/productos/".$_POST["producto"].".jpg";

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefromjpeg($_FILES["datosImagen"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta);

				}

				 if($_FILES["datosImagen"]["type"] == "image/png"){

					$ruta = "vistas/img/productos/".$_POST["producto"].".png";

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefrompng($_FILES["datosImagen"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagealphablending($destino, FALSE);

					imagesavealpha($destino, TRUE);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagepng($destino, $ruta);

				}

			} 

			
				/*=============================================
				ACTUALIZAR IMAGEN 1
				=============================================*/

			if(isset($_FILES["datosImagen1"]["tmp_name"]) && !empty($_FILES["datosImagen1"]["tmp_name"])){


			

				/*=============================================
				PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
				=============================================*/

				$directorio="vistas/img/productos/galeria/";


				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/

				list($ancho, $alto) = getimagesize($_FILES["datosImagen1"]["tmp_name"]);

				$nuevoAncho = 500;
				$nuevoAlto = 500;	

				$aleatorio = mt_rand(100, 999);

				if($_FILES["datosImagen1"]["type"] == "image/jpeg"){

					$ruta1 = "vistas/img/productos/galeria/".$_POST["producto"].".jpg";

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefromjpeg($_FILES["datosImagen1"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta1);

				}

				if($_FILES["datosImagen1"]["type"] == "image/png"){

					$ruta1 = "vistas/img/productos/galeria/".$_POST["producto"].".png";

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefrompng($_FILES["datosImagen1"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagealphablending($destino, FALSE);

					imagesavealpha($destino, TRUE);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagepng($destino, $ruta1);

				}

			} /*=============================================
			ACTUALIZAR IMAGEN 2
			=============================================*/

		  if(isset($_FILES["datosImagen2"]["tmp_name"]) && !empty($_FILES["datosImagen2"]["tmp_name"])){


			/*=============================================
			PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
			=============================================*/

			$directorio="vistas/img/productos/galeria/";


			/*=============================================
			GUARDAMOS LA IMAGEN EN EL DIRECTORIO
			=============================================*/

			list($ancho, $alto) = getimagesize($_FILES["datosImagen2"]["tmp_name"]);

			$nuevoAncho = 500;
			$nuevoAlto = 500;	

			$aleatorio = mt_rand(100, 999);

			if($_FILES["datosImagen2"]["type"] == "image/jpeg"){

				$ruta2 = "vistas/img/productos/galeria/".$_POST["producto"].".jpg";

				/*=============================================
				MOFICAMOS TAMAÑO DE LA FOTO
				=============================================*/

				$origen = imagecreatefromjpeg($_FILES["datosImagen2"]["tmp_name"]);

				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

				imagejpeg($destino, $ruta2);

			}

			if($_FILES["datosImagen2"]["type"] == "image/png"){

				$ruta2 = "vistas/img/productos/galeria/".$_POST["producto"].".png";

				/*=============================================
				MOFICAMOS TAMAÑO DE LA FOTO
				=============================================*/

				$origen = imagecreatefrompng($_FILES["datosImagen2"]["tmp_name"]);

				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

				imagealphablending($destino, FALSE);

				imagesavealpha($destino, TRUE);

				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

				imagepng($destino, $ruta2);

			}

		} /*=============================================
		ACTUALIZAR IMAGEN 3
		=============================================*/

		if(isset($_FILES["datosImagen3"]["tmp_name"]) && !empty($_FILES["datosImagen3"]["tmp_name"])){



		/*=============================================
		PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
		=============================================*/

		$directorio="vistas/img/productos/galeria/";


		/*=============================================
		GUARDAMOS LA IMAGEN EN EL DIRECTORIO
		=============================================*/

		list($ancho, $alto) = getimagesize($_FILES["datosImagen3"]["tmp_name"]);

		$nuevoAncho = 500;
		$nuevoAlto = 500;	

		$aleatorio = mt_rand(100, 999);

		if($_FILES["datosImagen3"]["type"] == "image/jpeg"){

			$ruta3 = "vistas/img/productos/galeria/".$_POST["producto"].".jpg";

			/*=============================================
			MOFICAMOS TAMAÑO DE LA FOTO
			=============================================*/

			$origen = imagecreatefromjpeg($_FILES["datosImagen3"]["tmp_name"]);

			$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

			imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

			imagejpeg($destino, $ruta3);

		}

		if($_FILES["datosImagen3"]["type"] == "image/png"){

			$ruta3 = "vistas/img/productos/galeria/".$_POST["producto"].".png";

			/*=============================================
			MOFICAMOS TAMAÑO DE LA FOTO
			=============================================*/

			$origen = imagecreatefrompng($_FILES["datosImagen3"]["tmp_name"]);

			$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

			imagealphablending($destino, FALSE);

			imagesavealpha($destino, TRUE);

			imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

			imagepng($destino, $ruta3);

		}

	} 


			if(isset($_POST['valorProducto'])){

				$valor=1;


			}else{

				$valor=0;

			}


			 /*=============================================
			 VALIDAR VISIBILIDAD DE LOS PRODUCTOS NUEVOS EN LA CATEGORIA 
			=============================================*/

				if(isset($_POST['nuevoProducto'])){

					$valor1=1;
	
				}else{
	
					$valor1=0;
	
				}


			$datos = array("nombreProducto" => $_POST["nombrePro"],
				"descripcionProducto" => $_POST["descripcionProducto"],
				"valorProducto"=>$valor,
				"id" => $_POST["producto"],
				"codigo"=>$_POST["codigoPro"],
				"formato"=>$_POST["formatoPro"],
				"uso"=>$_POST["usoPro"],
				"calidad"=>$_POST["calidadPro"],
				"trafico"=>$_POST["traficoPro"],
				"acabado"=>$_POST["acabadoPro"],
				"textura"=>$_POST["texturaPro"],
				"diseno"=>$_POST["disenoPro"],
				"color"=>$_POST["colorPro"],
				"mtsxcaja"=>$_POST["mtsxPro"],
				"udsxcaja"=>$_POST["udsxCajaPro"],
				"udsxMtsCuadrado"=>$_POST["udsxMtsCuadradoPro"],
				"pesoxCaja"=>$_POST["pesoCajaPro"],
				"productoNuevo"=>$valor1 );


			$tabla = "productos";

              // Envio de datos al controlador

			$respuesta=ModeloProductos::mdlActualizarProductos($tabla,$datos,$ruta,$ruta1,$ruta2,$ruta3);


			if($respuesta == "ok"){


			echo '<script>
		

				swal("Good job!", "Actualizacion Realizada Correctamente!", "success");


				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				
				}


				window.location = "productos";

				</script>';


			}else{


				echo"error";


			}




		}else{


		}



	}


	   /*=============================================
				METODO PARA ACTUALIZAR IMAGENES
		=============================================*/


		
		/*=============================================
					CARGAR IMAGEN PRINCIPAL
		=============================================*/


 public function ctrActualizarImagenPrincipal(){

				
			$rutaPrincipal=null;
	
	
			if(isset($_FILES["datosImagen"]["tmp_name"]) && !empty($_FILES["datosImagen"]["tmp_name"])){
	

				/*=============================================
				VALIDAR SI EXISTE UNA IMAGEN EN LA BASE DE DATOS
				=============================================*/
				
				$directorio="vistas/img/productos/";

				$tabla="productos";
				$id=$_POST['ImgPrincipal'];

				$respuesta=ModeloProductos::mdlMostrarProductos($tabla,$id);

	

				if(!empty($respuesta['imagenProducto'])){

					unlink($respuesta['imagenProducto']);


				}
		
				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/
	
				list($ancho, $alto) = getimagesize($_FILES["datosImagen"]["tmp_name"]);
	
				$nuevoAncho = 500;
				$nuevoAlto = 500;	
	
				$nombreImagen = $_FILES["datosImagen"]["name"];
	
				if($_FILES["datosImagen"]["type"] == "image/jpeg"){
	
					$rutaPrincipal= "vistas/img/productos/".$nombreImagen;
	
					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/
	
					$origen = imagecreatefromjpeg($_FILES["datosImagen"]["tmp_name"]);
	
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
	
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
	
					imagejpeg($destino, $rutaPrincipal);
	
				}
	
				if($_FILES["datosImagen"]["type"] == "image/png"){
	
					$rutaPrincipal = "vistas/img/productos/".$nombreImagen;
	
					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/
	
					$origen = imagecreatefrompng($_FILES["datosImagen"]["tmp_name"]);
	
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
	
					imagealphablending($destino, FALSE);
	
					imagesavealpha($destino, TRUE);
	
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
	
					imagepng($destino, $rutaPrincipal);
	
				}
		
				
				$datos=$_POST["ImgPrincipal"];
	
				$tabla = "productos";
	
				$respuesta=ModeloProductos::mdlActualizarImagenPrincipal($tabla,$datos,$rutaPrincipal);
	
				
					if($respuesta == "ok"){

	
						echo '<script>
	
						swal("OK!", "Actualizacion realizada Correctamente!", "success");
		
		
						if ( window.history.replaceState ) {
							window.history.replaceState( null, null, window.location.href );
						}
		
						location.reload();		
		
		
						</script>';
		
		
					}else{
		
		
						echo"error";
		
		
					}
	
	
			}
	
	
	
	
		}




		public function ctrActualizarImagenes1(){


			$ruta1=null;
	
	
			if(isset($_FILES["datosImagen1"]["tmp_name"]) && !empty($_FILES["datosImagen1"]["tmp_name"])){
	
	
				/*=============================================
				PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
				=============================================*/
	
				$directorio="vistas/img/productos/galeria/";
	
				$tabla="productos";
				$id=$_POST['idImgProducto3'];
	
	
				$respuesta=ModeloProductos::mdlMostrarProductos($tabla,$id);
	
	
				if(!empty($respuesta['imagenProducto1'])){
	
					unlink($respuesta['imagenProducto1']);
	
	
				}
	
	
				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/
	
				list($ancho, $alto) = getimagesize($_FILES["datosImagen1"]["tmp_name"]);
	
				$nuevoAncho = 500;
				$nuevoAlto = 500;	
	
				$nombreImagen = $_FILES["datosImagen1"]["name"];
	
				if($_FILES["datosImagen1"]["type"] == "image/jpeg"){
	
					$ruta1 = "vistas/img/productos/galeria/".$nombreImagen;
	
					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/
	
					$origen = imagecreatefromjpeg($_FILES["datosImagen1"]["tmp_name"]);
	
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
	
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
	
					imagejpeg($destino, $ruta1);
	
				}
	
				if($_FILES["datosImagen1"]["type"] == "image/png"){
	
					$ruta1 = "vistas/img/productos/galeria/".$nombreImagen;
	
					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/
	
					$origen = imagecreatefrompng($_FILES["datosImagen1"]["tmp_name"]);
	
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
	
					imagealphablending($destino, FALSE);
	
					imagesavealpha($destino, TRUE);
	
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
	
					imagepng($destino, $ruta1);
	
				}
	
				
				$datos=$_POST["idImgProducto3"];
	
				$tabla = "productos";
	
				$respuesta=ModeloProductos::mdlActualizarImagen1($tabla,$datos,$ruta1);
	
				
					if($respuesta == "ok"){
	
	
						echo '<script>
		
						swal("OK!", "Actualizacion realizada Correctamente!", "success");
		
		
						if ( window.history.replaceState ) {
							window.history.replaceState( null, null, window.location.href );
						}
		
						location.reload();		
		
		
						</script>';
		
		
					}else{
		
		
						echo"error";
		
		
					}
	
	
			}
	
	
	
	
		}



		 /*=============================================
				METODO PARA ACTUALIZAR IMAGEN 2
		=============================================*/


	public function ctrActualizarImagenes2(){


		$ruta2=null;


		if(isset($_FILES["datosImagen2"]["tmp_name"]) && !empty($_FILES["datosImagen2"]["tmp_name"])){


			/*=============================================
			PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
			=============================================*/

			$directorio="vistas/img/productos/galeria/";
			$tabla="productos";
			$id=$_POST['idImgProducto2'];


				$respuesta=ModeloProductos::mdlMostrarProductos($tabla,$id);

			if (!empty($respuesta['imagenProducto2'])){

				unlink($respuesta['imagenProducto2']);

			}


			/*=============================================
			GUARDAMOS LA IMAGEN EN EL DIRECTORIO
			=============================================*/

			list($ancho, $alto) = getimagesize($_FILES["datosImagen2"]["tmp_name"]);

			$nuevoAncho = 500;
			$nuevoAlto = 500;	

			$nombreImagen = $_FILES["datosImagen2"]["name"];

			if ($_FILES["datosImagen2"]["type"] == "image/jpeg"){

				$ruta2 = "vistas/img/productos/galeria/".$nombreImagen;

				/*=============================================
				MOFICAMOS TAMAÑO DE LA FOTO
				=============================================*/

				$origen = imagecreatefromjpeg($_FILES["datosImagen2"]["tmp_name"]);

				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

				imagejpeg($destino, $ruta2);

			}

			if ($_FILES["datosImagen2"]["type"] == "image/png"){

				$ruta2 = "vistas/img/productos/galeria/".$nombreImagen;

				/*=============================================
				MOFICAMOS TAMAÑO DE LA FOTO
				=============================================*/

				$origen = imagecreatefrompng($_FILES["datosImagen2"]["tmp_name"]);

				$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

				imagealphablending($destino, FALSE);

				imagesavealpha($destino, TRUE);

				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

				imagepng($destino, $ruta2);

			}

			
			
				$datos=$_POST["idImgProducto2"];

				$tabla = "productos";

				$respuesta=ModeloProductos::mdlActualizarImagen2($tabla,$datos,$ruta2);

			
				if($respuesta == "ok"){

					echo '<script>
	
					swal("OK!", "Actualizacion realizada Correctamente!", "success");
	
	
						if ( window.history.replaceState ) {
							window.history.replaceState( null, null, window.location.href );
						}
		
						location.reload();		
		
	
					</script>';
	
	
				}else{
	
	
					echo"error";
	
	
				}


		}




	}





		/*=============================================
		CARGAR IMAGEN 3
		=============================================*/


	public function ctrActualizarImagenes(){


		$ruta3=null;


		if(isset($_FILES["datosImagen3"]["tmp_name"]) && !empty($_FILES["datosImagen3"]["tmp_name"])){


			/*=============================================
			PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
			=============================================*/

			
			$directorio="vistas/img/productos/galeria/";

			$tabla="productos";
			$id=$_POST['idImgProducto3'];

			$respuesta=ModeloProductos::mdlMostrarProductos($tabla,$id);


			if(!empty($respuesta['imagenProducto3'])){

				unlink($respuesta['imagenProducto3']);


			}

			/*=============================================
			GUARDAMOS LA IMAGEN EN EL DIRECTORIO
			=============================================*/

			list($ancho, $alto) = getimagesize($_FILES["datosImagen3"]["tmp_name"]);

			$nuevoAncho = 500;
			$nuevoAlto = 500;	

			$nombreImagen = $_FILES["datosImagen3"]["name"];

			if($_FILES["datosImagen3"]["type"] == "image/jpeg"){

					$ruta3 = "vistas/img/productos/galeria/".$nombreImagen;

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefromjpeg($_FILES["datosImagen3"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta3);


			} else if($_FILES["datosImagen3"]["type"] == "image/png"){

					$ruta3 = "vistas/img/productos/galeria/".$nombreImagen;

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefrompng($_FILES["datosImagen3"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagealphablending($destino, FALSE);

					imagesavealpha($destino, TRUE);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagepng($destino, $ruta3);

			}else{


				echo "Error en la carga de imagenes";


			}
			
			$datos=$_POST["idImgProducto3"];

			$tabla = "productos";

			$respuesta=ModeloProductos::mdlActualizarImagen3($tabla,$datos,$ruta3);

			
				if($respuesta == "ok"){


					echo '<script>
	
					swal("OK!", "Actualizacion realizada Correctamente!", "success");
	
	
					if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					}
	
					location.reload();		
	
	
					</script>';
	
	
				}else{
	
	
					echo"error";
	
	
				}


		}




	}




		/*=============================================
				CREAR NUEVO PRODUCTO
		=============================================*/

	public function ctrCrearNuevoProducto(){


			/*=============================================
			VARIABLES RUTA PARA ALMACENAR LA RUTA DE LA IMAGENES EN DB
			=============================================*/	

				$url=Ruta::ctrRutaServidor();

				$ruta=null;
				$ruta1=null;
				$ruta2=null;
				$ruta3=null;


		if(isset($_POST["nombrePro"])){


			if(isset($_FILES["datosImagen"]["tmp_name"]) && !empty($_FILES["datosImagen"]["tmp_name"])){

			
				/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
				=============================================*/

				
					list($ancho, $alto) = getimagesize($_FILES["datosImagen"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;	

				
				/*=============================================
					OBTENER EL NOMBRE DE LA FOTOGRAFIA
				=============================================*/

					$nombreImagen = $_FILES["datosImagen"]["name"];


				if($_FILES["datosImagen"]["type"] == "image/jpeg"){


					 $ruta = "vistas/img/productos/".$nombreImagen;
					 $origen = imagecreatefromjpeg($_FILES["datosImagen"]["tmp_name"]);
				     $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					 imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					 imagejpeg($destino, $ruta);


				} else if($_FILES["datosImagen"]["type"] == "image/png"){

		
					$ruta = "vistas/img/productos/".$nombreImagen;
					$origen = imagecreatefrompng($_FILES["datosImagen"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagealphablending($destino, FALSE);
					imagesavealpha($destino, TRUE);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagepng($destino, $ruta);
					
				}

				
				/*=============================================
								CARGAR IMAGEN 2
				=============================================*/


			} if (isset($_FILES["datosImagen1"]["tmp_name"]) && !empty($_FILES["datosImagen1"]["tmp_name"])){

				/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
				=============================================*/


					list($ancho, $alto) = getimagesize($_FILES["datosImagen1"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;	

					$nombreImagen = $_FILES["datosImagen1"]["name"];


				if ($_FILES["datosImagen1"]["type"] == "image/jpeg"){


					$ruta1 = "vistas/img/productos/galeria/".$nombreImagen;
					$origen = imagecreatefromjpeg($_FILES["datosImagen1"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagejpeg($destino, $ruta1);

				
				} else if ($_FILES["datosImagen1"]["type"] == "image/png"){

					$ruta1 = "vistas/img/productos/galeria/".$nombreImagen;
					$origen = imagecreatefrompng($_FILES["datosImagen1"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagealphablending($destino, FALSE);
					imagesavealpha($destino, TRUE);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagepng($destino, $ruta1);

				}

			
			}


				/*=============================================
				CARGAR IMAGEN 3
				=============================================*/


			if (isset($_FILES["datosImagen2"]["tmp_name"]) && !empty($_FILES["datosImagen2"]["tmp_name"])){


				list($ancho, $alto) = getimagesize($_FILES["datosImagen2"]["tmp_name"]);

				$nuevoAncho = 500;
				$nuevoAlto = 500;	

				$nombreImagen = $_FILES["datosImagen2"]["name"];

				if($_FILES["datosImagen2"]["type"] == "image/jpeg"){

					$ruta2 = "vistas/img/productos/galeria/".$nombreImagen;
					$origen = imagecreatefromjpeg($_FILES["datosImagen2"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagejpeg($destino, $ruta2);



				} else if ($_FILES["datosImagen2"]["type"] == "image/png"){

					$ruta2 = "vistas/img/productos/galeria/".$nombreImagen;
					$origen = imagecreatefrompng($_FILES["datosImagen2"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagealphablending($destino, FALSE);
					imagesavealpha($destino, TRUE);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagepng($destino, $ruta2);

				}

			}  
			
				/*=============================================
				CARGAR IMAGEN 4
				=============================================*/


			if (isset($_FILES["datosImagen3"]["tmp_name"]) && !empty($_FILES["datosImagen3"]["tmp_name"])){

			
				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/

				list($ancho, $alto) = getimagesize($_FILES["datosImagen3"]["tmp_name"]);

				$nuevoAncho = 500;
				$nuevoAlto = 500;	

				$nombreImagen = $_FILES["datosImagen3"]["name"];

				if($_FILES["datosImagen3"]["type"] == "image/jpeg"){

					$ruta3 = "vistas/img/productos/galeria/".$nombreImagen;
					$origen = imagecreatefromjpeg($_FILES["datosImagen3"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagejpeg($destino, $ruta3);


				} else if ($_FILES["datosImagen3"]["type"] == "image/png"){

					$ruta3 = "vistas/img/productos/galeria/".$nombreImagen;
					$origen = imagecreatefrompng($_FILES["datosImagen3"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagealphablending($destino, FALSE);
					imagesavealpha($destino, TRUE);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagepng($destino, $ruta3);

				}

			}

				/*=============================================
				 VALIDAR VISIBILIDAD DEL PRODUCTO
				=============================================*/


					if (isset($_POST['valorProducto'])){

						$valor=1;


					} else {

						$valor=0;

					}

				/*=============================================
				 VALIDAR VISIBILIDAD DE LOS PRODUCTOS NUEVOS EN LA CATEGORIA 
				=============================================*/

					if (isset($_POST['nuevoProducto'])) {

						$valor1=1;
		
					} else {
		
						$valor1=0;
		
					}

				/*=============================================
				 CAPTURAR DATOS DEL FORMULARIO
				=============================================*/

			$datos = array(

				"nombreProducto" => $_POST["nombrePro"],
				"descripcionProducto" => $_POST["descripcionProducto"],
				"valorProducto"=>$valor,
				"idCategoria" => $_POST["idCategoria"],
				"idTipo" => $_POST["idTipo"],
				"idSubcategoria"=>$_POST["idSubcategoria"],
				"codigo"=>$_POST["codigoPro"],
				"formato"=>$_POST["formatoPro"],
				"uso"=>$_POST["usoPro"],
				"calidad"=>$_POST["calidadPro"],
				"trafico"=>$_POST["traficoPro"],
				"acabado"=>$_POST["acabadoPro"],
				"textura"=>$_POST["texturaPro"],
				"diseno"=>$_POST["disenoPro"],
			    "color"=>$_POST["colorPro"],
				"mtsxcaja"=>$_POST["mtsxPro"],
				"udsxcaja"=>$_POST["udsxCajaPro"],
				"udsxMtsCuadrado"=>$_POST["udsxMtsCuadradoPro"],
				"pesoxCaja"=>$_POST["pesoCajaPro"],
				"productoNuevo"=>$valor1);

			
			$tabla = "productos";
			$respuesta=ModeloProductos::mdlCrearNuevoProducto($tabla,$datos,$ruta,$ruta1,$ruta2,$ruta3);
			

			if ($respuesta == "ok"){


				echo '<script>

						swal("OK!", "Actualizacion realizada Correctamente!", "success");


						if ( window.history.replaceState ) {
							window.history.replaceState( null, null, window.location.href );
						}

						location.reload();		


					</script>';


			} else{


				echo '<script> swal("Error al Cargar la Imagen", "Verifique Nuevamente!", "success") </script>';


			}




		}else{


			


		}


		

	}



	/*=============================================
	ELIMINAR PRODUCTO
	=============================================*/


	public function ctrEliminarProducto(){

		if(isset($_GET["id"])){

			$id = $_GET["id"];

			$tabla="productos";

			
				/*=============================================
				ELLIMNAR FOTOGRAFIAS 
				=============================================*/

			$consultarFoto=ModeloProductos::mdlMostrarProductos($tabla,$id);


				unlink($consultarFoto['imagenProducto']);
				unlink($consultarFoto['imagenProducto1']);
				unlink($consultarFoto['imagenProducto2']);
				unlink($consultarFoto['imagenProducto3']);



			$respuesta = ModeloProductos::mdlEliminarProducto($id);
			

			if($respuesta == "ok"){


				echo '<script>			

				swal("Good job!", "Producto Eliminado Correctamente!", "success"); 

				window.location = "productos";

				</script>';



			}



		}

	}



		/*=============================================
			MOFICAMOS CREAR NUEVO SUBCATEGORIA
		=============================================*/


	public function ctrCrearNuevaSubcategoria(){


		
		$numeroAleatorio=random_int(1,100);

		$ruta=null;


		if(isset($_POST["nombreSub"])){


			if(isset($_FILES["datosImagen"]["tmp_name"]) && !empty($_FILES["datosImagen"]["tmp_name"])){

				/*=============================================
				PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
				=============================================*/

				$directorio="/vistas/img/subcategorias/";


				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/

				list($ancho, $alto) = getimagesize($_FILES["datosImagen"]["tmp_name"]);

				$nuevoAncho = 500;
				$nuevoAlto = 500;	

				$aleatorio = mt_rand(100, 999);

				if($_FILES["datosImagen"]["type"] == "image/jpeg"){

					$ruta = "vistas/img/subcategorias/".$aleatorio.".jpg";

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefromjpeg($_FILES["datosImagen"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta);

				}


				if($_FILES["datosImagen"]["type"] == "image/png"){

					$ruta = "vistas/img/subcategorias/".$aleatorio.".png";

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefrompng($_FILES["datosImagen"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagealphablending($destino, FALSE);

					imagesavealpha($destino, TRUE);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagepng($destino, $ruta);

				}

			}


					if(isset($_POST['valorSub'])){

						$valor=1;


					}else{

						$valor=0;

					}



			/*=============================================
			VALIDAR VISIBILIDAD DE LOS PRODUCTOS NUEVOS EN LA CATEGORIA 
			=============================================*/

				if(isset($_POST['nuevoProducto'])){

					$valor1=1;
	
				}else{
	
					$valor1=0;
	
				}



			/*=============================================
			CAPTURAR DATOS DE FORMULARIO
			=============================================*/

		  $datos = array(

				"nombreSubcategoria" => $_POST["nombreSub"],
				"numeroAleatorio"=>$numeroAleatorio,
				"descripcionSubcategoria" => $_POST["descSubcategoria"],
				"valorProducto"=>$valor,
				"productoNuevo"=>$valor1,
				"idCategoria" => $_POST["idCategoria"]);


			$tabla = "subcategoria";

			$respuesta=ModeloProductos::mdlCrearNuevaSubcategoria($tabla,$datos,$ruta);


			if($respuesta == "ok"){


			echo '<script>

				swal("OK!", "Actualizacion realizada Correctamente!", "success");


				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}

				location.reload();		


				</script>';


			}else{


			echo"error";


			}


		}else{


		}
		

	}



	public function ctrGuardarNuevaCategoria(){


		$ruta=null;

		

		if(isset($_POST["nombreC"])){


			$nombreImagen = $_FILES["datosImagen"]["name"];


			if(isset($_FILES["datosImagen"]["tmp_name"]) && !empty($_FILES["datosImagen"]["tmp_name"])){

				/*=============================================
				PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
				=============================================*/

				$directorio="/vistas/img/categorias/";


				/*=============================================
				GUARDAMOS LA IMAGEN EN EL DIRECTORIO
				=============================================*/

				list($ancho, $alto) = getimagesize($_FILES["datosImagen"]["tmp_name"]);

				$nuevoAncho = 500;
				$nuevoAlto = 500;	

				$aleatorio = mt_rand(100, 999);

				if($_FILES["datosImagen"]["type"] == "image/jpeg"){

					$ruta = "vistas/img/categorias/".$nombreImagen;

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefromjpeg($_FILES["datosImagen"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagejpeg($destino, $ruta);

				}
				
				else if($_FILES["datosImagen"]["type"] == "image/png"){

					$ruta = "vistas/img/categorias/".$nombreImagen;

					/*=============================================
					MOFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

					$origen = imagecreatefrompng($_FILES["datosImagen"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagealphablending($destino, FALSE);

					imagesavealpha($destino, TRUE);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

					imagepng($destino, $ruta);

				}

			}


					/*=============================================
					VALIDAR VISIBILIDAD DE LA CATEGORIA 
					=============================================*/


			if(isset($_POST['valorCategoria'])){

				$valor=1;


			}else{

				$valor=0;

			}

				/*=============================================
				 VALIDAR VISIBILIDAD DE LOS PRODUCTOS NUEVOS EN LA CATEGORIA 
				=============================================*/


				if(isset($_POST['nuevoProducto'])){

					$valor1=1;
	
				}else{
	
					$valor1=0;
	
				}


				/*=============================
				CAPTURAR DATOS DEL FORMULARIO
				===============================*/


		  $datos = array(

				"nombreCategoria" => $_POST["nombreC"],
				"descripcionCategoria" => $_POST["descripcionC"],
				"valorCategoria"=>$valor,
			    "productoNuevo"=>$valor1);


			$tabla = "categorias";

			$respuesta=ModeloProductos::mdlCrearNuevaCategoria($tabla,$datos,$ruta);


			if($respuesta == "ok"){


			echo '<script>

				swal("OK!", "Actualizacion realizada Correctamente!", "success");


				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}

				location.reload();		


				</script>';


			}else{


			echo"error";


			}


		}else{


		}


	}


				/*=============================
				ELIMINAR CATEGORIA
				===============================*/


	static public function ctrEliminarCategoria($id){


			$tabla="categorias";

			$idCategoria=$id;

			$consultarFoto=ModeloProductos::mdlConsultarCategoria($tabla,$idCategoria);
			
			unlink($consultarFoto['imagenCategoria']);

			$respuesta=ModeloProductos::mdlEliminarCategoria($tabla,$id);

			return $respuesta;


	}



	

			

}








