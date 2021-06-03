
<?php
//session_start();
if (!isset($_SESSION['nombre'])) {
  header('Location: login.php');
}
 ?>
<div class="text-center">

  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modelAgregar" data-bs-whatever="@fat" data-bs-backdrop="static" data-bs-keyboard="false" >Agregar Producto</button>
</div>



<div class="modal fade" id="modelAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title " id="exampleModalLabel">Agregar Producto 2020 </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post"  action="crud.php" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
            <input type="text" name="producto_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el nombre del producto">
          </div>


          <div class="mb-3">
            <label for="message-text" class="col-form-label">Precio del Producto:</label>
            <input type="text" name="producto_pre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el precio del producto">
            <!--<textarea class="form-control" id="message-text"></textarea>-->
          </div>
            <div class="mb-3">
                  <label for="message-text" class="col-form-label">Foto del Producto</label>
                  <input type="file" class="form-control" id="archvio" aria-describedby="fileHelp" name="producto_image">
                </div>


                <!--<input type="hidden" name="oculto" value="">-->

                <div class="modal-footer">

                  <input type="submit" class="btn btn-primary" name="btnsave" id="btn_alert__save_" value="Guardar">
                  <button type="reset" class="btn btn-warning">Borrar</button>
                  <a href="user_admin.php" class="btn btn-success" >Salir</a>
                </div>


        </form>
      </div>

    </div>
  </div>
</div>
