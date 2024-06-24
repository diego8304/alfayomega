<?php



class ModeloPlantilla{





    	/*=============================================
		    TRAER LOS METADATOS O CABECERAS
	    =============================================*/

        static public function mdlTraerCabeceras($tabla, $ruta){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ruta=:ruta");	
		    
            $stmt -> bindParam(":ruta",$ruta, PDO::PARAM_STR);

		    $stmt -> execute();
		
            return $stmt -> fetch();
		
            $stmt -> close();
		
            $stmt=null;


        }










}


?>