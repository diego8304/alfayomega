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
                <img src="'.$urlServidor.$value["imagenCategoria"].'" width="400" height="300" alt="Anuncio casa en el lago">
                <div class="contenido-anuncio">
                    <h3>'.$value["nombreCategoria"].'</h3>
                    <p>'.$value["descripcion"].' </p>
                    <!--<p class="precio">$4,000,0000</p>-->

                    <!--<ul class="iconos-caracteristicas">
                        <li>
                            <img src="/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="/img/icono_estacionamiento.svg" alt="icono autos">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>-->
                    <a href="subcategorias/'.$value['id'].'" class="boton boton-amarillo d-block">Ver Productos</a>
                </div>
            </div>';
            
            }

            ?>

       </div>
    </main>