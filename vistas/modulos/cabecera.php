    <?php

    $url = Ruta::ctrRuta();
    $urlServidor = Ruta::ctrRutaServidor();

    $respuesta=ControladorProducto::ctrMostrarProductos();    
    $respuestaSlide=ControladorProducto::ctrConsultarSlide();

    ?>

    <span class="cheveron-up"></span>

    <header class="site-header inicio">

      <div class="contenedor contenido-headerp">

        <!-- Logo inicio -->
     

     <div class="cabeceraInicio">

        <div class="logo2">
          <img src="vistas/img/LogoF.png"  alt="Alfa y Omega "> 
          <p class="nombre-logo principal">Enchapes & Acabados</p>
        </div>

        <!-- Inicio Busqueda -->

        <div class="buscarPrimario ">
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

      
        <!-- Fin Busqueda -->




        <div class="topnav" id="myTopnav">

          <a href="inicio" class="active">Inicio <span class="icon-home"></span> </a>
          <a href="nosotros">Nosotros <span class="icon-users"></span> </a>
          <div class="dropdown">
            <button class="dropbtn">Productos 
             <span class="icon-down-open"></span>
            </button>
            <div class="dropdown-content">
             <?php 

                                foreach ($respuesta as $key => $value){

                                    echo '<a href="subcategorias/'.$value["id"].'">'.$value["nombreCategoria"].' <span class="icon-ok"></span></a>';

                                }

                                ?>

            </div>
          </div> 
          <!--<a href="servicios">Servicios <span class="icon-bullhorn"></span></a>-->
          <a href="contacto">Contacto <span class="icon-mail-2"></span></a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        
        </div>



  <div class="flexslider">
  <ul class="slides">
    <?php

    foreach($respuestaSlide as $key => $value){
    echo'<li>
      <img src="'.$urlServidor.$value['imagenProducto'].'" />
    </li>';
    }
    ?>
  </ul>
</div>



</div>

</header>
