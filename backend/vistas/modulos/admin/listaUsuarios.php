  <?php

    $url=Ruta::ctrRutaServidor();

    $usuarios=Usuarios::ctrMostrarUsuarios();

  ?>


  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Administradores</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                    
                    foreach ($usuarios as $key => $value) {
                  
                      echo '<tr>

                      <td>'.$value["id"].'</td>
                      <td>'.$value["usuario"].'</td>
                      <td>'.$value["nombre"].'</td>

                      <td><a href="'.$url.'editar/'.$value["id"].'" idUsuario="'.$value["id"].'" class="btn bg-orange btn-flat margin editar">
                      <i class="fa fa-pencil"></i>
                      </a>
                      <a href="#"  id="'.$value["id"].'" tipo="admin" class="btn bg-maroon btn-flat margin borrarRegistro"> 
                      <i class="fa fa-trash"></i>
                      </a>

                      </td>

                      </tr>';

                    }
                  ?>
                </tbody>
                <tfoot>
               <tr>
                  <th>id</th>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


