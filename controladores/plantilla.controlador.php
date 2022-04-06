<?php

class ControladorPlantilla{

	
	public function plantilla(){


		include "vistas/plantilla.php";

	

	}


	/*=============================================
		TRAER LOS METADATOS O CABECERAS
	=============================================*/

	static public function ctrTraerCabeceras($ruta){


		$tabla="cabeceras";

		$respuesta=ModeloPlantilla::mdlTraerCabeceras($tabla, $ruta);

		return $respuesta;



	}







}