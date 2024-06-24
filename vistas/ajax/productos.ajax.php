<?php


require_once "../../controladores/producto.controlador.php";
require_once "../../modelos/modelo.controlador.php";




class Productos{

	public $idProducto;
	public $idCategoria;
	public $idSubcategoria;
	public $palabra;


	public function mostrarCarateristicasProducto(){


		$datos=array("idCategoria"=>$this->idCategoria,
					"idProducto"=>$this->idProducto,
				 	"idSubcategoria"=>$this->idSubcategoria);


		$respuesta=ControladorProducto::ctrMostrarDescripcionProductos($datos);


		echo json_encode($respuesta);


	}


	public function buscarProductos(){


		$datos=$this->palabra;

		$resultado=ControladorProducto::ctrTraerBusqueda($datos);

		echo json_encode($resultado);


	}


	public function verProductos(){

		$datos=$this->idProducto;

		$resultado=ControladorProducto::ctrVerProductos($datos);
		
		echo json_encode($resultado);



	}




}


if(isset($_POST["idCategoria"])){

	$prod=new Productos();
	$prod->idCategoria=$_POST["idCategoria"];
	$prod->idSubcategoria=$_POST["idSubcategoria"];
	$prod->idProducto=$_POST["idProductos"];
	$prod->mostrarCarateristicasProducto();

}

/*OPCION DE BUSQUEDA*/ 

if(isset($_POST["palabra"])){

	$busqueda=new Productos();
	$busqueda->palabra=$_POST["palabra"];
	$busqueda->buscarProductos();

}

if(isset($_POST["idProducto"])){


	$producto= new Productos();
	$producto->idProducto=$_POST["idProducto"];
	$producto->verProductos();





}