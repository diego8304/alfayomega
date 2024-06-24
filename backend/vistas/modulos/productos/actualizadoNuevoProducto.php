

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

				<input type="text" class="form-control nombreProducto" name="nombrePro" value="" placeholder="Enter ..." required>


				<label>Descripcion Producto:</label>

				<textarea class="form-control descripcionProducto" name="descripcionProducto" rows="3" placeholder="Enter ..." ></textarea>


				<label> Codigo:</label>

				<input type="text" class="form-control codigoProducto" name="codigoPro" value="" placeholder="Enter ...">


				<label> Formato:</label>

				<input type="text" class="form-control formatoProducto" name="formatoPro" value="" placeholder="Enter ...">

				<label> Uso:</label>

				<input type="text" class="form-control usoProducto" name="usoPro" value="" placeholder="Enter ...">

				<label> Calidad:</label>

				<input type="text" class="form-control calidadProducto" name="calidadPro" value="" placeholder="Enter ...">

				<label> Trafico:</label>

				<input type="text" class="form-control traficoProducto" name="traficoPro" value="" placeholder="Enter ...">

				<label> Acabado:</label>

				<input type="text" class="form-control acabadoProducto" name="acabadoPro" value="" placeholder="Enter ...">

				<label> Textura:</label>

				<input type="text" class="form-control texturaProducto" name="texturaPro" value="" placeholder="Enter ...">

				<label> Diseño:</label>

				<input type="text" class="form-control disenoProducto" name="disenoPro" value="" placeholder="Enter ...">

				<label> Color:</label>

				<input type="text" class="form-control colorProducto" name="colorPro" value="" placeholder="Enter ...">

				<!--- Nuevos Campos --->

					<label> Metros Cuadrados por caja:</label>

					<input type="text" class="form-control mtsxCajaProducto" name="mtsxPro" value="" placeholder="Enter ...">

					<label> Unidades por caja:</label>

					<input type="text" class="form-control udsxCajaProducto" name="udsxCajaPro" value="" placeholder="Enter ...">

					<label> Unidades por metro cuadrado:</label>

					<input type="text" class="form-control udsxMtsCuadradoProducto" name="udsxMtsCuadradoPro" value="" placeholder="Enter ...">

					<label> Peso por caja:</label>

					<input type="text" class="form-control pesoCajaProducto" name="pesoCajaPro" value="" placeholder="Enter ...">

				<hr>

				<label>Producto Nuevo </label>

					<div class="checkbox ">
						<label>
							<input type="checkbox" class="nuevoProducto" name="nuevoProducto" visible="" value="">
							Producto Nuevo.
						</label>
					</div>

				<hr>

				<label>Cargar Imagenes:</label>

				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Imagen Principal</h3>
					</div>
					<div class="box-body">
						<input type="file" class="form-control" id="subirFotos" name="datosImagen" >

						<p class="help-block">Tamaño recomendado 500px * 100px</p>

						<p class="pull-right">
							<img class="previsualizarLogo" width="200px" height="200px">
						</p>
					</div>
					<!-- /.box-body -->
				</div>
				
				<hr>
			
				
					<!-- Cargar Imagen 1  -->

			
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Imagen 1 </h3>
					</div>
					<div class="box-body">
						<input type="file" id="subirImagen1" name="datosImagen1" >

						<p class="help-block">Tamaño recomendado 500px * 100px</p>

						<p class="pull-right">
							<img class="previsualizarImagen1" width="200px" height="200px">
						</p>
					</div>
					<!-- /.box-body -->
				</div>


				<!-- Cargar Imagen 2  -->

			
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Imagen 2 </h3>
					</div>
					<div class="box-body">
						<input type="file" id="subirImagen2" name="datosImagen2" >

						<p class="help-block">Tamaño recomendado 500px * 100px</p>

						<p class="pull-right">
							<img class="previsualizarImagen2" width="200px" height="200px">
						</p>
					</div>
					<!-- /.box-body -->
				</div>


			<!-- Cargar Imagen 3  -->

			
			<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Imagen 3 </h3>
					</div>
					<div class="box-body">
						<input type="file" id="subirImagen3" name="datosImagen3" >

						<p class="help-block">Tamaño recomendado 500px * 100px</p>

						<p class="pull-right">
							<img class="previsualizarImagen3" width="200px" height="200px">
						</p>
					</div>
					<!-- /.box-body -->
				</div>

				<hr>

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

