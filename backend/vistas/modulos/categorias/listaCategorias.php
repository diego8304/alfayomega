  <?php

    $url=Ruta::ctrRutaServidor();

    $id=null;

    $categorias=ControladorProducto::ctrMostrarProductos($id);

  ?>


  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Categorias</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Imagen Categoria</th>
                  <th>Nombre Categoria</th>
                  <th>Descripcion</th>
                  <th>Visible</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                    
                    foreach ($categorias as $key => $value) {
                  
                      echo '<tr>

                      <td><img  class="img-thumbnail" src="'.$url.$value["imagenCategoria"].'" class="img-thumbnail previsualizarLogo" width="150px" height="150px"></td>
                      <td>'.$value["nombreCategoria"].'</td>
                      <td>'.$value["descripcion"].'</td>';
                      
                      if($value["visible"]==1){

                      echo '<td>Si</td>';
                      
                      }else{

                      echo '<td>No</td>';

                      }

                      echo'<td>
                      <a href="#"  id="'.$value["id"].'" tipo="admin" class="btn bg-maroon btn-flat margin borrarCategoria"> 
                      <i class="fa fa-trash"></i>
                      </a>

                      </td>

                      </tr>';

                    }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Imagen Categoria</th>
                  <th>Nombre Categoria</th>
                  <th>Descripcion</th>
                  <th>Visible</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->