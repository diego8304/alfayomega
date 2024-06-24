  <?php

  $url=Ruta::ctrRuta();

  $urlServidor=Ruta::ctrRutaServidor();

  $item=$rutas[1];



  $respuesta=ControladorProducto::ctrMostrarSubcategoriasNuevosProducto($item);
  
  $consultarCategoria=ControladorProducto::ctrConsultarCategorias($item);



  foreach ($respuesta as $key => $value) {
    

    
    }



  ?>

  <main class="seccion contenedor">

  <br>
    <ol class="arrows">
     <li><a href="<?php echo $url ?>/categoriasNuevos">CATEGORIAS</a></li>
     <li><a href="#"><?php echo strtoupper($consultarCategoria['nombreCategoria']); ?></a></li>
 </ol>

 <h2 class="fw-300 centrar-texto"><?php echo $consultarCategoria['nombreCategoria'] ?></h2>
    <hr>

 <div class="contenedor-anunciosSubcategorias">



    <?php 


    foreach ($respuesta as $key => $value) {

        echo '<div class="anuncioSubcategorias">
        <img src="'.$urlServidor.$value["imagenSubcategoria"].'" width="350" height="250" alt="">
        <div class="contenido-anuncio">
        <h3>'.$value["nombreSubcategoria"].'</h3>
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. </p>-->
        <!--<p class="precio">$4,000,0000</p>-->

        <!--<ul class="iconos-caracteristicas">
        <li>
        <img src="img/icono_wc.svg" alt="icono wc">
        <p>3</p>
        </li>
        <li>
        <img src="img/icono_estacionamiento.svg" alt="icono autos">
        <p>3</p>
        </li>
        <li>
        <img src="img/icono_dormitorio.svg" alt="icono habitaciones">
        <p>4</p>
        </li>
        </ul>-->


        <a href="'.$url.'nuevoProducto/'.$value["idSubcategoria"].'/'.$value["idCategoria"].'" class="boton boton-amarillo d-block">Ver Productos</a>
        </div>
        </div>';





        
    }

    ?>

</div>
</main>