<footer class="site-footer seccion">
  <div class="contenedor contenedor-footer">

    <div class="pie">

     <div class="modulo2">
      <br>
      <div class="logo">
        <a href="<?php echo $url?>inicio">
          <img src="<?php echo $url ?>vistas/img/LogoF.png" width="170" height="100" alt="Logo Alfa y Omega">
        </a>
          <p class="nombre-logo principal">Enchapes & Acabados</p>
      </div>


      <!---Redes Sociales -->
      <nav class="final">
        <a href="https://www.youtube.com/channel/UCxhb8Qn4MiKFQ7dHIywCGCg" target="_blank"><span class="icon-youtube"></span></a>
        <a href="https://www.facebook.com/AlfayOmegaYopal" target="_blank" ><span class="icon-facebook"></span></a>
        <a href="https://www.instagram.com/alfayomegacabados/" target="_blank"><span class="icon-instagram"></span></a>
      </nav>

      <br>
      <br>
      <!---Links de Navegacion s -->
      <nav class="navegacion pie">
        <a href="<?php echo $url?>inicio">Inicio</a>
        <a href="<?php echo $url?>nosotros">Nosotros</a>
        <a href="<?php echo $url?>productos">Productos</a>
        <a href="<?php echo $url?>contacto">Contactenos</a>
      </nav>

      <br>
      <p class="copyright">Todos los Derechos Reservados <?php  echo date('Y') ?> &copy; </p>


    </div>

    <div class="modulo1">

      <h4>Visitanos</h4>

      <br>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.446001763229!2d-72.39690348466226!3d5.34869299612019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6b0c4e9624757b%3A0xa0e84a6c394c60a!2sCl.%2011%20%2325-24%2C%20Yopal%2C%20Casanare!5e0!3m2!1ses!2sco!4v1611076814537!5m2!1ses!2sco" width="90%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      <h5>
        <i class="fa fa-phone-square" aria-hidden="true"></i> (608) 6333237 - <i class="fa fa-phone-square" aria-hidden="true"></i> Cel. 3164012888
        <br><br>
        <i class="fa fa-phone-square" aria-hidden="true"></i> L - V 8:00 am - 12:00 pm - 2:00 pm - 6:00 pm
        <br><br>            
        <i class="fa fa-evenlope" aria-hidden="true"></i> servicioalcliente@enchapesyacabadosalfayomega.com
        <br><br>
        <i class="fa fa-map-marker" aria-hidden="true"></i> Calle 11 No 25-24 
        <br><br>
        Yopal - Casanare | Colombia
      </h5>
    </div>


    <div class="modulo3">
      <h4>Contactenos</h4>  
      <br>
      <form role="form" method="post"  onsubmit="return validarDatos()">
        <input type="text" id="nombre" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required>
        <input type="email" id="email" name="emailContactenos" class="form-control" placeholder="Escriba su Correo Electronico" required>    
        <input type="number" id="telefono" name="telefonoContactenos" placeholder="Telefono de Contacto" required >
        <textarea id="mensaje" name="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="5" required></textarea>
        <input type="hidden" name="envioContacto" value="1">
        <br>
        <input type="submit" value="Enviar" >
        <?php

      if(isset($_POST['envioContacto']) && !empty($_POST['envioContacto'])){

        $contactenosPrincipal=new ControladorUsuarios();
        $contactenosPrincipal->ctrFormularioContactenos();

      }

        ?>

      </form>
    </div>

  </div>

</div>




</footer>