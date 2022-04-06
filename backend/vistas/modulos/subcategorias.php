<?php

  $url=Ruta::ctrRutaServidor();

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


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
    
            
           include "subcategorias/adminSubcategorias.php";

          

           ?>


           
        </div> 

         <div class="col-md-6">
           

         
        </div> 

      </div>

      
    </section>

    </div>
  <!-- /.content-wrapper -->