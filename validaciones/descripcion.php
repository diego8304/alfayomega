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
       
            
        <div class="imagen">
        
       
        <div class="visor">
        
                 <figure class="lupa">
        
                        <img src=""> 
        
                  </figure> 
        </div>

        
        <!-- partial:index.partial.html -->
        <img id="galeria" class="zoom" value="1" src="'.$urlServidor.$resultado['imagenProducto'].'" alt="">
        <nav>';
        
        echo '<ul>
       
                <li><a  class="cargarFotografia" foto="foto1" ruta="'.$resultado['imagenProducto'].'" ><img src="'.$urlServidor.''.$resultado['imagenProducto'].'" alt=""></a></li>
                <li><a  class="cargarFotografia" foto="foto2" ruta="'.$resultado['imagenProducto1'].'" ><img src="'.$urlServidor.''.$resultado['imagenProducto1'].'" alt=""></a></li>
                <li><a  class="cargarFotografia" foto="foto3" ruta="'.$resultado['imagenProducto2'].'" ><img src="'.$urlServidor.''.$resultado['imagenProducto2'].'" alt=""></a></li>
                <li><a  class="cargarFotografia" foto="foto4" ruta="'.$resultado['imagenProducto3'].'" ><img src="'.$urlServidor.''.$resultado['imagenProducto3'].'" alt=""></a></li> 
            </ul>
        </nav>

        </div>';
     

       
        echo'<div class="texto-entrada">
            <a href="entrada.html">
                <h4>'.$resultado['nombreProducto'].'</h4>
            </a>';


            echo'<p>Nombre: <span> '.$resultado['nombreProducto'].'</span> </p>';
            
            
            if ($resultado['descProducto']!=null){
                
                echo'<p>Descripcion: <span>'.$resultado['descProducto'].' </span></p>';
    
                }

            if($resultado['codigo']!=null){

            echo'<p>Codigo: <span>'.$resultado['codigo'].' </span></p>';
            
            }

            if($resultado['formato']!=null){

            echo'<p>Formato: <span>'.$resultado['formato'].' </span></p>';

            }

            if($resultado['uso']!=null){

           echo'<p>Uso: <span>'.$resultado['uso'].' </span></p>';

            }

            if($resultado['calidad']!=null){

            echo'<p>Calidad: <span>'.$resultado['calidad'].' </span></p>';

            }

            if($resultado['trafico']!=null){

            echo'<p>Trafico: <span>'.$resultado['trafico'].' </span></p>';
            
            }

            if($resultado['acabado']!=null){

            echo'<p>Acabado: <span>'.$resultado['acabado'].' </span></p>';

            }
            
            if($resultado['textura']!=null){

            echo'<p>Textura: <span>'.$resultado['textura'].' </span></p>';
            
            }

            if($resultado['diseno']!=null){
                
                echo'<p>Diseño: <span>'.$resultado['diseno'].' </span></p>';
                
            }
            
            if($resultado['color']!=null){
            
                 echo'<p>Color: <span>'.$resultado['color'].' </span></p>';
            
            }

            if($resultado['metrosxCaja']!=null){

                echo'<p> m² x Caja: <span>'.$resultado['metrosxCaja'].' </span></p>';
            
            }

            if($resultado['unidadesxCaja']!=null){
                
                echo '<p> Uds x Caja: <span>'.$resultado['unidadesxCaja'].' </span></p>';
            }
            if($resultado['udsxMts']!=null){
                
                echo'<p> Uds x Metro: <span>'.$resultado['udsxMts'].' </span></p>';
            }
            
            if($resultado['pesoxCaja']!=null){
                
                echo'<p> Peso x Caja: <span>'.$resultado['pesoxCaja'].' </span></p>';
            
            }

       echo'</div>
        
        </article>';
            
    ?>

  

  
    </main>

    