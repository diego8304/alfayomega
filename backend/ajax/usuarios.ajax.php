<?php

require_once "../controladores/admin.controlador.php";
require_once "../modelos/admin.modelo.php";




class usuariosAjax{

	public $id;


	public function eliminarUsuarios(){

		$idUsuario=$this->id;
		
		$respuesta=Usuarios::ctrEliminarUsuario($idUsuario);

		echo $respuesta; 

	}



}


if(isset($_POST["idUsuario"])){


	$actualizar=new usuariosAjax();
	$actualizar->id=$_POST["idUsuario"];
	$actualizar->eliminarUsuarios();


}











?>