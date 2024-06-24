<?php
  
  $url=Ruta::ctrRutaServidor();



?>



<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $url ?>inicio" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>O</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Alfa & Omega </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
      
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Bienvenido <?php echo $_SESSION["nombre"] ?> </span>
            </a>
            <ul class="dropdown-menu">
        
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-success btn-flat">Ajustes</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo $url ?>salir" class="btn btn-success btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->