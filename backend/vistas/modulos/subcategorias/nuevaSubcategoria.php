<?php




?>


<div class="box box-primary">

	<!---Administrar Categorias--->

	<div class="box-header with-border">

		<h3 class="box-title">Crear SubCategoria </h3>

		<div class="box-tools pull-right">

			<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">

				<i class="fa fa-minus"></i>

			</button>

		</div>


	</div>

	<div class="box-body">

		<label>Seleccionar Categoria </label>

		<select class="form-control opcionCategoriaSub">
			
			<option  value="seleccione" selected="">Seleccione</option>

			<?php

			$valor=null;

			foreach ($respuesta as $key => $value) {
			# code...
				echo '<option  value="'.$value['id'].'">'.$value["nombreCategoria"].'</option>';
				
			}

			?>

		<hr>

	</select>
		

	<div class="panel-body">


		<form method="post"  enctype="multipart/form-data" >


			<label>Nombre Subcategoría</label>

            <input type="text" class="form-control nombreSub" name="nombreSub" value="" placeholder="Enter ...">


            <label>Descripcion Subcategoría</label>

            <textarea class="form-control descripcionSub" rows="3"  value="" name="descSubcategoria" placeholder="Enter ..."></textarea>


            <hr>

			<label>Productos Nuevos de la Subcategoria </label>

			<div class="checkbox ">
				<label>
					 <input type="checkbox" class="nuevoProducto" name="nuevoProducto" visible="" value="">
                    Mostrar Subcategoria en Productos Nuevos.
				</label>
			</div>

			<hr>

            <input type="file" id="subirFotos" name="datosImagen">
            
            
            <p class="help-block">Tamaño recomendado 500px * 100px</p>


           	
           	<p class="pull-right">

					<img class="previsualizarLogo" width="200px" height="200px">

			</p>


            <div class="checkbox ">
                <label>
                    <input type="checkbox" class="valorSub" name="valorSub" visible="" value="">
                    Visible
                </label>
            </div>

            <input type="hidden" name="idCategoria" id="idCategoria" value="">



             <button type="submit" class="btn btn-success ">Guardar Subcategoria</button>


         </form>


			<?php

				$crearSubcategoria = new ControladorProducto();
				$crearSubcategoria->ctrCrearNuevaSubcategoria();

			?>




	</div>


    <div class="box-footer">



    </div>


    	



   