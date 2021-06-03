
<?php//
//include("includes/head.php");
//include("model/cn.php");
include("crud.php");
//include("edit_2020.php");



 ?>

<div class="text-center">
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modelAgregar_" data-bs-whatever="@fat">Agregar edit</button>
</div>


<div class="modal fade" id="modelAgregar_" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">





      <div class="modal-header ">
        <h5 class="modal-title " id="exampleModalLabel">Editar Producto 2020</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
            <!--<textarea class="form-control" id="message-text"></textarea>-->
          </div>

          <div class="mb-3 text-center">
            <p><img src="imagenes/<?php echo $db_imagen; ?>" height="150" width="150" /></p>
          </div>

                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Foto del Producto</label>
                  <input type="file" class="form-control" id="archvio" aria-describedby="fileHelp" name="producto_image"  accept="image/*" />
                </div>











                <!--<input type="hidden" name="oculto" value="">-->

                <div class="modal-footer">

                  <input type="submit" class="btn btn-primary" name="btnsave" value="Guardar">
                  <button type="reset" class="btn btn-warning">Borrar</button>
                  <a href="user_admin.php" class="btn btn-success" >Salir</a>
                </div>


        </form>
      </div>

    </div>
  </div>
</div>
