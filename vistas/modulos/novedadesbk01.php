<?php

$url=Ruta::ctrRuta();

$urlServidor=Ruta::ctrRutaServidor();

$respuesta=ControladorProducto::ctrMostrarProductosLimitados();

?>

<section class="contenedor seccion">
    <hr>
    <h2 class="fw-300 centrar-texto">Novedades</h2>
    <hr>
    <div class="contenedor-anuncios">
    <?php

    foreach ($respuesta as $key => $value) {
        
        
        echo '<div class="anuncio">';
        echo'<img src="'.$urlServidor.$value["imagenCategoria"].'" width="400" height="300" alt="">
            <div class="contenido-anuncio">
                <h3>'.$value["nombreCategoria"].' </h3>
                    <a href="nuevoSubcategorias/'.$value['id'].'" class="boton boton-amarillo d-block">Ver mas</a>';
            echo '</div>';
            echo '</div>';            

    }

    ?>
    

</div>
    
        <div class="ver-todas">
            <a href="categoriasNuevos" class="boton boton-verde">Ver mas</a>
        </div>


</section>
         

        
    