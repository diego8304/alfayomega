<?php


/* Consulta de Productos */
$url=Ruta::ctrRuta();
$urlServidor=Ruta::ctrRutaServidor();


$item=$rutas[1];  /* id Subcategoria */
$item2=$rutas[2]; /* id Categoria */


/* VALIDAR EL ESTADO DE LA PAGINACION */

if(!$reg){

        
    $reg=1;

}


/* Consultar SubCategoria */

$subcategoria=ControladorProducto::ctrMostrarNombreSubcategorias($item,$item2);

$nombreSubcategoria=$subcategoria["nombreSubcategoria"];


/* CONSULTAR CANTIDAD TOTAL DE REGISTROS  */

$productosCantidad=ControladorProducto::ctrMostrarCantidadProductosFisicos($item,$item2);
$totalArticulosDB=$productosCantidad["CANTIDAD"];




/* REGISTROS POR PAGINA */

        $productos_x_pagina=15;

/* CALCULO PARA HALLAR EL NUMERO DE PAGINAS  */

$numeroPaginas=($totalArticulosDB/$productos_x_pagina);

    $cantidadPaginas=ceil($numeroPaginas);

    $total=($reg-1)*$productos_x_pagina;

    $productos=ControladorProducto::ctrMostrarProductosFisicos($item,$item2,$total,$productos_x_pagina);


foreach ($productos as $key => $value) {


}


?>

<main class="seccion contenedor">
    <br>
    <ol class="arrows">
     <li><a href="<?php echo $url ?>/categorias">CATEGORIAS</a></li>

     
     <li><a href="<?php echo $url ?>/subcategorias/<?php echo $value['idCategoria']?>"><?php echo  strtoupper($nombreSubcategoria); ?></a></li>

 </ol>
 
 <hr>

 <div class="contenedor-anuncios">

 

    <div class="container">

 
<?php

if($productos!=null){

     

    foreach ($productos as $key => $value2){

      
        echo'<div class="card">';
        echo'<img src="'.$urlServidor.$value2["imagenProducto"].'"/>
        <hr>
        <div id="desc1">'.$value2["nombreProducto"].'</div>
        <br>
        <button class="button"><a href='.$url.'descripcion/'.$value2['id'].' target="_blank" ><span>Ver</span></a></button>';
        echo '</div>';
    


        
    } 

    
    
}else{

    echo '<h3> Productos No Disponibles - Mayor información ((608) 6333237) - Cel. 3164012888 </h3>';
    echo '<style> .pagination{

        display:none !important;
       
    }
      </style>';

}

?>



</div>

          

    </div>

    <hr>
    

<div class="center">  
      
    <div class="paginations">

        <?php
       
       // Paginacion de la lista de productos


        if($reg>1){
       
        echo '<a href="'.$url.$rutas[0].'/'.$rutas[1].'/'.$rutas[2].'/'.($reg-1).'">Anterior</a>';

        }

            for($i=1;$i<=$cantidadPaginas;$i++){
            

                if($reg==$i){
                
                     echo '<a class="active" href="'.$url.$rutas[0].'/'.$rutas[1].'/'.$rutas[2].'/'.$i.'">'.$i.'</a>';

                    

                }else{

                    echo '<a href="'.$url.$rutas[0].'/'.$rutas[1].'/'.$rutas[2].'/'.$i.'">'.$i.'</a>';
                
                }

            }

            if($reg!=$cantidadPaginas) {

            echo '<a href="'.$url.$rutas[0].'/'.$rutas[1].'/'.$rutas[2].'/'.($reg+1).'">Siguiente</a>';

            }


        ?>

            
    </div>

</div>

</main>



  