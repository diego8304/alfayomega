<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo $url ?>vistas/img/logo/Logo.png" class="img-responsive" style="padding:10px 50px;"></b>Administración</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar Sesión</p>

    <form  method="post" id="login">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="usuario" placeholder="usuario" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="password" placeholder="password" required>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
        <div class="row">
          <!-- /.col -->
            <div class="col-xs-12 text-center">
              <button type="submit" name="login_submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div>
          <!-- /.col -->
        </div>
    </form>

    <?php

      $login=new Usuarios();
      $login->ctrIngresoAdministrador();

    ?>


    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>