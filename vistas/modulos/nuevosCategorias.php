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
             

            echo '<div class="anuncio">
                <img src="'.$urlServidor.$value["imagenCategoria"].'" width="400" height="300" alt="Nuevo Producto">
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
                    <a href="'.$url.'nuevoSubcategorias/'.$value['id'].'" class="boton boton-amarillo d-block">Ver Productos</a>
                </div>
            </div>';
            
            }

            ?>

       </div>
    </main>