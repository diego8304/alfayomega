<?php

/* Consulta de Productos */
    
$url=Ruta::ctrRuta();

$urlServidor=Ruta::ctrRutaServidor();

$categorias=ControladorProducto::ctrMostrarProductosCategoriasNuevos();

?>

 <main class="seccion contenedor">
        <hr>
        <h2 class="fw-300 centrar-texto">Encuentra Nuevos Productos</h2>
        <hr>
        <div class="contenedor-anuncios">

    <?php

        foreach ($categorias as $key => $value) {
             

        echo '<div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                <img src="'.$urlServidor.$value["imagenCategoria"].'" style="width:300px; height:300px;" alt="'.$value["nombreCategoria"].'">
                <div class="titCategoria">'.$value["nombreCategoria"].'</div>
                </div>
                <div class="flip-card-back">
                <h4 class="tituloC">'.$value["nombreCategoria"].'</h4>
                <p class="desCategoria">'.$value["descripcion"].'</p>
                
                <button class="buttonC"><span><a href="'.$url.'nuevoSubcategorias/'.$value['id'].'" class="linkCategoria">Ver Productos</a></span></button>

                </div>
               
            </div>
            </div>';
        
        }

            ?>

       </div>
    </main>