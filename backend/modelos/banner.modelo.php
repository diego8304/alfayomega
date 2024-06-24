<?php 

require_once "conexion.php";

class ModeloBanner{



    static public function mdlGuardarImagen($tabla,$datos,$rutaDB) {

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET imagenProducto=:imagenProducto,visible=:visible WHERE id=:id");

    $stmt -> bindParam(":imagenProducto",$rutaDB, PDO::PARAM_STR);
    $stmt -> bindParam(":visible",$datos["check"], PDO::PARAM_INT);
    $stmt -> bindParam(":id",$datos["id"], PDO::PARAM_STR);


    if($stmt -> execute()){


        return "ok";

        $stmt -> close();

		$stmt=null;


    }else{


        return "error";

        $stmt -> close();

		$stmt=null;



    }

 







    }


    static public function mdlMostrarBanner($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");
        
		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt=null;

    } 







}

