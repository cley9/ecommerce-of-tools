
<div class="text-center">

	<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar" >editar </button>

</div>

<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title " id="exampleModalLabel">Editar Producto 2020</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="crud.php"  enctype="multipart/form-data">








          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
            <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $Imagen_Marca; ?>">
          </div>


          <div class="mb-3">
            <label for="message-text" class="col-form-label">Descripcion del Producto:</label>
            <input type="text" name="user_job" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $Imagen_Tipo; ?>" required />
            <!--<textarea class="form-control" id="message-text"></textarea>-->
          </div>

          <div class="mb-3">
            <td><p><img src="imagenes/<?php echo $Imagen_Img; ?>" height="150" width="150" /></p>
          </div>


<!--
                     <div class="mb-3">
                       <label for="message-text" class="col-form-label">Precio del Producto  $/.</label>
                      <input type="text" name="preProducto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>-->


                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Foto del Producto</label>
                  <input type="file" class="form-control" id="archvio" aria-describedby="fileHelp" name="user_image"  accept="image/*" />
                </div>


                <!--<input type="hidden" name="oculto" value="">-->

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send message</button>

                  <input type="submit" name="btn_save_updates" value="Guardar">
                  <button type="reset" class="btn btn-warning">Borrar</button>
                  <a href="admin.php" class="btn btn-success" >Salir</a>
                </div>


        </form>
      </div>
      <!--
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>-->

    </div>
  </div>
</div>
