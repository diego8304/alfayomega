<?php



class controladorBanner {



    /*=============================================
	GUARDAR IMAGEN BANNER
	=============================================*/

    public function ctrGuardarImagenBanner(){

        $tabla="slide";
		$ruta=null;
        $id=null;

                /*=============================================
				GUARDAR LA IMAGEN EN EL DIRECTORIO SLIDE 1
				=============================================*/

     if(isset($_FILES["datosImagenBanner1"]["tmp_name"]) && !empty($_FILES["datosImagenBanner1"]["tmp_name"])){

				
                list($ancho, $alto) = getimagesize($_FILES["datosImagenBanner1"]["tmp_name"]);

                $nuevoAncho = 1200;
                $nuevoAlto = 550;		

				if($_FILES["datosImagenBanner1"]["type"] == "image/jpeg"){


					/*=============================================
					MODIFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

                    $imagen=$_FILES["datosImagenBanner1"]["name"];

                    $ruta="vistas/img/slide/".$imagen;

					$origen = imagecreatefromjpeg($_FILES["datosImagenBanner1"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                    imagejpeg($destino, $ruta);


                }else if($_FILES["datosImagenBanner1"]["type"] == "image/png"){
                    
                    /*=============================================
					MODIFICAMOS TAMAÑO DE LA FOTO
					=============================================*/

                    $imagen=$_FILES["datosImagenBanner1"]["name"];

                    $ruta="vistas/img/slide/".$imagen;

					$origen = imagecreatefrompng($_FILES["datosImagenBanner1"]["tmp_name"]);

					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                    imagepng($destino, $ruta);


                }
  
                    if(isset($_POST['valorBanner1'])){

                        $valor=1;
        
        
                    }else{
        
                        $valor=0;
        
                    }
					
          
                    $id=$_POST["Banner1"];
                
                    $datos=array("check"=>$valor,"id"=>$id);

                    
                    $respuesta=ModeloBanner::mdlGuardarImagen($tabla,$datos,$ruta);


                    if($respuesta=="ok"){


                        echo '<script>

				        swal("OK!", "Actualizacion realizada Correctamente!", "success");


                            if ( window.history.replaceState ) {
                                window.history.replaceState( null, null, window.location.href );
                            }

                            location.reload();		


				        </script>';


                    }else{


                        echo "ok";


                    

                }



    }



                /*=============================================
				GUARDAR LA IMAGEN EN EL DIRECTORIO SLIDE 2
				=============================================*/

         else if(isset($_FILES["datosImagenBanner2"]["tmp_name"]) && !empty($_FILES["datosImagenBanner2"]["tmp_name"])){

				
                    list($ancho, $alto) = getimagesize($_FILES["datosImagenBanner2"]["tmp_name"]);
    
                    
                    $nuevoAncho = 1200;
                    $nuevoAlto = 550;
    
                    if($_FILES["datosImagenBanner2"]["type"] == "image/jpeg"){
    
    
                        /*=============================================
                        MODIFICAMOS TAMAÑO DE LA FOTO
                        =============================================*/
    
                        $imagen=$_FILES["datosImagenBanner2"]["name"];
    
                        $ruta="vistas/img/slide/".$imagen;
    
                        $origen = imagecreatefromjpeg($_FILES["datosImagenBanner2"]["tmp_name"]);
    
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
    
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
    
                        imagejpeg($destino, $ruta);
    
    
                    } else if($_FILES["datosImagenBanner2"]["type"] == "image/png"){
                        
                        /*=============================================
                        MODIFICAMOS TAMAÑO DE LA FOTO
                        =============================================*/
    
                        $imagen=$_FILES["datosImagenBanner2"]["name"];
    
                        $ruta="vistas/img/slide/".$imagen;
    
                        $origen = imagecreatefrompng($_FILES["datosImagenBanner2"]["tmp_name"]);
    
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
    
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
    
                        imagepng($destino, $ruta);
    
    
                    }
      
                        if(isset($_POST['valorBanner2'])){
    
                            $valor=1;
            
            
                        }else{
            
                            $valor=0;
            
                        }
                        
              
                        $id=$_POST["Banner2"];
                    
                        $datos=array("check"=>$valor,"id"=>$id);
    
                        
                        $respuesta=ModeloBanner::mdlGuardarImagen($tabla,$datos,$ruta);
    
    
                        if($respuesta=="ok"){
    
    
                            echo '<script>
    
                            swal("OK!", "Actualizacion realizada Correctamente!", "success");
    
    
                                if ( window.history.replaceState ) {
                                    window.history.replaceState( null, null, window.location.href );
                                }
    
                                location.reload();		
    
    
                            </script>';
    
    
                        }else{
    
    
                            echo "ok";
    
    
                        
    
                    }
    
    
    
        }


                /*=============================================
				GUARDAR LA IMAGEN EN EL DIRECTORIO SLIDE 3
				=============================================*/

                else if(isset($_FILES["datosImagenBanner3"]["tmp_name"]) && !empty($_FILES["datosImagenBanner3"]["tmp_name"])){

				
                    list($ancho, $alto) = getimagesize($_FILES["datosImagenBanner3"]["tmp_name"]);
    
                  
                    $nuevoAncho = 1200;
                    $nuevoAlto = 550;		
    
                    if($_FILES["datosImagenBanner3"]["type"] == "image/jpeg"){
    
    
                        /*=============================================
                        MODIFICAMOS TAMAÑO DE LA FOTO
                        =============================================*/
    
                        $imagen=$_FILES["datosImagenBanner3"]["name"];
    
                        $ruta="vistas/img/slide/".$imagen;
    
                        $origen = imagecreatefromjpeg($_FILES["datosImagenBanner3"]["tmp_name"]);
    
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
    
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
    
                        imagejpeg($destino, $ruta);
    
    
                    } if($_FILES["datosImagenBanner3"]["type"] == "image/png"){
                        
                        /*=============================================
                        MODIFICAMOS TAMAÑO DE LA FOTO
                        =============================================*/
    
                        $imagen=$_FILES["datosImagenBanner3"]["name"];
    
                        $ruta="vistas/img/slide/".$imagen;
    
                        $origen = imagecreatefrompng($_FILES["datosImagenBanner3"]["tmp_name"]);
    
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
    
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
    
                        imagepng($destino, $ruta);
    
    
                    }
      
                        if(isset($_POST['valorBanner3'])){
    
                            $valor=1;
            
            
                        }else{
            
                            $valor=0;
            
                        }
                        
              
                        $id=$_POST["Banner3"];
                    
                        $datos=array("check"=>$valor,"id"=>$id);
    
                        
                        $respuesta=ModeloBanner::mdlGuardarImagen($tabla,$datos,$ruta);
    
    
                        if($respuesta=="ok"){
    
    
                            echo '<script>
    
                            swal("OK!", "Actualizacion realizada Correctamente!", "success");
    
    
                                if ( window.history.replaceState ) {
                                    window.history.replaceState( null, null, window.location.href );
                                }
    
                                location.reload();		
    
    
                            </script>';
    
    
                        }else{
    
    
                            echo "ok";
    
    
                        
    
                    }
    
    
    
        }


    }


    static public function ctrConsultarBanner(){

        
        $tabla="slide";

        $consulta=ModeloBanner::mdlMostrarBanner($tabla);

        return $consulta;


    }


}

















