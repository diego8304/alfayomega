<?php


require_once "conexion.php";


class ModeloProductos{


	static public function mdlMostrarProductos($tabla,$id){

		if($id!=null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id=:id");

			$stmt->bindParam(":id", $id, PDO::PARAM_INT);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt=null;


	}



	/* Actualizar las Categorias */

	static public function mdlActualizarCategorias($tabla,$datos,$ruta){

		if($ruta!=null){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreCategoria=:nombreCategoria, imagenCategoria=:imgCategoria,descripcion=:desCategoria,novedadProducto=:novedadProducto,ruta=:ruta,visible=:visible
				WHERE id=:idCategoria");

			$stmt -> bindParam(":nombreCategoria",$datos["nombreCategoria"], PDO::PARAM_STR);
			$stmt -> bindParam(":imgCategoria",$ruta, PDO::PARAM_STR);
			$stmt -> bindParam(":desCategoria",$datos["descCategoria"], PDO::PARAM_STR);
			$stmt -> bindParam(":ruta",$datos["nombreCategoria"], PDO::PARAM_STR);
			$stmt -> bindParam(":novedadProducto",$datos["productoNuevo"], PDO::PARAM_STR);
			$stmt -> bindParam(":visible",$datos["valorCategoria"], PDO::PARAM_INT);
			$stmt -> bindParam(":idCategoria",$datos["idCategoria"], PDO::PARAM_INT);

			if($stmt -> execute()){


				return "ok";


			}else{


				return "error";

			}

		}else{


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreCategoria=:nombreCategoria,descripcion=:descripcionCategoria,novedadProducto=:novedadProducto,ruta=:ruta,visible=:visible
				WHERE id=:idCategoria");

			$stmt -> bindParam(":nombreCategoria",$datos["nombreCategoria"], PDO::PARAM_STR);
			$stmt -> bindParam(":descripcionCategoria",$datos["descCategoria"], PDO::PARAM_STR);
			$stmt -> bindParam(":ruta",$datos["nombreCategoria"], PDO::PARAM_STR);
			$stmt -> bindParam(":novedadProducto",$datos["productoNuevo"], PDO::PARAM_STR);
			$stmt -> bindParam(":visible",$datos["valorCategoria"], PDO::PARAM_INT);
			$stmt -> bindParam(":idCategoria",$datos["idCategoria"], PDO::PARAM_INT);

			if($stmt -> execute()){


				return "ok";


			}else{


				return "error";

			}

		}


		$stmt -> close();

		$stmt=null;

	}


	/*  Mostrar Subcategorias */

	static public function mdlMostrarSubcategorias($tabla,$id){

	if($id!=null){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idCategoria=:id");

		$stmt->bindParam(":id", $id, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll(PDO::FETCH_ASSOC);

		
	} else{

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll(PDO::FETCH_ASSOC);



	}

		$stmt -> close();

		$stmt=null;



	}


	/*Mostrar Productos Subcategoria */

		static public function mdlMostrarProductosSubcategoria($tabla,$idcategoria,$idSubcategoria){


				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idCategoria=:idCategoria AND idSubcategoria=:idSubcategoria ");
				$stmt -> bindParam(":idCategoria",$idcategoria, PDO::PARAM_INT);
				$stmt -> bindParam(":idSubcategoria",$idSubcategoria, PDO::PARAM_INT);
				$stmt -> execute();

				
				return $stmt -> fetch();

				$stmt -> close();

				$stmt=null;

		}


	static public function mdlActualizarSubcategorias($tabla,$datos,$ruta){

		if($ruta!=null){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreSubcategoria=:nombreSubcategoria, imagenSubcategoria=:imagenSubcategoria,descripcion=:descSubcategoria,novedadProducto=:novedadProducto,visible=:visible
				WHERE idCategoria=:idCategoria AND idSubcategoria=:idSubcategoria");

			$stmt -> bindParam(":nombreSubcategoria",$datos["nomSubcategoria"], PDO::PARAM_STR);
			$stmt -> bindParam(":imagenSubcategoria",$ruta, PDO::PARAM_STR);
			$stmt -> bindParam(":descSubcategoria",$datos["descriSubcategoria"], PDO::PARAM_STR);
			$stmt -> bindParam(":novedadProducto",$datos["productoNuevo"], PDO::PARAM_STR);
			$stmt -> bindParam(":visible",$datos["valorSubcategoria"], PDO::PARAM_INT);
			$stmt -> bindParam(":idCategoria",$datos["idCategoria"], PDO::PARAM_INT);
			$stmt -> bindParam(":idSubcategoria",$datos["idSubcategoria"], PDO::PARAM_INT);

			if($stmt -> execute()){


				return "ok";


			}else{


				return "error";

			}

		}else{

			
			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreSubcategoria=:nombreSubcategoria,descripcion=:descSubcategoria,novedadProducto=:novedadProducto,visible=:visible WHERE idCategoria=:idCategoria AND idSubcategoria=:idSubcategoria");

			$stmt -> bindParam(":nombreSubcategoria",$datos["nomSubcategoria"], PDO::PARAM_STR);
			$stmt -> bindParam(":descSubcategoria",$datos["descriSubcategoria"], PDO::PARAM_STR);
			$stmt -> bindParam(":novedadProducto",$datos["productoNuevo"], PDO::PARAM_STR);
			$stmt -> bindParam(":visible",$datos["valorSubcategoria"], PDO::PARAM_INT);
			$stmt -> bindParam(":idCategoria",$datos["idCategoria"], PDO::PARAM_INT);
			$stmt -> bindParam(":idSubcategoria",$datos["idSubcategoria"], PDO::PARAM_INT);
			

			if($stmt -> execute()){


				return "ok";


			}else{


				return "error";

			}

		}


		$stmt -> close();

		$stmt=null;

		
	}




	static public function mdlMostrarProductosFisicos($tabla,$datos){



		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id=:idProducto");

		$stmt -> bindParam(":idProducto",$datos['idCategoria'], PDO::PARAM_INT);
	

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt=null;



	}



	static public function mdlConsultarProductosFisicos($tabla,$idCategoria,$idSubcategoria){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idSubcategoria=:idSubcategoria AND idCategoria=:idCategoria");

		$stmt -> bindParam(":idSubcategoria",$idSubcategoria, PDO::PARAM_INT);

		$stmt -> bindParam(":idCategoria",$idCategoria, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;


	}




	/*Traer productos  */


	static public function mdlTraerProductos($tabla,$datos){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idTipo=:id");

		$stmt -> bindParam(":id",$datos, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;



	}


	/*Actualizar Productos */


	static public function mdlActualizarProductos($tabla,$datos,$ruta,$ruta1,$ruta2,$ruta3){


	if($ruta!=null ){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreProducto=:nombreProducto, imagenProducto=:imagenProductos,imagenProducto1=:imagenProducto1,imagenProducto2=:imagenProducto2,imagenProducto3=:imagenProducto3,descProducto=:descProductos,codigo=:codigo,formato=:formato,uso=:uso,calidad=:calidad,trafico=:trafico,acabado=:acabado,textura=:textura,diseno=:diseno,color=:color,metrosxCaja=:metrosxCaja,unidadesxCaja=:unidadesxCaja,udsxMts=:udsxMts,pesoxCaja=:pesoxCaja,novedadProducto=:novedadProducto,visible=:visible
				WHERE id=:idProductos");

			$stmt -> bindParam(":nombreProducto",$datos["nombreProducto"], PDO::PARAM_STR);
			$stmt -> bindParam(":imagenProductos",$ruta, PDO::PARAM_STR);
			$stmt -> bindParam(":imagenProducto1",$ruta1, PDO::PARAM_STR);
			$stmt -> bindParam(":imagenProducto2",$ruta2, PDO::PARAM_STR);
			$stmt -> bindParam(":imagenProducto3",$ruta3, PDO::PARAM_STR);
			$stmt -> bindParam(":descProductos",$datos["descripcionProducto"], PDO::PARAM_STR);
			$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
			$stmt->bindParam(":formato", $datos["formato"], PDO::PARAM_STR);
			$stmt->bindParam(":uso", $datos["uso"], PDO::PARAM_STR);
			$stmt->bindParam(":calidad", $datos["calidad"], PDO::PARAM_STR);
			$stmt->bindParam(":trafico", $datos["trafico"], PDO::PARAM_STR);
			$stmt->bindParam(":acabado", $datos["acabado"], PDO::PARAM_STR);
			$stmt->bindParam(":textura", $datos["textura"], PDO::PARAM_STR);
			$stmt->bindParam(":diseno", $datos["diseno"], PDO::PARAM_STR);
			$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
			$stmt->bindParam(":metrosxCaja", $datos["mtsxcaja"], PDO::PARAM_STR);
			$stmt->bindParam(":unidadesxCaja", $datos["udsxcaja"], PDO::PARAM_STR);
			$stmt->bindParam(":udsxMts", $datos["udsxMtsCuadrado"], PDO::PARAM_STR);
			$stmt->bindParam(":pesoxCaja", $datos["pesoxCaja"], PDO::PARAM_STR);
			$stmt->bindParam(":novedadProducto", $datos["productoNuevo"], PDO::PARAM_STR);
			$stmt -> bindParam(":visible",$datos["valorProducto"], PDO::PARAM_INT);
			$stmt -> bindParam(":idProductos",$datos["id"], PDO::PARAM_INT);
	

			if($stmt -> execute()){


				return "ok";


			}else{


				return "error";

			}

			

		}else{


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreProducto=:nombreProducto,descProducto=:descProductos,codigo=:codigo,formato=:formato,uso=:uso,calidad=:calidad,trafico=:trafico,acabado=:acabado,textura=:textura,diseno=:diseno,color=:color,metrosxCaja=:metrosxCaja,unidadesxCaja=:unidadesxCaja,udsxMts=:udsxMts,pesoxCaja=:pesoxCaja,novedadProducto=:novedadProducto,visible=:visible
				WHERE id=:idProductos");

	
			$stmt -> bindParam(":nombreProducto",$datos["nombreProducto"], PDO::PARAM_STR);
			$stmt -> bindParam(":descProductos",$datos["descripcionProducto"], PDO::PARAM_STR);
			$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
			$stmt->bindParam(":formato", $datos["formato"], PDO::PARAM_STR);
			$stmt->bindParam(":uso", $datos["uso"], PDO::PARAM_STR);
			$stmt->bindParam(":calidad", $datos["calidad"], PDO::PARAM_STR);
			$stmt->bindParam(":trafico", $datos["trafico"], PDO::PARAM_STR);
			$stmt->bindParam(":acabado", $datos["acabado"], PDO::PARAM_STR);
			$stmt->bindParam(":textura", $datos["textura"], PDO::PARAM_STR);
			$stmt->bindParam(":diseno", $datos["diseno"], PDO::PARAM_STR);
			$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
			$stmt->bindParam(":metrosxCaja", $datos["mtsxcaja"], PDO::PARAM_STR);
			$stmt->bindParam(":unidadesxCaja", $datos["udsxcaja"], PDO::PARAM_STR);
			$stmt->bindParam(":udsxMts", $datos["udsxMtsCuadrado"], PDO::PARAM_STR);
			$stmt->bindParam(":pesoxCaja", $datos["pesoxCaja"], PDO::PARAM_STR);
			$stmt->bindParam(":novedadProducto", $datos["productoNuevo"], PDO::PARAM_STR);
			$stmt->bindParam(":visible", $datos["valorProducto"], PDO::PARAM_STR);
			$stmt -> bindParam(":idProductos",$datos["id"], PDO::PARAM_INT);


			if($stmt -> execute()){


				return "ok";


			}else{


				return "error";

			}

		}


		$stmt -> close();

		$stmt=null;


	}



		/* Actualizar Imagen  Principal */


	static public function mdlActualizarImagenPrincipal($tabla,$datos,$rutaPrincipal){

				

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET imagenProducto=:imagenProducto
				WHERE id=:idProductos");


			$stmt -> bindParam(":imagenProducto",$rutaPrincipal, PDO::PARAM_STR);
			$stmt -> bindParam(":idProductos",$datos, PDO::PARAM_INT);


			if($stmt -> execute()){


				return "ok";


			}else{


				return "error";

			}

		}




	/* Actualizar Imagen 1 */


	static public function mdlActualizarImagen1($tabla,$datos,$ruta1){

		

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET imagenProducto1=:imagenProducto1
			WHERE id=:idProductos");

	
		$stmt -> bindParam(":imagenProducto1",$ruta1, PDO::PARAM_STR);
		$stmt -> bindParam(":idProductos",$datos, PDO::PARAM_INT);


		if($stmt -> execute()){


			return "ok";


		}else{


			return "error";

		}

	}



	/* Actualizar Imagen 2 */


	static public function mdlActualizarImagen2($tabla,$datos,$ruta2){

		

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET imagenProducto2=:imagenProducto2
			WHERE id=:idProductos");

	
		$stmt -> bindParam(":imagenProducto2",$ruta2, PDO::PARAM_STR);
		$stmt -> bindParam(":idProductos",$datos, PDO::PARAM_INT);


		if($stmt -> execute()){


			return "ok";


		}else{


			return "error";

		}



}

	/* Actualizar Imagen 3*/

	static public function mdlActualizarImagen3($tabla,$datos,$ruta3){

		

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET imagenProducto3=:imagenProducto3
				WHERE id=:idProductos");

		
			$stmt -> bindParam(":imagenProducto3",$ruta3, PDO::PARAM_STR);
			$stmt -> bindParam(":idProductos",$datos, PDO::PARAM_INT);
	

			if($stmt -> execute()){


				return "ok";


			}else{


				return "error";

			}

	

}




	/* Crear Productos */

	static public function mdlCrearNuevoProducto($tabla,$datos,$ruta,$ruta1,$ruta2,$ruta3){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( idTipo, idCategoria, idSubcategoria, producto, nombreProducto, nombreSubcategoria, imagenProducto,imagenProducto1,imagenProducto2,imagenProducto3,descProducto,codigo,formato,uso,calidad,trafico,acabado,textura,diseno,color,metrosxCaja,unidadesxCaja,udsxMts,pesoxCaja,novedadProducto,visible) VALUES(:idTipo,:idCategoria,:idSubcategoria,:producto,:nombreProducto,:nombreSubcategoria,:imagenProducto,:imagenProducto1,:imagenProducto2,:imagenProducto3,:descProducto,:codigo,:formato,:uso,:calidad,:trafico,:acabado,:textura,:diseno,:color,:metrosxCaja,:unidadesxCaja,:udsxMts,:pesoxCaja,:novedadProducto,:visible)");

			$stmt->bindParam(":idTipo", $datos["idTipo"], PDO::PARAM_INT);
			$stmt->bindParam(":idCategoria", $datos["idCategoria"], PDO::PARAM_INT);
			$stmt->bindParam(":idSubcategoria", $datos["idSubcategoria"], PDO::PARAM_INT);
			$stmt->bindParam(":producto", $datos["nombreProducto"], PDO::PARAM_STR);
			$stmt->bindParam(":nombreProducto", $datos["nombreProducto"], PDO::PARAM_STR);
			$stmt->bindParam(":nombreSubcategoria", $datos["nombreProducto"], PDO::PARAM_STR);
			$stmt->bindParam(":imagenProducto", $ruta, PDO::PARAM_STR);
			$stmt->bindParam(":imagenProducto1", $ruta1, PDO::PARAM_STR);
			$stmt->bindParam(":imagenProducto2", $ruta2, PDO::PARAM_STR);
			$stmt->bindParam(":imagenProducto3", $ruta3, PDO::PARAM_STR);
			$stmt->bindParam(":descProducto", $datos["descripcionProducto"], PDO::PARAM_STR);
			$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
			$stmt->bindParam(":formato", $datos["formato"], PDO::PARAM_STR);
			$stmt->bindParam(":uso", $datos["uso"], PDO::PARAM_STR);
			$stmt->bindParam(":calidad", $datos["calidad"], PDO::PARAM_STR);
			$stmt->bindParam(":trafico", $datos["trafico"], PDO::PARAM_STR);
			$stmt->bindParam(":acabado", $datos["acabado"], PDO::PARAM_STR);
			$stmt->bindParam(":textura", $datos["textura"], PDO::PARAM_STR);
			$stmt->bindParam(":diseno", $datos["diseno"], PDO::PARAM_STR);
			$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
			$stmt->bindParam(":metrosxCaja", $datos["mtsxcaja"], PDO::PARAM_STR);
			$stmt->bindParam(":unidadesxCaja", $datos["udsxcaja"], PDO::PARAM_STR);
			$stmt->bindParam(":udsxMts", $datos["udsxMtsCuadrado"], PDO::PARAM_STR);
			$stmt->bindParam(":pesoxCaja", $datos["pesoxCaja"], PDO::PARAM_STR);
			$stmt->bindParam(":novedadProducto", $datos["productoNuevo"], PDO::PARAM_STR);
			$stmt->bindParam(":visible", $datos["valorProducto"], PDO::PARAM_STR);


			if($stmt -> execute()){


				return "ok";


			}else{


				return "error";

			}


		$stmt -> close();

		$stmt=null;



		}



		/*=============================
	    	ELIMINAR PRODUCTO
		===============================*/

	static public function mdlEliminarProducto($id){


			$stmt = Conexion::conectar()->prepare("DELETE FROM productos WHERE id=:id");
			$stmt->bindParam(":id",$id, PDO::PARAM_INT);

		
		if($stmt -> execute()){

				return "ok";

		} else {

				return "error";

		}

		$stmt -> close();
		$stmt=null;

	}


		/*=============================
	      CREAR SUBCATEGORIA
		===============================*/


	static public function mdlCrearNuevaSubcategoria($tabla,$datos,$ruta){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( idCategoria,idSubcategoria,nombreSubcategoria,imagenSubcategoria,descripcion,novedadProducto,visible) VALUES(:idCategoria,:numeroAleatorio,:nombreSubcategoria,:imagenSubcategoria,:descripcionSubcategoria,:novedadProducto,:visible)");

			$stmt->bindParam(":idCategoria", $datos["idCategoria"], PDO::PARAM_INT);
			$stmt->bindParam(":numeroAleatorio", $datos["numeroAleatorio"], PDO::PARAM_INT);
			$stmt->bindParam(":nombreSubcategoria", $datos["nombreSubcategoria"], PDO::PARAM_STR);
			$stmt->bindParam(":imagenSubcategoria", $ruta, PDO::PARAM_STR);
			$stmt->bindParam(":descripcionSubcategoria", $datos["descripcionSubcategoria"], PDO::PARAM_STR);
			$stmt->bindParam(":novedadProducto", $datos["productoNuevo"], PDO::PARAM_STR);
			$stmt->bindParam(":visible", $datos["valorProducto"], PDO::PARAM_STR);


			if($stmt -> execute()){


				return "ok";


			}else{

				return "error";

			}


		$stmt -> close();
		$stmt=null;



		}


		/*=============================
	    	ELIMINAR SUBCATEGORIA
		===============================*/

		static public function mdlEliminarSubcategoria($id,$idCategoria,$idSubcategoria){


		$stmt = Conexion::conectar()->prepare("DELETE FROM subcategoria WHERE id=:id AND idCategoria=:idCategoria AND idSubcategoria=:idSubcategoria");

			$stmt->bindParam(":id",$id, PDO::PARAM_INT);
			$stmt->bindParam(":idCategoria",$idCategoria, PDO::PARAM_INT);
			$stmt->bindParam(":idSubcategoria",$idSubcategoria, PDO::PARAM_INT);

		
			if($stmt -> execute()){


					return "ok";


			} else {


					return "error";

			}

		$stmt -> close();
		$stmt=null;

		}



	
		/*=============================
	    	CREAR CATEGORIA
		===============================*/


	static public function mdlCrearNuevaCategoria($tabla,$datos,$ruta){


			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( nombreCategoria,imagenCategoria,descripcion,novedadProducto,ruta,visible) VALUES(:nombreCategoria,:imagenCategoria,:descripcionCategoria,:novedadProducto,:ruta,:visible)");
			$stmt->bindParam(":nombreCategoria", $datos["nombreCategoria"], PDO::PARAM_STR);
			$stmt->bindParam(":imagenCategoria", $ruta, PDO::PARAM_STR);
			$stmt->bindParam(":descripcionCategoria", $datos["descripcionCategoria"], PDO::PARAM_STR);
			$stmt->bindParam(":novedadProducto",$datos['productoNuevo'], PDO::PARAM_STR);
			$stmt->bindParam(":ruta", $ruta, PDO::PARAM_STR);
			$stmt->bindParam(":visible", $datos["valorCategoria"], PDO::PARAM_STR);


			if($stmt -> execute()){


				return "ok";


			}else{


				return "error";

			}


		$stmt -> close();
		$stmt=null;



	}


		/*=============================
	    	BORRAR CATEGORIA
		===============================*/


	static public function mdlEliminarCategoria($tabla,$id){

	
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id ");
		$stmt->bindParam(":id",$id, PDO::PARAM_INT);		


			if($stmt -> execute()){


					return "ok";


			} else {


					return "error";

			}


		$stmt -> close();
		$stmt=null;

		
	}


		/*=============================
	    	CONSULTAR CATEGORIA
		===============================*/


	static public function mdlConsultarCategoria($tabla,$id){

		
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id=:id ");
		$stmt->bindParam(":id",$id, PDO::PARAM_INT);		
		$stmt -> execute();


		return $stmt -> fetch();
		
		$stmt -> close();
		$stmt=null;



	}






}











