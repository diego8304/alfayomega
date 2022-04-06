

<?php


$url=Ruta::ctrRutaServidor();

$consulta=controladorBanner::ctrConsultarBanner();


?>



<div class="box box-primary">

	<!---Administrar Categorias--->

	<div class="box-header with-border">

		<h3 class="box-title">Slide</h3>

		<div class="box-tools pull-right">

			<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">

				<i class="fa fa-minus"></i>

			</button>

		</div>


	</div>

	<div class="box-body">


		<div class="panel-body">


			<form method="post"  enctype="multipart/form-data" >

				<br>


				<label>CARGAR IMAGENES SLIDE</label>


				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Inagen 1</h3>
					</div>
					<div class="box-body">
						<input type="file" id="subirFotosBanner1" name="datosImagenBanner1" >

						<p class="help-block">Tamaño recomendado 500px * 100px</p>

						<p class="pull-right">
							<img src="<?php echo $url.$consulta[0][1] ?>" class="previsualizarLogoBanner1" width="500px" height="300px" >
						</p>
					</div>
				<input type="hidden" name="producto" id="idproducto" value="">
				<div class="checkbox ">
					<label>
						<input type="hidden" name="Banner1" id="Banner1" value="1">	

						<input type="checkbox" class="valorProducto" name="valorBanner1" visible="" value="">
						Visible
					</label>
				</div>

				<br>

					<button type="submit" name="actualizarBanner1" class="btn btn-primary ">Actualizar Imagen</button>
					<!-- /.box-body -->
				<br>

				</div>
				
				<hr>

				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Imagen 2</h3>
					</div>
					<div class="box-body">
						<input type="file" id="subirFotosBanner2" name="datosImagenBanner2" >

						<p class="help-block">Tamaño recomendado 500px * 100px</p>

						<p class="pull-right">
							<img src="<?php echo $url.$consulta[1][1] ?>" class="previsualizarLogoBanner2" width="500px" height="300px">
						</p>
					</div>
				
				<div class="checkbox ">
					<label>
						<input type="hidden" name="Banner2" id="Banner2" value="2">	
						<input type="checkbox" class="valorProducto" name="valorBanner2" visible="" value="">
						Visible
					</label>
				</div>

				<br>
					<button type="submit" name="actualizarBanner2" class="btn btn-primary ">Actualizar Imagen</button>

				<br>
			
				</div>

			 <hr>

			 <div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Inagen 3</h3>
					</div>
					<div class="box-body">
						<input type="file" id="subirFotosBanner3" name="datosImagenBanner3" >

						<p class="help-block">Tamaño recomendado 500px * 100px</p>

						<p class="pull-right">
							<img src="<?php echo $url.$consulta[2][1] ?>"class="previsualizarLogoBanner3" width="500px" height="300px">
						</p>
					</div>

					<div class="checkbox ">
					<label>
						<input type="hidden" name="Banner3" id="Banner3" value="3">	
						<input type="checkbox" class="valorProducto" name="valorBanner3" visible="" value="">
						Visible
					</label>
				</div>

				<br>

					<button type="submit" name="actualizarBanner3" class="btn btn-primary ">Actualizar Imagen</button>

				<br>

				</div>

				<input type="hidden" name="idCategoria" id="idCategoria" value="">
				<input type="hidden" name="idTipo" id="idTipo" value="">
				<input type="hidden" name="idSubcategoria" id="idSubcategoria" value="">



			



			</form>



			<?php

				
			if(isset($_POST['actualizarBanner1'])){


				$guardarImagen1 = new ControladorBanner();
				$guardarImagen1->ctrGuardarImagenBanner();

			}else if(isset($_POST['actualizarBanner2'])){

	
				$guardarImagen2 = new ControladorBanner();
				$guardarImagen2->ctrGuardarImagenBanner();

			
			}else if(isset($_POST['actualizarBanner3'])){

	
				
				$guardarImagen3 = new ControladorBanner();
				$guardarImagen3->ctrGuardarImagenBanner();

			}


?>

			




		</div>


		<div class="box-footer">


		</div>

		


	</div>

</div>

