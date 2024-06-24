<!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>Administracion de Categorias</h1>

    </section>

    <section class="content">

      <div class="row">
          
        <div class="col-md-6">

           <!-- Bloque 1 -->

           <?php
           
           /* Administracion de Logotipo e icono */
            
           include "categorias/adminCategorias.php";

           /* Administracion de Colores */

           //include "comercio/colores.php";

           /* Administracion de Redes Sociales */

           //include "comercio/redSocial.php";


           ?>


           
        </div> 

         <div class="col-md-6">
           
         <?php

             include "categorias/listaCategorias.php";

         ?>

        </div> 

      </div>

      
    </section>

    </div>
  <!-- /.content-wrapper -->