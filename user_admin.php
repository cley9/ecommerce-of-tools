<?php
session_start();

if (!isset($_SESSION['nombre'])) {
  header('Location: login.php');
}
elseif(isset($_SESSION['nombre'])){
  include 'model/cn.php';
require_once('includes/head_.php');

}else{echo "Error en el sistema";}
?>

  <div class="container">
    <div class="row">


      <script type="text/javascript">
    //    alert('fjadjf');
    Swal.fire(
      {
        title:'Bienvenido <?php echo $_GET['response.message']; ?>',
      //title:'Bienvenido <?php //echo $_SESSION['nombre'] ; ?>',
      //title:'mensaje',
      position:'center',
      icon:'success',
      timer:1000
    }
  );
  //return false;
    	//swal('Eliminado!', response.message, response.status);

      </script>
      <h1 class="text-center ">Bienvenido <?php echo $_SESSION['nombre'] ; ?></h1>
      <div class="col-3">
        <a href="crud.php?exit" class="btn btn-primary">Cerrar Sesión <i class="bi bi-power text-blued" width="5rem" height="2rem"></i></a>
      </div>
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
    <script type="text/javascript">
    function validar(){
      var respuesta=confirm("Estas seguro de deseos elimimar al usuario ")
    if (respuesta == true) {
      return true;
    } else {
        return false;
    }

    }
    </script>
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
<?php
include("includes/footer_.php");
?>
