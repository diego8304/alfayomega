<?php

$url=Ruta::ctrRutaServidor();

$id=null;

$respuesta=ControladorProducto::ctrMostrarProductos($id);

?>

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

    <h1>Administracion de Subcategorías</h1>

  </section>

  <section class="content">

    <div class="row">

      <div class="col-md-6">

       <!-- Bloque 1 -->

       <?php

       include "nuevaSubcategoria.php";

       ?>



     </div> 

     <div class="col-md-4">



     </div> 

   </div>


 </section>

</div>
  <!-- /.content-wrapper -->


