<?php

class ControladorProducto{


	/* Mostrar Categorias */ 


	static public function ctrMostrarProductos(){

		$tabla="categorias";

		$respuesta=ModeloProductos::mdlMostrarProductos($tabla);

		return $respuesta;

	}


	/* Mostrar Categorias limitadas */ 


	static public function ctrMostrarProductosLimitados(){

		$tabla="categorias";

	
		$respuesta=ModeloProductos::mdlMostrarProductosLimitados($tabla);

		return $respuesta;


	}





	/* Mostrar Subcategorias */ 


	static public function ctrMostrarSubcategorias($item){


		$tabla="subcategoria";

		$respuesta=ModeloProductos::mdlMostrarSubcategorias($tabla,$item);

		return $respuesta;


	}


	/* Mostrar Subcategorias con los Productos Nuevos */ 

	static public function ctrMostrarSubcategoriasNuevosProducto($item){


	 $tabla="subcategoria";

	 $respuesta=ModeloProductos::mdlMostrarSubcategoriasNuevosProductos($tabla,$item);

	 return $respuesta;
	

	}



	/*Mostrar Nombre de Subcategoria */


	
	static public function ctrMostrarNombreSubcategorias($item,$item2){


		$tabla="subcategoria";

		$respuesta=ModeloProductos::mdlMostrarNombreSubcategorias($tabla,$item,$item2);

		return $respuesta;


	}


	/* Mostrar productos Fisicos */


	static public function ctrMostrarProductosFisicos($item,$item2,$total,$totalPaginas){


		$tabla="productos";

		$respuesta=ModeloProductos::mdlMostrarProductosFisicos($tabla,$item,$item2,$total,$totalPaginas);

		return $respuesta;

	

	}



	/* Mostrar productos Nuevos */


	static public function ctrMostrarProductosNuevos($item,$item2,$total,$totalPaginas){


		$tabla="productos";

		$respuesta=ModeloProductos::mdlMostrarProductosNuevos($tabla,$item,$item2,$total,$totalPaginas);

		return $respuesta;

	

	}





	/* Metodo para mostrar la totalidad de los productos */


	static public function ctrMostrarCantidadProductosFisicos($item,$item2){


		$tabla="productos";

		$respuesta=ModeloProductos::mdlMostrarCantidadProductosFisicos($tabla,$item,$item2);

		return $respuesta;


	}





	/* Metodo para mostrar la totalidad o cantidad de los productos nuevos */


	static public function ctrMostrarCantidadProductosNuevos($item,$item2){


		$tabla="productos";

		$respuesta=ModeloProductos::mdlMostrarCantidadProductosNuevos($tabla,$item,$item2);

		return $respuesta;


	}



	/*Mostrar descripcion productos  */


		static public function ctrMostrarDescripcionProductos($datos){

			$tabla="productos";

			$respuesta=ModeloProductos::mdlMostrarDescripcionProductos($tabla,$datos);

			return $respuesta;


		} 	



	/* Mostrar  productos limitados  */ 


		
	static public function ctrMostrarCantidadProductosLimitados($item,$item2){


		$tabla="productos";

		$respuesta=ModeloProductos::mdlMostrarCantidadProductosFisicos($tabla,$item,$item2);

		return $respuesta;


	}



	/* Mostrar  Categorias de los productos nuevos  */ 

	static public function ctrMostrarProductosCategoriasNuevos(){


		$tabla="categorias";

		$respuesta=ModeloProductos::mdlMostrarProductosNuevosCategorias($tabla);

		return $respuesta;

	}



	/* CONSULTAR CATEGORIAS   */ 

	static public function ctrConsultarCategorias($id){


		$tabla="categorias";

		$respuesta=ModeloProductos::mdlConsultarCategorias($tabla,$id);

		return $respuesta;

	}



	// Mostrar Productos de la Galeria

	static public function ctrMostrarProductos2($idproducto){

		$tabla="galeria";
		
		$respuesta=ModeloProductos::mdlMostrarProductos2($tabla,$idproducto);

		return $respuesta;

	}


	// Realizar Busqueda

	static public function ctrTraerBusqueda($valor){

		$tabla="productos";

		$respuesta=ModeloProductos::mdlBuscarProductos($tabla,$valor);

		return $respuesta;

	}


	// Visualizar Producto 


	static public function ctrVerProductos($valor){

		$tabla="productos";

		$respuesta=ModeloProductos::mdlVerProductos($tabla,$valor);

		return $respuesta;


	}


	  /*=============================================
        CONSULTAR SLIDE
     =============================================*/

	static public function ctrConsultarSlide(){

		$tabla="slide";

		$respuesta=ModeloProductos::mdlConsultarSlide($tabla);

		return $respuesta;


	}





	}



