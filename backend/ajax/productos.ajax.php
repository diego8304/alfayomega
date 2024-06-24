<?php



require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";


class Galeria{



	public $id;
	public $idProducto;
	public $idCat;
	public $idSub;
	public $nombreProducto;
	public $nombreCategoria;
	public $nomSubcategoria;
	public $descripcionCategoria;
	public $descripcionSubcategoria;
	public $descripProducto;
	public $visibleCategoria;
	public $rutaFotoCategoria;
	public $rutaSubcategoria;
	public $foto;
	public $visibleSubcategoria;
	public $visibleProducto;
	public $fotoProducto;
	public $rutaProducto;


	public function verCategorias(){

		$idUsuario=$this->id;		

		$respuesta=ControladorProducto::ctrMostrarProductos($idUsuario);   	



		/* Convierto en un formato JSON */
		echo  json_encode($respuesta);



	}


	/* Actualizar Categoria */ 

	public function actualizarCategorias(){


		$datos=array("nombreCategoria"=>$this->nombreCategoria,
			"descripcionCategoria"=>$this->descripcionCategoria,
			"visibleCategoria"=>$this->visibleCategoria,
			"rutaFotoCategoria"=>$this->rutaFotoCategoria,
			"idCategoria"=>$this->idCategoria,
			"fotoCategoria"=>$this->foto);

		$respuesta=ControladorProducto::ctrActualizarCategoria($datos);

		echo $respuesta;


	}


	/* Mostrar Subcategorias */

	public function mostrarSubcategorias(){

		$id=$this->id;

		$respuesta=ControladorProducto::ctrMostrarSubCategorias($id);

		/* Convierto en un formato JSON */

		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

		//echo  json_encode($respuesta);


	}


	/* Mostrar elementos de la subcategoria   */


	public function traerSubcategorias(){

		$idCategoria=$this->idCat;
		
		$idSubcategoria=$this->idSub;

		$respuesta=ControladorProducto::ctrMostrarSubcategoria($idCategoria,$idSubcategoria);

		echo json_encode($respuesta);


	}


	/* Actualizar Subcategorias*/


public function actSubcategoria(){


		$datos=array("idCategoria"=>$this->idCat,
					"idSubcategoria"=>$this->idSub,
					"nombreSubcategoria"=>$this->nomSubcategoria,
					"ruta"=>$this->rutaSubcategoria,
					"visible"=>$this->visibleSubcategoria,
					"descripcion"=>$this->descripcionSubcategoria,
					"fotoSubcategoria"=>$this->foto);

		 
		 $respuesta=ControladorProducto::ctrActualizarSubcategorias($datos);


		 echo json_encode($respuesta);




	}


	/* mostrar productos */

	public function mostrarProductos(){

		$datos=array("idCategoria"=>$this->idCat);

		$respuesta=ControladorProducto::ctrMostrarProductosFisicos($datos);

		echo json_encode($respuesta);


	}


	/* traer productos */


	public function traerProductos(){


		$datos=$this->idCat;

		$respuesta=ControladorProducto::ctrTraerProductos($datos);

		echo json_encode ($respuesta);



	}


	/* Actualizar productos */



	public function actualizarProductos(){


	$datos=array("idProductos"=>$this->idProducto,
					"nombreProductos"=>$this->nombreProducto,
					"descriProductos"=>$this->descripProducto,
					"rutaImagen"=>$this->rutaProducto,
					"fotos"=>$this->fotoProducto,
					"valores"=>$this->visibleProducto);


		$respuesta=ControladorProducto::ctrActualizarProductos($datos);
		
		echo json_encode($respuesta);



	}




	/* Eliminar Categoria */

	public function eliminarCategoria(){

		$id=$this->id;

		$respuesta=ControladorProducto::ctrEliminarCategoria($id);


		echo json_encode($respuesta);


	}






}

 /* Ver Categorias */

if(isset($_POST["idUsuario"])){

	$categorias=new Galeria();
	$categorias->id=$_POST["idUsuario"];
	$categorias->verCategorias();

}


/* Actualizar Categorias */

if(isset($_POST["nombre"])){


	$actCategoria=new Galeria();
	$actCategoria->nombreCategoria=$_POST["nombre"];
	$actCategoria->idCategoria=$_POST["idCategoria"];
	$actCategoria->descripcionCategoria=$_POST["descripcion"];
	$actCategoria->rutaFotoCategoria=$_POST["ruta"];
	$actCategoria->visibleCategoria=$_POST["valor"];
	


	if(isset($_FILES["fotoCategoria"])){


		$actCategoria->foto=$_FILES["fotoCategoria"];


	}else{

		$actCategoria->foto=null;

	}


	$actCategoria->actualizarCategorias();


}


	/* Mostrar Subcategorias */

if(isset($_POST["valor"])){

	$subcategoria=new Galeria();
	$subcategoria->id=$_POST["valor"];
	$subcategoria->mostrarSubcategorias();


}

	/* Traer productos subcategorias */

if(isset($_POST["idCat"])){

	$traerSubcategoria=new Galeria();
	$traerSubcategoria->idCat=$_POST["idCat"];
	$traerSubcategoria->idSub=$_POST["idSub"];
	$traerSubcategoria->traerSubcategorias();


}

/* Actualizar Subcategoria */ 

if(isset($_POST["idSubcategoria"])){

	$actSubcategoria= new Galeria();
	$actSubcategoria->idCat=$_POST["idCategoria"];
	$actSubcategoria->idSub=$_POST["idSubcategoria"];
	$actSubcategoria->rutaSubcategoria=$_POST["ruta"];
	$actSubcategoria->visibleSubcategoria=$_POST["valor"];
	$actSubcategoria->descripcionSubcategoria=$_POST["descripcion"];
	$actSubcategoria->nomSubcategoria=$_POST["nombreSubcategoria"];


	if(isset($_FILES["fotoSubcategoria"])){


		$actSubcategoria->foto=$_FILES["fotoSubcategoria"];


	}else{

		$actSubcategoria->foto=null;

	}


	$actSubcategoria->actSubcategoria();

}


/* Mostrar productos */


if(isset($_POST["idProducto"])){

	$moProductos=new Galeria();
	$moProductos->idCat=$_POST["idProducto"];
	$moProductos->mostrarProductos();


}



/* Traer Productos  */

if(isset($_POST["idC"])){

  $verProductos=new Galeria();
  $verProductos->idCat=$_POST["idC"];
  $verProductos->traerProductos();

}


/* Actualizar Productos */


if(isset($_POST["idProductos"])){

 $actProductos= new Galeria();
 $actProductos->idProducto=$_POST["idProductos"];
 $actProductos->nombreProducto=$_POST["nombreProductos"];
 $actProductos->descripProducto=$_POST["descriProductos"];
 $actProductos->visibleProducto=$_POST["valor"];
 $actProductos->rutaProducto=$_POST["rutaImagen"];

 if(isset($_FILES["fotos"])){


		$actProductos->fotoProducto=$_FILES["fotos"];


	}else{

		$actProductos->fotoProducto=null;

	}

$actProductos->actualizarProductos();

}


/* Eliminar Categorias */

if(isset($_POST["idCategoria"])){

 	$eliminarCategoria=new Galeria();
 	$eliminarCategoria->id=$_POST["idCategoria"];
 	$eliminarCategoria->eliminarCategoria();


}


