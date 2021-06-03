
<?php
//session_start();
/*if (!isset($_SESSION['nombre'])) {
  header('Location: login.php');
}*/
 ?><!--
<div class="text-center">

  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modelDelete" data-bs-whatever="@fat" data-bs-backdrop="static" data-bs-keyboard="false" >delete</button>
</div>-->

<?php include('delete.php'); ?>
<!-- <a href="delete.php?delete_id=<?php echo $row['db_id']; ?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modelDelete"  data-bs-backdrop="static" data-bs-keyboard="false" >d</a> -->



<div class="modal fade" id="modelDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title " id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post"  action="crud.php" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
          </div>




                <!--<input type="hidden" name="oculto" value="">

                <input type="submit" class="btn btn-primary" name="crud.php?delete_id=delete_id_" id="btn_alert__save_" value="si">
              -->

                <div class="modal-footer">
                    <a href="crud.php?delete_id=<?php echo $row['db_id']; ?>"  class="btn btn-primary">si elei </a>
                  <button type="reset" class="btn btn-warning">can</button>
                </div>


        </form>
      </div>

    </div>
  </div>
</div>
