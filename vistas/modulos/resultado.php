<?php


$urlProductos=Ruta::ctrRuta();
$urlImagenes=Ruta::ctrRutaServidor();


?>

<main class="seccion contenedor">
        
    <br>
    
        <h2 class="fw-300 centrar-texto">Encuentra tu producto</h2>

        <hr>

        <div class="contenedor-anuncios">
            
        

            <?php

                if(isset($_POST['buscar']) && isset($_POST['busqueda']) && !empty($_POST['buscar'])){

                    $palabraClave=$_POST['buscar'];
        
                    $resultado=ControladorProducto::ctrTraerBusqueda($palabraClave);
        
                }

            ?>


            <!-- /.box-header -->
            <div class="box-body">
              <table id="buscador" class="table table-bordered table-hover ">
                <thead>
                <tr>
                  <th>Nombre Producto</th>
                  <th>Imagen</th>
                  <th>Descripcion</th>
                </tr>
                </thead>
                <tbody>

                
                <?php

            
             if(!empty($resultado)){

                foreach($resultado as $value){
                    echo "<tr>";
                        echo"<th>".$value['producto']."</th>";
                        echo "<th><img src='".$urlImagenes.$value["imagenProducto"]."' width='250' height='250' class='imgBusqueda'></th>";
                        echo "<th><a href='".$urlProductos."descripcion/".$value['id']."' target='_blank'>ver</a></th>";
                    echo "</tr>";
                }

            }

                ?>


                </tbody>
                <tfoot>
                <tr>
                    <th>Nombre Producto</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
    
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
         
          <!-- /.box -->
     
        </div>

</main>



