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
             

            echo '<div class="card">
            
            <img src="'.$urlServidor.$value["imagenCategoria"].'" width="400" height="300" alt="Nuevo Producto">

            <h3 class="titCategoria">'.$value["nombreCategoria"].'</h3>
            <hr>
            <p class="desCategoria">'.$value["descripcion"].'</p>
            
            <button class="btnCategoria"><a class="linkCategoria" href="'.$url.'nuevoSubcategorias/'.$value['id'].'" >Ver Productos</a></button>
            
            </div>';
        
        }
        
    

            ?>

       </div>
    </main>