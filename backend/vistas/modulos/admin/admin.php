<!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>Administracion de Usuarios</h1>

    </section>

    <section class="content">

      <div class="row">
          
        <div class="col-md-6">

           <!-- Bloque 1 -->

           <?php
           
           /* Administracion de Logotipo e icono */
            
           include "crearUsuarios.php";

           /* Administracion de Colores */

           //include "comercio/colores.php";

           /* Administracion de Redes Sociales */

           //include "comercio/redSocial.php";


           ?>


           
        </div> 

         <div class="col-md-6">
           
         <?php

             /* Administrar Codigos  */ 

             include "listaUsuarios.php";


             /* Administrar Comercio  */

             //include "comercio/informacion.php";


         ?>

        </div> 

      </div>

      
    </section>

    </div>
  <!-- /.content-wrapper -->