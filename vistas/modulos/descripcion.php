<?php

$id=$rutas[1];

$url=Ruta::ctrRuta();

$urlServidor=Ruta::ctrRutaServidor();

$resultado=ControladorProducto::ctrVerProductos($id);



?>

<main class="contenedor seccion contenido-centrado">



        <h2 class="fw-300 centrar-texto"></h2>

    <?php  

        echo '<article class="entrada-blog">
      
        
        <br><br><br>
        
        <div class="imagen">
        
        <br><br><br>
       
        <div class="visor">
        
                 <figure class="lupa">
        
                        <img src=""> 
        
                  </figure> 
        </div>

        
        <!-- partial:index.partial.html -->
        <img id="galeria" class="zoom" value="1" src="'.$urlServidor.$resultado['imagenProducto'].'" alt="">
        <nav>';
        
        echo'<hr>';

        echo '<ul>
       
                <li><a  class="cargarFotografia" foto="foto1" ruta="'.$resultado['imagenProducto'].'" ><img src="'.$urlServidor.''.$resultado['imagenProducto'].'" alt=""></a></li>
                <li><a  class="cargarFotografia" foto="foto2" ruta="'.$resultado['imagenProducto1'].'" ><img src="'.$urlServidor.''.$resultado['imagenProducto1'].'" alt=""></a></li>
                <li><a  class="cargarFotografia" foto="foto3" ruta="'.$resultado['imagenProducto2'].'" ><img src="'.$urlServidor.''.$resultado['imagenProducto2'].'" alt=""></a></li>
                <li><a  class="cargarFotografia" foto="foto4" ruta="'.$resultado['imagenProducto3'].'" ><img src="'.$urlServidor.''.$resultado['imagenProducto3'].'" alt=""></a></li> 
            </ul>
        </nav>

        </div>';
     
     


        echo'<div class="texto-entrada">';

        echo'<div class="col-xs-6">
					
        <h6>
            
            <a class="dropdown-toggle pull-right text-muted" data-toggle="dropdown" href="">
                
                <i class="fa fa-plus"></i> Compartir
 
            </a>
 
            <ul class="dropdown-menu pull-right compartirRedes">
 
                <li>
                    <p class="btnFacebook">
                        <i class="fa fa-facebook"></i>
                        Facebook
                    </p>
                </li>
            </ul>
 
        </h6>
 
    </div>
 
    <div class="clearfix"></div>


            <br>

            <a href="#">
                <h4>'.$resultado['nombreProducto'].'</h4>
            </a>';

          
            echo '<br>';

       

            echo'<p><b>Nombre:</b> <span> '.$resultado['nombreProducto'].'</span> </p>';
            
            
            if ($resultado['descProducto']!=null){
                
                echo'<p><b>Descripcion:</b> <span>'.$resultado['descProducto'].' </span></p>';
    
                }

            if($resultado['codigo']!=null){

            echo'<p><b>Codigo:</b> <span>'.$resultado['codigo'].' </span></p>';
            
            }

            if($resultado['formato']!=null){

            echo'<p><b>Formato:</b><span>'.$resultado['formato'].' </span></p>';

            }

            if($resultado['uso']!=null){

           echo'<p><b>Uso:</b><span>'.$resultado['uso'].' </span></p>';

            }

            if($resultado['calidad']!=null){

            echo'<p><b>Calidad:</b> <span>'.$resultado['calidad'].' </span></p>';

            }

            if($resultado['trafico']!=null){

            echo'<p><b>Trafico:</b> <span>'.$resultado['trafico'].' </span></p>';
            
            }

            if($resultado['acabado']!=null){

            echo'<p><b>Acabado:</b><span>'.$resultado['acabado'].' </span></p>';

            }
            
            if($resultado['textura']!=null){

            echo'<p><b>Textura:</b><span>'.$resultado['textura'].' </span></p>';
            
            }

            if($resultado['diseno']!=null){
                
                echo'<p><b>Diseño:</b><span>'.$resultado['diseno'].' </span></p>';
                
            }
            
            if($resultado['color']!=null){
            
                 echo'<p><b>Color:</b> <span>'.$resultado['color'].' </span></p>';
            
            }

            if($resultado['metrosxCaja']!=null){

                echo'<p><b> m² x Caja:</b> <span>'.$resultado['metrosxCaja'].' </span></p>';
            
            }

            if($resultado['unidadesxCaja']!=null){
                
                echo '<p><b> Uds x Caja:</b> <span>'.$resultado['unidadesxCaja'].' </span></p>';
            }
            if($resultado['udsxMts']!=null){
                
                echo'<p><b>Uds x Metro:</b><span>'.$resultado['udsxMts'].' </span></p>';
            }
            
            if($resultado['pesoxCaja']!=null){
                
                echo'<p><b> Peso x Caja:</b> <span>'.$resultado['pesoxCaja'].' </span></p>';
            
            }


              
       echo '<div class="formatoAviso"> <a  href="#emergenteModal"><p>Politica de Imagenes</p></a> </diV>
       <div id="emergenteModal" class="modal1">
         <div class="modal-contenido1">
           <a href="#">X</a>
           <h2>Importante</h2>
           <p>Las imágenes de producto y ambiente son ilustrativas, los colores observados son dependientes de la pantalla que usted use y pueden diferir en el producto real. Los elementos adicionales al producto, que se presentan en las imágenes, son decorativos. Para mayor información sobre los productos comuníquese con nosotros.</p>
       </div>
       </div>';
            

     


    
   



       echo'</div>';
  
        echo '</article>';
  
        
       


    ?>


<?php
            
echo'<script type="application/ld+json">

    {
        
        "@context": "http://schema.org/",
        "@type": "Product",
        "name": "'.$resultado['nombreProducto'].'",
        "image": [';

            echo $urlServidor.''.$resultado['imagenProducto'];

        echo '],
        "description": "'.$resultado["descProducto"].'"
    }

</script>';


?>
  
    </main>

    