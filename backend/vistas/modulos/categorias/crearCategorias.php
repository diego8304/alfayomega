<?php


ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


$id=null;

$respuesta=ControladorProducto::ctrMostrarProductos($id);   

?>


<div class="box box-primary">

	<!---Administrar Categorias--->

	<div class="box-header with-border">

		<h3 class="box-title">Categorias</h3>

		<div class="box-tools pull-right">

			<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">

				<i class="fa fa-minus"></i>

			</button>

		</div>


	</div>

	<div class="box-body">

		<form method="post"  enctype="multipart/form-data">

			<label>Nombre Categoria</label>

			<input type="text" class="form-control" id="nombreC" name="nombreC" value="" placeholder="Enter ...">


			<label>Descripcion Categoria</label>

			<textarea class="form-control"  rows="3" id="descripcionC" name="descripcionC" value="" placeholder="Enter ..."></textarea>

			<hr>


			<label>Productos Nuevos de la Categoria </label>

			<div class="checkbox ">
				<label>
					 <input type="checkbox" class="nuevoProducto" name="nuevoProducto" visible="" value="">
                    Mostrar Categoria en Productos Nuevos.
				</label>
			</div>

			<hr>

			<input type="file" id="subirFotos" name="datosImagen">
            
            <p class="help-block">Tamaño recomendado 500px * 100px</p>


			<div class="checkbox ">
				<label>
					 <input type="checkbox" class="valorCategoria" name="valorCategoria" visible="" value="">
                   Categoria visible.
				</label>
			</div>

			<hr>

			<p class="pull-right">

				<img class="previsualizarLogo" width="200px" height="200px">

			</p>

			
			<button type="submit" class="btn btn-primary ">Guardar Categoria</button>

		</form>


			<?php

				$guardarCategoria = new ControladorProducto();
				$guardarCategoria->ctrGuardarNuevaCategoria();

			?>
			

	</div>

</div>

	<div class="box-footer">

		

	</div>

