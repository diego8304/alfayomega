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
          

            //var_dump($cabeceras);

?>

        <meta name="title" content="<?php echo $cabeceras['titulo'] ?>">
        <meta name="keywords" content="<?php echo $cabeceras['palabrasClaves'] ?>"/>
        <meta name="description" content="<?php echo $cabeceras['descripcion'] ?>"/>
        <meta name="facebook-domain-verification" content="1lx7eelmn0dipa0x2vyo8k5s97ktwz" />

        <!--=====================================
	        Marcado de Open Graph FACEBOOK
	    ======================================-->

        <meta property="og:title"   content="<?php echo $cabeceras['titulo'];?>">
        <meta property="og:url" content="<?php echo $url.$cabeceras['ruta'];?>">
        <meta property="og:description" content="<?php echo $cabeceras['descripcion'];?>">
        <meta property="og:image"  content="<?php echo $urlServidor.$cabeceras['portada'];?>">
        <meta property="og:type"  content="website">	
        <meta property="og:site_name" content="Alfa y Omega">
        <meta property="og:locale" content="es_CO">



        <title>Alfa y Omega </title>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital@1&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">   
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/normalize.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/styles.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/fontello.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/productos.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/breadcrumbs.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/datatables.css">
        <link rel="stylesheet" href="<?php echo $url  ?>vistas/css/plugins/sweetalert.css">
        <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/shadowbox.css">
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


        }else if($ruta=="subcategorias"){


            include "modulos/menu.php";
            include "modulos/".$ruta.".php";


        }else if($ruta=="servicios"){


            include "modulos/menu.php";
            include "modulos/servicios.php";


        }else if($ruta=="contacto"){



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
        SECCION NOSOTROS
        =============================================*/

        include "modulos/nosotros.php";

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


        /*=============================================
        SECCION PIE
        =============================================*/


} 

            /*=============================================
            SECCION PIE
            =============================================*/

            include "modulos/pie.php";


            /*=============================================
            SECCION PIE
            =============================================*/



?>

        <
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
        <script src="<?php echo $url ?>vistas/js/bootstrap.min.js"></script>
        <script src="<?php echo $url ?>vistas/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo $url ?>vistas/js/plugins/shadowbox/shadowbox.js"></script>
        <script src="<?php echo $url ?>vistas/js/plugins/jquery.flexslider.js"></script>
        <script src="<?php echo $url ?>vistas/js/plugins/jquery.elevateZoom-3.0.8.min.js"></script>
        <script src="<?php echo $url ?>vistas/js/menu.js"></script>
        <script src="<?php echo $url ?>vistas/js/bread.js"></script>
        <script src="<?php echo $url ?>vistas/js/usuario.js"></script>
        <script src="<?php echo $url ?>vistas/js/buscador.js"></script>
        <script src="<?php echo $url ?>vistas/js/slider.js"></script>
        <script src="<?php echo $url ?>vistas/js/sheetslider.min.js"></script>
        <script src="<?php echo $url ?>vistas/js/whale.min.js"></script>
        


<script>

     /*=============================================
	COMPARTIR EN FACEBOOK
	https://developers.facebook.com/docs/      
	=============================================*/
	
	$(".btnFacebook").click(function(){

FB.ui({

    method: 'share',
    display: 'popup',
    href: '<?php  echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  ?>',
}, function(response){});

})

</script>



</body>

</html>

