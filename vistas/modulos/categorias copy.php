<?php

/* Consulta de Productos */
    
$url=Ruta::ctrRuta();

$urlServidor=Ruta::ctrRutaServidor();

$categorias=ControladorProducto::ctrMostrarProductos();

?>

 <main class="seccion contenedor">
        <br>
        <h2 class="fw-300 centrar-texto">Categorias</h2>

        <hr>
        <div class="contenedor-anuncios">

            <?php

        foreach ($categorias as $key => $value) {
             

            echo '<div class="anuncio">

                <img src="'.$urlServidor.$value["imagenCategoria"].'" width="400" height="300" alt="'.$value["nombreCategoria"].'">
                <div class="contenido-anuncio">
                    <h3>'.$value["nombreCategoria"].'</h3>
                    <hr>
                    <p>'.$value["descripcion"].' </p>
                    
                    <a href="subcategorias/'.$value['id'].'" class="boton boton-amarillo d-block">Ver Productos</a>
                    
                </div>

                

            </div>';
            
            }

            ?>

       </div>
    </main>