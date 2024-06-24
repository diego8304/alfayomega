<?php

$url=Ruta::ctrRuta();

$urlServidor=Ruta::ctrRutaServidor();

$respuesta=ControladorProducto::ctrMostrarProductosLimitados();

?>

<section class="contenedor seccion">
    <hr>
    <h2 class="fw-300 centrar-texto">Novedades</h2>
    <hr>
    <div class="contenedor-anunciosNovedades">
    <?php

    foreach ($respuesta as $key => $value) {
        

        echo'<div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <img class="imgCategoria" src="'.$urlServidor.$value["imagenCategoria"].'"  alt="'.$value["nombreCategoria"].'">
            <div class="titCategoria">'.$value["nombreCategoria"].'</div>
            </div>
            <div class="flip-card-back">
            <h4 class="tituloC">'.$value["nombreCategoria"].'</h4>
            <p class="desCategoria">'.$value["descripcion"].'</p>
            
            <button class="buttonC"><span><a href="nuevoSubcategorias/'.$value['id'].'" class="linkCategoria">Ver Productos</a></span></button>

            </div>
           
        </div>
        </div>';



    
             

    }

    ?>
    

</div>
    
        <div class="ver-todas">
            <a href="categoriasNuevos" class="boton boton-verde">Ver mas</a>
        </div>


</section>
         

        
    