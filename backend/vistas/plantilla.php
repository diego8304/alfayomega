<?php

$url=Ruta::ctrRutaServidor();


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administracion | Alfa & Omega </title>


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

 
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo $url ?>vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $url ?>vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $url ?>vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo $url ?>vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $url ?>vistas/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo $url ?>vistas/dist/css/skins/_all-skins.min.css">

   <!--- Estilos personalizados -->

   <link rel="stylesheet" href="<?php echo $url ?>vistas/css/panel.css">
    <!--- Sweet alert -->
  <link rel="stylesheet" href="<?php echo $url ?>vistas/css/plugins/sweetalert.css">
  <!--- Script sweetalert -->
  <script src="<?php echo $url ?>vistas/js/plugins/sweetalert.min.js"></script>
   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet"> 

 </head>
 
 <body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  

  <!-- Header ---> 

  <?php


  session_start();



  if(isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"]==="ok" ){

  
    echo '<div class="wrapper">';

  $rutas = array(); 
    
  $rutas = explode("/", $_GET["ruta"]);


    $ruta=$rutas[0];

    if($rutas[0]==""){

      $rutas[0]="principal";

    }



    if($rutas[0]=="principal"){

        /*=============================================
        CABEZOTE
        =============================================*/ 
        include_once "modulos/header.php";

        /*=============================================
        LATERAL
        =============================================*/ 
        include_once "modulos/lateral/lateral.php";

        /*=============================================
        CONTENIDO PRINCIPAL
        ====================================*/ 
        
        include_once "modulos/principal.php";  
        

        /*=============================================
        FOOTER
        =============================================*/ 

        include "modulos/footer.php";


        

      }else if(isset($_GET["ruta"])){

         /*=============================================
        CABEZOTE
        =============================================*/ 
        include_once "modulos/header.php";

        /*=============================================
        LATERAL
        =============================================*/ 
        include_once "modulos/lateral/lateral.php";

        /*=============================================
         RUTAS DE NAVEGACION 
         =============================================*/ 

         if($rutas[0]=="admin" || $rutas[0]=="editar" ){

          include "modulos/admin/".$rutas[0].".php";

         /*=============================================
         AQUI SE INCLUYE TODAS LAS DIFERENTE SECCIONES DE LA PAGINA  
         =============================================*/ 

       }else if($rutas[0]=="categorias"){


        include "modulos/".$rutas[0].".php";


       }else if($rutas[0]=="crearCategorias"){


        include "modulos/categorias/nuevaCategorias.php";


       }else if ($rutas[0]=="subcategorias"){


         include "modulos/".$rutas[0].".php";

        
        }else if ($rutas[0]=="editarSub"){

          
         include "modulos/subcategorias/editarSub.php";


        }else if ($rutas[0]=="crearSubcategorias"){

          
         include "modulos/subcategorias/crearSubcategoria.php";


        }else if ($rutas[0]=="productos"){

          
         include "modulos/productos/editarProductos.php";

        }else if ($rutas[0]=="crearProductos"){

          
         include "modulos/productos/crearProductos.php";

        }else if ($rutas[0]=="slide"){

          include "modulos/slide/crearSlide.php";


        }

      include "modulos/footer.php";

    }

  
    echo'</div>';


  }else{


    include "login.php";


  }


  if(isset($rutas[0]) && $rutas[0]=="salir"){


    include "modulos/salir.php";


  }



  ?>



<!--Ruta para enlazar la Url Actual --->
  
<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">


  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="<?php echo $url ?>vistas/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?php echo $url ?>vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- SlimScroll -->
 <script src="<?php echo $url ?>vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
 <script src="<?php echo $url ?>vistas/bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo $url ?>vistas/dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo $url ?>vistas/dist/js/demo.js"></script>
 
 <!-- Scripts Personalizados --> 

 <script src="<?php echo $url ?>vistas/js/app.js"></script>

  <!-- Scripts Slide --> 

 <script src="<?php echo $url ?>vistas/js/slide.js"></script>

 <!--- Script de las funcions para el control de la galeria -->

 <script src="<?php echo $url ?>vistas/js/controlGaleria.js"></script>

 <!--<script src="vistas/js/adminAjax.js"></script>-->

<script src="<?php echo $url ?>vistas/js/plugins/iCheck/icheck.min.js"></script>

 <!-- DataTables -->
 <script src="<?php echo $url ?>vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo $url ?>vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



  
 <script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>


 

<script>
  $(function () {
    $('#dtsubcategorias').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>






</body>
</html>
