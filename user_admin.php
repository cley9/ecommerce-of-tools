<?php
session_start();

if (!isset($_SESSION['nombre'])) {
  header('Location: login.php');
}
elseif(isset($_SESSION['nombre'])){
  include 'model/cn.php';
require_once('includes/head_.php');

}else{echo "Error en el sistema";}


if (isset($_SESSION['message'])) {?>
<script type="text/javascript">
Swal.fire({
 icon: 'error',
 title: '<?= $_SESSION['message']; ?>',
 //title:'Bienvenido <?php //echo $_SESSION['nombre'] ; ?>',
 // title:'Bienvenido <?php// echo $_GET['response.message']; ?>',


 text: 'Vuelva a interntarlo!',
 showConfirmButton: false,
 timer: 3000

})

</script>


<?php session_unset(); } ?>

<!-- --------------------------------------------------------------------------------------------------° -->
  <div class="container">
    <div class="row">
      <h2><?php echo $_SESSION['nombre'] ; ?></h2>
      <script type="text/javascript">
      var factory=  "<?php echo $_SESSION['nombre'] ; ?>";
      Swal.fire({
       icon: 'success',
       // title: '<? //echo $_SESSION['nombre']; ?>',
       title:  ' Bienvenido '+factory,

       //title:'Bienvenido <?php //echo $_SESSION['nombre'] ; ?>',
       // title:'Bienvenido <?php// echo $_GET['response.message']; ?>',


       text: 'Ahora puedes gestionar los datos !',
       showConfirmButton: false,
       timer: 3000

      })

      </script>

      <h1 class="text-center ">Bienvenido <?php// echo $_SESSION['nombre'] ; ?></h1>
      <div class="col-3">
        <a  onclick="end('<?php echo $_SESSION['nombre'] ; ?>')" class="btn btn-primary">Cerrar Sesión <i class="bi bi-power text-blued" width="5rem" height="2rem"></i></a>
      </div>
      <script type="text/javascript">
      // --------------------------------------------------------------------------------------msg-cerrar-sesion

      function end(user) {
      Swal.fire({
          title: '¿ Estas seguro de cerrar sesión '+user+' ?',
          icon: 'info',
          showCancelButton: true,
          confirmButtonColor: '#48C9B0',
          cancelButtonColor: '#EC7063',
          confirmButtonText: 'Confirmar'
        }).then((msg_exit) => {
          if (msg_exit.isConfirmed) {
             window.location.href ="crud.php?exit";

          }
      });
      }


      </script>
      <div class="col-6">
        <?php include('agregar.php');?>
      </div>
      <div class="col-3 text-end">
        <a href="ImpFactura/impFactura.php" class="btn btn-secondary " target="_blank">Generar Factura</a>
        </div>
    </div>
  </div>
<hr>
<style media="screen">/*
table.table-hover tbody tr td:hover {
  background-color: #fb9692;
}
*/
table.table-hover tbody tr:hover {
  background: #FFF8D5 ;
}
</style>
<div class="container"><br>
  <div class="row">
    <?php
	//if($stmt->rowCount() > 0){
		?>

		<div class="col-md-12">
  			<table class="table table-bordered text-center table-hover">
		<thead class="table-primary">
		<th>id</th>
		<th>Producto</th>
    <!--<th>Descripcion</th>-->
    <th>Precio</th>
		<th>Foto</th>
		<th>Editar</th>
		</thead>
		<tbody>

      <?php
      $stmt = $DB_con->prepare("SELECT * FROM tbl_producto ORDER BY db_id DESC ");
      $stmt->execute();
      $producto_id_ = $stmt->fetchAll(PDO::FETCH_ASSOC);

       foreach ($producto_id_ as $row ){ //extract($row);	?><!---->
          <tr>
            <td><?php echo $row['db_id'] ?></td>
            <td><?php echo $row['db_nombre']; //$db_nombre; ?></td>
            <td>s/.<?php echo $row['db_precio'];// $db_precio;?></td>
              <td><img src="imagenes/<?php echo $row['db_imagen']; ?>" class="img-fluid" width="200px"/></td>
                <td>
                  <a href="editar.php?edit_id=<?php echo $row['db_id']; ?>"  class="btn btn-warning"> <i class="bi bi-pencil"></i></a>

<a   onclick="confirmar('<?php echo $row['db_id']; $row['db_imagen']; ?>')" class="btn btn-danger"> <i class="bi bi-trash"></i></a>

                </td>
          </tr>

      <?php	}	?>

</table>

  </div>
</div>
</div>
<script type="text/javascript">
function confirmar(dato , ima) {
Swal.fire({
    title: '¿Estas seguro de eliminar ?'+ima+".jpg",
    // icon: 'warning',
    // background: 'url(/img/user1.png)',
    // imageUrl: 'https://unsplash.it/400/200',
    // imageUrl: 'img/mapa.gif',
    // imageUrl: 'imagenes/<?php //echo $row['db_imagen']; ?>',
    imageUrl: 'imagenes/'+ima+'.jpg',

    imageWidth: '90px',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#6c757d',
    confirmButtonText: 'Confirmar'
  }).then((result) => {
    if (result.isConfirmed) {
       window.location.href ="crud.php?delete_id="+dato;

    }
});
};


</script>




<!-- <script src="js/funcion-msg.js" charset="utf-8"></script> -->

<?php
include("includes/footer_.php");
?>
