<?php

require_once "conexion.php";


class ModeloProductos{


		/*=============================================
		METODO PARA MOSTRAR LAS CATEGORIAS 
		=============================================*/

	static public function mdlMostrarProductos($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE visible=1");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;


	}

	/* =============================================
		METODO PARA MOSTRAR LAS CATEGORIAS LIMITADAS   
	============================================= */


	static public function mdlMostrarProductosLimitados($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE visible=1  AND novedadProducto=1 LIMIT 3");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;



	}


	/* =============================================
		METODO PARA MOSTRAR LAS CATEGORIAS LIMITADAS   
	============================================= */


	static public function mdlMostrarProductosNuevosCategorias ($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE visible=1  AND novedadProducto=1");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;



	}


	/* =============================================
		METODO PARA CONSULTAR CATEGORIAS 
	============================================= */


	static public function mdlConsultarCategorias($tabla,$id){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id=:id");

		$stmt -> bindParam(":id",$id, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt=null;



	}






	/*=============================================
		METODO PARA MOSTRAR SUBCATEGORIAS   
	=============================================*/

	static public function mdlMostrarSubcategorias($tabla,$id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idCategoria=:id AND visible=1");
		
		$stmt -> bindParam(":id",$id, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;


	}




	/*=============================================
		METODO PARA MOSTRAR SUBCATEGORIAS   
	=============================================*/

	static public function mdlMostrarSubcategoriasNuevosProductos($tabla,$id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idCategoria=:id AND visible=1 AND novedadProducto=1");
		
		$stmt -> bindParam(":id",$id, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;


	}







  	/*=============================================
		METODO PARA MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarProductosFisicos($tabla,$item,$item2,$total,$totalPaginas){


		$stmt = Conexion::conectar()->prepare("SELECT  * FROM $tabla WHERE idSubCategoria=:id AND idCategoria=:idCategoria AND visible=1 LIMIT $total,$totalPaginas");
		
		$stmt -> bindParam(":id",$item, PDO::PARAM_INT);
		$stmt -> bindParam(":idCategoria",$item2, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;


	}


	/*=============================================
		METODO PARA MOSTRAR LOS PRODUCTOS NUEVOS
	=============================================*/

	static public function mdlMostrarProductosNuevos($tabla,$item,$item2,$total,$totalPaginas){


		$stmt = Conexion::conectar()->prepare("SELECT  * FROM $tabla WHERE idSubCategoria=:id AND idCategoria=:idCategoria AND visible=1 AND novedadProducto=1 LIMIT $total,$totalPaginas");
		
		$stmt -> bindParam(":id",$item, PDO::PARAM_INT);
		$stmt -> bindParam(":idCategoria",$item2, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;


	}





  	/*=============================================
		METODO PARA MOSTRAR PRODUCTOS FISICOS
	=============================================*/

	static public function mdlMostrarCantidadProductosFisicos($tabla,$item,$item2){


		$stmt = Conexion::conectar()->prepare("SELECT count(*) AS CANTIDAD FROM $tabla WHERE idSubCategoria=:id AND idCategoria=:idCategoria");
		
		$stmt -> bindParam(":id",$item, PDO::PARAM_INT);
		$stmt -> bindParam(":idCategoria",$item2, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt=null;



	}



	/*=============================================
		METODO PARA MOSTRAR  CANTIDAD PRODUCTOS FISICOS NUEVOS
	=============================================*/

	static public function mdlMostrarCantidadProductosNuevos($tabla,$item,$item2){


		$stmt = Conexion::conectar()->prepare("SELECT count(*) AS CANTIDAD FROM $tabla WHERE idSubCategoria=:id AND idCategoria=:idCategoria AND novedadProducto=1");
		
		$stmt -> bindParam(":id",$item, PDO::PARAM_INT);
		$stmt -> bindParam(":idCategoria",$item2, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt=null;



	}



	
  	/*=============================================
		TRAER LA DESCRIPCION DE LOS PRODUCTOS
	=============================================*/


	static public function mdlMostrarDescripcionProductos($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idSubCategoria=:idSubcategoria AND idCategoria=:idCategoria");
		//$stmt -> bindParam(":id",$datos["idProducto"], PDO::PARAM_INT);
		$stmt -> bindParam(":idCategoria",$datos["idCategoria"], PDO::PARAM_INT);
		$stmt -> bindParam(":idSubcategoria",$datos["idSubcategoria"], PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt=null;


	}

	/*=============================================
       CONSULTAR PRODUCTOS DE LA GALERIA
     =============================================*/

	static public function mdlMostrarProductos2($tabla,$idProducto){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idProducto=:idproducto");	
		$stmt -> bindParam(":idproducto",$idProducto, PDO::PARAM_INT);

		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt=null;



	}

	/*=============================================
       REALIZAR BUSQUEDA
     =============================================*/

	static public function mdlBuscarProductos($tabla,$valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombreProducto LIKE '%$valor%'");	
		$stmt -> bindParam(":valores",$valor, PDO::PARAM_STR);

		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt=null;




	}


	/*=============================================
       VER PRODUCTOS DE LA GALERIA CON DESCRIPCION
     =============================================*/

	
	static public function mdlVerProductos($tabla,$valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id =:idProducto");	
		$stmt -> bindParam(":idProducto",$valor, PDO::PARAM_INT);
		$stmt -> execute();
		return $stmt -> fetch();
		$stmt -> close();
		$stmt=null;


	}




	/*=============================================
       MOSTRAR SUBCATEGORIA
     =============================================*/


	static public function mdlMostrarNombreSubcategorias($tabla,$item,$item2){

		$stmt = Conexion::conectar()->prepare("SELECT nombreSubcategoria FROM $tabla WHERE idCategoria=:idCategoria AND idSubcategoria=:idSubcategoria");
		
		$stmt -> bindParam(":idCategoria",$item2, PDO::PARAM_INT);
		$stmt -> bindParam(":idSubcategoria",$item, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt=null;






	}


	/*=============================================
        CONSULTAR SLIDE
     =============================================*/


	static public function mdlConsultarSlide($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT imagenProducto FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;


	}




}




