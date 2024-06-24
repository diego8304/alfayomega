<?php

$url = Ruta::ctrRuta();

$respuesta=ControladorProducto::ctrMostrarProductos();   

?>

<header class="site-header">

  <div class="contenedor contenido-header">


    <div class=anuncios>  

      <div class="flex-encabezado">  
        <!---Redes Sociales -->
        <nav class="redes-sociales encabezado">
          <a href="https://www.youtube.com/channel/UCxhb8Qn4MiKFQ7dHIywCGCg" target="_blank"><span class="icon-youtube"></span></i></a>
          <a href="https://www.facebook.com/AlfayOmegaYopal" target="_blank"><span class="icon-facebook"></span></a>
          <a href="https://www.instagram.com/alfayomegacabados/"><span class="icon-instagram"></span></a>
        </nav>

      </div>

  </div>


    <div class="barra">

      <!---Elemento de  Logo -->
      <div class="logo">
        <a href="<?php echo $url?>inicio">
          <img src="<?php echo $url ?>vistas/img/LogoF.png" width="170" height="100" alt="Logotipo Alfa y Omega">
        </a>
        <p class="nombre-logo principal">Enchapes & Acabados</p>
      </div>

      <!---Nombre Empresa -->



      <!---Campo de Busqueda -->

      <div class="buscarPrimario2">
            <div class="bp1">

            <h4 class="tituloBusqueda"><span class="tituloPrimario">¿Que estas buscando?</span></h4>
            <form action="<?php echo $url?>buscar" method="post">
                <input id="txtbusca" type="text" name="buscar" placeholder="Buscar" required>
                <input  type="hidden" name="busqueda">
                <div class="btn1"><button type="submit" class="btnBusqueda"><span class="icon-search"></span></button></div>
            </form>
                </div>
        </div>

        

  </div>  
    <!---Fin Barra -->


    <!---Menu Principal -->

    <div class="navegacions">
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu" class="icon-menu"></label>

      <div class="topnav" id="myTopnav">

        <a href="<?php echo $url?>/inicio" class="active">Inicio <span class="icon-home"></span> </a>
        <a href="<?php echo $url?>/nosotros">Nosotros <span class="icon-users"></span> </a>
        <div class="dropdown">
          <button class="dropbtn">Productos 
           <span class="icon-down-open"></span>
         </button>
         <div class="dropdown-content">
           <?php 

           foreach ($respuesta as $key => $value){

            echo '<a href="'.$url.'subcategorias/'.$value["id"].'">'.$value["nombreCategoria"].' <span class="icon-ok"></span></a>';

          }

          ?>

        </div>
      </div> 
      <!--<a href="<?php echo $url?>/servicios">Servicios <span class="icon-bullhorn"></span></a>-->
      <a href="<?php echo $url?>/contacto">Contacto <span class="icon-mail-2"></span></a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

    </div>

  </div>


</div> <!-- contenedor -->
</header>