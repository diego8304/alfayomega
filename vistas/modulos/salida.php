<?php 



if(isset($_POST['txtbusca'])){

    $valor=$_POST['txtbusca'];

    $resultado=ControladorProducto::ctrTraerBusqueda($valor);

    echo $resultado["nombreProducto"];


    /*
    $html="";

    foreach ($resultado as $key => $value){


        $html.="<p>".$value["nombreProducto"]."</p>"; 
        echo $html;


    }
    */



}

 ?>