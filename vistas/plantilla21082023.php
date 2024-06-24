<?php

/*=============================================
Mantener la ruta del proyecto
=============================================*/
$url = Ruta::ctrRuta();
$urlServidor = Ruta::ctrRutaServidor();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- URL CANONICAS ---->

    <!-- Actualizacion  09/02/2023-->

    

 
    <link rel="canonical" href="https://enchapesyacabadosalfayomega.com/nuevoSubcategorias/"/>
    <link rel="canonical" href="https://enchapesyacabadosalfayomega.com/subcategorias/" />
    <link rel="canonical" href="https://enchapesyacabadosalfayomega.com/productos/"/>
    <link rel="canonical" href="https://enchapesyacabadosalfayomega.com/descripcion/"/>
    
    


<?php

        /*=============================================
		MARCADO DE CABECERAS
		=============================================*/

        $rutas = array();

        if(isset($_GET["ruta"])){


            $rutas = explode("/", $_GET["ruta"]);

            $ruta=$rutas[0];


        }else{


            $ruta="inicio";


        }


        $cabeceras=ControladorPlantilla::ctrTraerCabeceras($ruta);


            if($cabeceras["ruta"]==false){
                
                $ruta="inicio";

                $cabeceras=ControladorPlantilla::ctrTraerCabeceras($ruta);


            }
          

            

?>
        <title>Alfa Y Omega - Venta de Pisos | Enchapes | Acabados | Pisos Cerámicos | Cocinas | Sanitarios </title>
        <meta name="title" content="<?php echo $cabeceras['titulo'] ?>">
        <meta name="keywords" content="<?php echo $cabeceras['palabrasClaves'] ?>"/>
        <meta name="description" content="<?php echo $cabeceras['descripcion'] ?>"/>
        <meta name="facebook-domain-verification" content="1lx7eelmn0dipa0x2vyo8k5s97ktwz" />


        <!--=====================================
	        Marcado de Open Graph FACEBOOK
	    ======================================-->

        <?php

            if($cabeceras['ruta']=="descripcion" && isset($rutas[1])){

                $id=$rutas[1];

                $resultado=ControladorProducto::ctrVerProductos($id);

                echo' <meta property="og:title" content="'.$resultado['producto'].'">
                <meta property="og:url" content="'.$url."descripcion".'/'.$resultado['id'].'">
                <meta property="og:description" content="'.$resultado['descProducto'].'">
                <meta property="og:image"  content="'.$urlServidor.$resultado['imagenProducto'].'">
                <meta property="og:type"  content="website">	
                <meta property="og:site_name" content="Alfa y Omega">
                <meta property="og:locale" content="es_CO">';

            }else{

                
                echo '<meta property="og:title"   content="'.$cabeceras['titulo'].'">
                <meta property="og:url" content="'.$cabeceras['ruta'].'">
                <meta property="og:description" content="'. $cabeceras['descripcion'].'">
                <meta property="og:image"  content="'.$urlServidor.$cabeceras['portada'].'">
                <meta property="og:type"  content="website">	
                <meta property="og:site_name" content="Alfa y Omega">
                <meta property="og:locale" content="es_CO">';

                
            }


        ?>

        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital@1&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">   
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/normalize.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/plantilla.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/styles.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/estilos.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/fontello.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/productos.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/breadcrumbs.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/datatables.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/plugins/sweetalert.css">
        <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/menu.css">
        <script src="<?php echo $url ?>vistas/js/plugins/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<span class="cheveron-up"></span>


<body>


    <?php


/*=============================================
Lista Blanca Url Amigables 
=============================================*/
$rutas = array();
$ruta = "inicio";

if(isset($_GET["ruta"])){

    $rutas = explode("/", $_GET["ruta"]);

    $ruta=$rutas[0];

    if($ruta!="inicio"){


        if($ruta=="categorias"){

            include "modulos/menu.php";
            include "modulos/categorias.php";


        }else if($ruta=="categoriasNuevos"){


            include "modulos/menu.php";
            include "modulos/nuevosCategorias.php";


        }else if($ruta=="subcategorias"){


            include "modulos/menu.php";
            include "modulos/".$ruta.".php";


        }else if ($ruta=="nuevoSubcategorias"){


            include "modulos/menu.php";
            include "modulos/".$ruta.".php";



        } else if($ruta=="contacto"){



            include "modulos/menu.php";
            include "modulos/contacto.php";



        }else if($ruta=="nosotros"){


            include "modulos/menu.php";
            include "modulos/empresa.php";


        }else if($ruta=="productos" && isset($rutas[1]) && isset($rutas[2])){



            if(isset($rutas[3]) && !empty($rutas[3])){

                $reg=intval($rutas[3]);

                
                include "modulos/menu.php";
                include "modulos/productos.php";


            }else{

                $reg=0;

                include "modulos/menu.php";
                include "modulos/productos.php";

            }

        
        }else if($ruta=="nuevoProducto" && isset($rutas[1]) && isset($rutas[2])){


            if(isset($rutas[3]) && !empty($rutas[3])){

                $reg=intval($rutas[3]);

                
                include "modulos/menu.php";
                include "modulos/nuevoProducto.php";


            }else{

                $reg=0;

                include "modulos/menu.php";
                include "modulos/nuevoProducto.php";

            }



        }else if($ruta=="productos" && !isset($reg)){



                include "modulos/menu.php";
                include "modulos/categorias.php";



        }else if($ruta=="buscar"){


                include "modulos/menu.php";
                include "modulos/resultado.php";
                


        }else if ($ruta=="descripcion"){
                
                include "modulos/menu.php";
                include "modulos/descripcion.php";


        }
       
      

    }


} if ($ruta=="inicio"){


        /*=============================================
        CABEZOTE
        =============================================*/

        include "modulos/cabecera.php";



        /*=============================================
        SECCION NOVEDADES
        =============================================*/

        include "modulos/novedades.php";


        /*=============================================
        SECCION ANUNCIOS
        =============================================*/

        include "modulos/anuncios.php";

        /*=============================================
        SECCION MARCAS
        =============================================*/

        include "modulos/marcas.php";



} 

            /*=============================================
            SECCION PIE
            =============================================*/

            include "modulos/pie.php";


            /*=============================================
            SECCION PIE
            =============================================*/



?>

        
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
        <script src="<?php echo $url ?>vistas/js/bootstrap.min.js"></script>
        <script src="<?php echo $url ?>vistas/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo $url ?>vistas/js/plugins/jquery.flexslider.js"></script>
        <script src="<?php echo $url ?>vistas/js/plugins/jquery.elevateZoom-3.0.8.min.js"></script>
        <script src="<?php echo $url ?>vistas/js/plugins/jquery.scrollUp.js"></script>
        <script src="<?php echo $url ?>vistas/js/plantilla.js"></script>
        <script src="<?php echo $url ?>vistas/js/menu.js"></script>
        <script src="<?php echo $url ?>vistas/js/bread.js"></script>
        <script src="<?php echo $url ?>vistas/js/usuario.js"></script>
        <script src="<?php echo $url ?>vistas/js/buscador.js"></script>
        <script src="<?php echo $url ?>vistas/js/slider.js"></script>
        <script src="<?php echo $url ?>vistas/js/sheetslider.min.js"></script>
        <script src="<?php echo $url ?>vistas/js/whale.min.js"></script>
        
        

<script>




  window.fbAsyncInit = function() {
    FB.init({
      appId            : '352928120090282',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v13.0'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));





$(".btnFacebook").click(function(){

FB.ui({

    method: 'share',
    display: 'popup',
    href: '<?php  echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  ?>',
}, function(response){});

})

</script>


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v13.0&appId=352928120090282&autoLogAppEvents=1" nonce="89gjIx9h"></script>
        





    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=573164012888&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20Productos%202." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>




<!-- Messenger plugin del chat Code -->
<div id="fb-root"></div>

<!-- Your plugin del chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "104331627762335");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>



</body>

</html>

