<?php

include("includes/head_.php");
include("crud.php");
?>
<?php // COMBAK:  ?>
		<div class="modal-dialog shadow">
			<div class="modal-content">
				<div class=" text-center p-2 ">
					<h5 class="modal-title card-header " id="exampleModalLabel">Editar Producto </h5>
				</div>
				<div class="modal-body">
					<form method="post" action=""  enctype="multipart/form-data">
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
							<input type="text" name="producto_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $db_nombre; ?>">
						</div>
						<div class="mb-3">
							<label for="message-text" class="col-form-label">Precio del Producto:</label>
							<input type="text" name="producto_pre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $db_precio; ?>" required />
						</div>

						<div class="mb-3 text-center">
							<td><p><img src="imagenes/<?php echo $db_imagen; ?>" height="150" width="150" /></p>
						</div>
						<div class="mb-3">
										<label for="message-text" class="col-form-label">Foto del Producto</label>
										<input type="file" class="form-control" id="archvio" aria-describedby="fileHelp" name="producto_image"  accept="image/*" />
									</div>

									<div class="modal-footer">

										<input type="submit" class="btn btn-primary" name="btn_save_updates"  id="btn_alert__save" value="Guardar">
										<button type="reset" class="btn btn-warning">Borrar</button>
										<a href="user_admin.php" class="btn btn-success" >Salir</a>
									</div>


					</form>
				</div>

			</div>
		</div>




		<?php
		include("includes/footer_.php");
		?>
