<?php
session_start();

if (!isset($_SESSION['nombre'])) {
  header('Location: login.php');
}
elseif(isset($_SESSION['nombre'])){
  include 'model/cn.php';
//  include("includes/head.php");
require_once('includes/head_.php');
  //include("model_edit.php");
  //$stmt = $DB_con->prepare('SELECT db_id, db_nombre, db_precio, db_imagen FROM tbl_producto ORDER BY db_id DESC');
//  $stmt = $DB_con->prepare('SELECT * FROM tbl_producto ORDER BY db_id DESC');

//  $producto = $stmt->fetchAll(PDO::FETCH_OBJ);
 //$stmt->fetch(PDO::FETCH_ASSOC);
/*
 $stmt = $DB_con->prepare('SELECT * FROM tbl_producto ');
  	$stmt->execute();
*/

    /*// fetchAll() con PDO::FETCH_ASSOC
    $stmt = $DB_con->prepare("SELECT * FROM tbl_producto");
    $stmt->execute();
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($clientes as $cliente){
        echo $cliente['db_id'] . "<br>";
        //echo $cliente->db_id . "<br>";

    }*/
  /*  // fetchAll() con PDO::FETCH_OBJ
    $stmt = $DB_con->prepare("SELECT * FROM tbl_producto");
$stmt->execute();
$clientes = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($clientes as $cliente){
    echo $cliente->db_id . "<br>";
}*/


/*foreach ($producto_id_ as $cliente){
echo $cliente->db_id . "<br>";
}*/

}else{echo "Error en el sistema";}
?>

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
                <a href="editar.php?edit_id=<?php echo $row['db_id']; ?>"  class="btn btn-warning"><img src="icons\pencil.svg" width="30px" alt="" class="img-fluid" ></a>
                <a href="crud.php?delete_id=<?php echo $row['db_id']; ?>" id="btn_alert__delete_" class="btn btn-danger"><img src="icons\trash.svg" width="30px" alt="" class="img-fluid"> </a>
                 <?php include('delete.php'); ?>
                 <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modelDelete_" data-bs-whatever="@fat" data-bs-backdrop="static" data-bs-keyboard="false" >delete</button>
                 <a href="delete.php?delete_id=<?php echo $row['db_id']; ?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modelDelete"  data-bs-backdrop="static" data-bs-keyboard="false" >d</a>
                 <a href="delete.php?delete_id=<?php echo $row['db_id']; ?>">dfdf</a>

              </td>
        </tr>
    <?php	}	?>


</table>
	<?php// }else{}?>
  </div>
</div>
</div>

<?php
include("includes/footer_.php");
?>
