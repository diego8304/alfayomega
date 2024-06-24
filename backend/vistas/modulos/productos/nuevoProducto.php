

<?php


$url=Ruta::ctrRutaServidor();

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


$id=null;

$respuesta=ControladorProducto::ctrMostrarSubCategorias($id);

$respuestaCategoria=ControladorProducto::ctrMostrarProductos($id);   



//$productos=ControladorProducto::ctrConsultarProductosFisicos($idCategoria,$idSubcategoria);


?>



<div class="box box-primary">

	<!---Administrar Categorias--->

	<div class="box-header with-border">

		<h3 class="box-title">Productos</h3>

		<div class="box-tools pull-right">

			<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">

				<i class="fa fa-minus"></i>

			</button>

		</div>


	</div>

	<div class="box-body">



	<label>Seleccionar Categoria </label>

		<select class="form-control SeleccionCategoria">
			
			<option  value="seleccione" selected="">Seleccione</option>

			<?php

			$valor=null;

			foreach ($respuestaCategoria as $key => $value) {
			# code...
				echo '<option  value="'.$value['id'].'">'.$value["nombreCategoria"].'</option>';
				
			}

			?>

	</select>


		<!---Seleccionar SubCategoria ---->

		<label>Seleccionar SubCategoria </label>

		<select class="form-control SubcategoriaProductos"  >
			
			<option  value="seleccione" selected="" >Seleccione</option>

			

			<?php

			$valor=null;

			
			foreach ($respuesta as $key => $value) {


				echo '<option class="productos" idTipo="'.$value["idSubcategoria"].'" value="'.$value['id'].'">'.$value["nombreSubcategoria"].'';

			}



			
			?>


		</select>



		<div class="panel-body">


			<form method="post"  enctype="multipart/form-data" >

				<label>Nombre Producto :</label>

				<input type="text" class="form-control nombreProducto" name="nombrePro" value="" placeholder="Enter ...">


				<label>Descripcion Producto:</label>

				<textarea class="form-control descripcionProducto" name="descripcionProducto" rows="3" placeholder="Enter ..."></textarea>

				<br>

				<input type="file" id="subirFotos" name="datosImagen" >

				<p class="help-block">Tamaño recomendado 500px * 100px</p>


				<p class="pull-right">

					<img class="previsualizarLogo" width="200px" height="200px">

				</p>


				<div class="checkbox ">
					<label>
						<input type="checkbox" class="valorProducto" name="valorProducto" visible="" value="">
						Visible
					</label>
				</div>

				<input type="hidden" name="idCategoria" id="idCategoria" value="">
				<input type="hidden" name="idTipo" id="idTipo" value="">
				<input type="hidden" name="idSubcategoria" id="idSubcategoria" value="">



				<button type="submit" class="btn btn-success ">Guardar Producto</button>




			<?php

			$crearProducto = new ControladorProducto();
			$crearProducto->ctrCrearNuevoProducto();

			?>




			</form>


			




		</div>


		<div class="box-footer">


		</div>

		


	</div>

</div>

