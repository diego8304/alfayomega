
<?php

$url=Ruta::ctrRuta();

?>
   <script src="<?php echo $url ?>vistas/js/buscador.js"></script>


<?php

   
   $salida="";
  
	
   if(isset($_POST['consulta'])){


      echo $_POST['consulta'];


      $resultado=ControladorProducto::ctrTraerBusqueda($_POST['consulta']);

      if(count($resultado)>0){

         $salida.="<table class='tabla_datos'>
            <thead>
               <tr>
                  <td>id</td>
                  <td>Nombre</td>
                  <td>Marca</td>
                  <td>Modelos</td>
               </tr>

            </tehead>
            <tbody>";
            
           foreach ($resultado as $key =>$value){

               $salida.="<tr>
               
               <td>".$value['nombreProducto']."</td>
               <td>".$value['producto']."</td>
               <td>".$value['descProducto']."</td>
               <td>".$value['descProducto']."</td>

               </tr>";

           }

           $salida.="</tbody></table>";

      }else{

           $salida.="No hay Datos";


      }

            echo $salida;

   }


?>

