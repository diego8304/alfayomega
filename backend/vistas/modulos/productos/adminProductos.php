

<?php


$url=Ruta::ctrRutaServidor();

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


$id=null;

$respuesta=ControladorProducto::ctrMostrarSubCategorias($id);


// Administracion de productos


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

			<label>Seleccionar SubCategoria </label>

			<select class="form-control SubcategoriaProductos ">
			
			<option  value="seleccione" selected="">Seleccione</option>

			<?php

			$valor=null;


			foreach ($respuesta as $key => $value) {


				echo '<option class="productos" name="SubCategoria" value="'.$value['id'].'">'.$value["nombreSubcategoria"].'';

				
			}
			

			?>


			</select>
		
	




		<label>Seleccionar Producto</label>

		<select class="form-control Opcionproductos ">
		<option  value="seleccione" selected="">Seleccione</option>
			
		</select>

		<hr>



		<div class="panel-body">


			<form method="post"  enctype="multipart/form-data" >

				<label>Nombre Producto</label>
				<input type="text" class="form-control nombreProducto" name="nombrePro" value="" placeholder="Enter ...">
				<label>Descripcion Producto</label>
				<textarea class="form-control descripcionProducto" name="descripcionProducto" rows="3" placeholder="Enter ..."></textarea>
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

				<!--- CARGAR IMAGEN PRINCIPAL  --->

		<div class="box box-success">
			<div class="box-header with-border">
				<input type="file" id="subirFotos" name="datosImagen" value="" >
				<p class="help-block">Tamaño recomendado 500px * 100px</p>
				<p class="pull-right"><img class="previsualizarLogo" width="200px" height="200px"></p>
				<input type="hidden" name="ImgPrincipal" id="idImgPrincipal" value="">
				<button type="submit" name="actualizar" class="btn btn-primary ">Actualizar Imagen</button>
			</div>
		</div>


				<!-- CARGAR IMAGEN 1 -->

		<div class="box box-success">
			<div class="box-header with-border"><h3 class="box-title">Imagen 1 </h3></div>
				<div class="box-body">
					<input type="file" id="subirImagen1" name="datosImagen1" >
					<p class="help-block">Tamaño recomendado 500px * 100px</p>
					<p class="pull-right"><img class="previsualizarImagen1" width="200px" height="200px"></p>
					<input type="hidden" name="idImgProducto3" id="idproducto3" value="">
					<button type="submit" name="actualizar1" class="btn btn-primary ">Actualizar Imagen</button>
				</div>
				<!-- /.box-body -->
			</div>


				<!-- CARGAR IMAGEN 2 -->

		<div class="box box-success">
			<div class="box-header with-border"><h3 class="box-title">Imagen 2 </h3></div>
				<div class="box-body">		
					<input type="file" id="subirImagen2" name="datosImagen2" >
					<p class="help-block">Tamaño recomendado 500px * 100px</p>
					<p class="pull-right"><img class="previsualizarImagen2"  width="200px" height="200px"></p>
					<input type="hidden" name="idImgProducto2" id="idproducto2" value="">
					<button type="submit" name="actualizar2" class="btn btn-primary ">Actualizar Imagen</button>
				</div>
					<!-- /.box-body -->
		</div>


				<!-- CARGAR IMAGEN 3 -->
		<div class="box box-success">				
			<div class="box-header with-border"><h3 class="box-title">Imagen 3 </h3></div>		
				<div class="box-body">
					<input type="file" id="subirImagen3" name="datosImagen3" value="" >
					<p class="help-block">Tamaño recomendado 500px * 100px</p>
					<p class="pull-right"><img class="previsualizarImagen3"  width="200px" height="200px"></p>
					<input type="hidden" name="idImgProducto" id="idproducto1" value="">
					<button type="submit" name="actualizar3" class="btn btn-primary ">Actualizar Imagen</button>
				</div>
					<!-- /.box-body -->
		</div>


				<div class="checkbox ">
					<label>
						<input type="checkbox" class="valorProducto" name="valorProducto" visible="" value="">
						Visible
					</label>
				</div>

				<input type="hidden" name="producto" id="idproducto" value="">

				<button type="submit" name="actualizarProducto" class="btn btn-primary ">Actualizar Producto</button>


			</form>


			<?php



				if(isset($_POST['actualizar'])){
						
						$actualizarPrincipal = new ControladorProducto();
						$actualizarPrincipal->ctrActualizarImagenPrincipal();

				}else if(isset($_POST['actualizar1'])){
						
						$actualizarImagen1 = new ControladorProducto();
						$actualizarImagen1->ctrActualizarImagenes1();

				}else if(isset($_POST['actualizar2'])){


					$actualizarImagen2 = new ControladorProducto();
					$actualizarImagen2->ctrActualizarImagenes2();
				}

				else if(isset($_POST['actualizar3'])){

					$actualizarImagen = new ControladorProducto();
					$actualizarImagen->ctrActualizarImagenes();


				}






			if(isset($_POST['actualizarProducto'])){

			$actualizarProducto = new ControladorProducto();
			$actualizarProducto->ctrActualizarProducto();

			
			}


		

			?>

	

		</div>


		<div class="box-footer">


			<button type="button" id="eliminarProducto"  class="btn btn-danger">Eliminar Producto</button>
	

		</div>

			<?php

			
				
				$borrarProducto = new ControladorProducto();
				$borrarProducto->ctrEliminarProducto();
			
				
		
			?>	


	</div>

</div>

