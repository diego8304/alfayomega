<?php
    
if(isset($rutas[1])){
    $id=intval($rutas[1]);
    $respuesta=Usuarios::ctrEditarUsuario($id);

}

?>
    <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Usuario</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

           <form role="form" method="post" name="crear-admin" id="actualizar-admin">
              <div class="box-body">
                <div class="form-group">
                  <label for="usuario">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" value="<?php echo $respuesta["usuario"] ?>" name="usuario" placeholder="Usuario" required>
                </div>
                 <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" value="<?php echo $respuesta["nombre"] ?>" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password"  name="password" placeholder="password">
                </div>

                <div class="form-group">
                  <label for="password">Repetir Password:</label>
                  <input type="password" class="form-control" id="repetir_password"  name="repetir_password" placeholder="password">
                  <span id="resultado" class="help-block"></span>
                </div>

              </div>
              <!-- /.box-body -->

            <div class="box-footer">
                <input type="hidden" name="id" value="<?php echo $respuesta["id"] ?>">
                <input type="hidden" name="registrar" value="1">
                <button type="submit" class="btn btn-primary" id="crearRegistro">Actualizar</button>
              </div>
           
            </form>





            <?php

              $actualizarUsuario= new Usuarios();
              $actualizarUsuario->ctrActualizarUsuario();

            ?>
          </div>
        <!-- /.box-body -->
        <!--<div class="box-footer">
          Footer
        </div>-->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->