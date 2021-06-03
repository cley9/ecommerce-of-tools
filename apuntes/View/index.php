<?php
include 'model/cn.php';
include("includes/head_.php");
?><!--
<header class="text-center">

<nav>
    <form action="" id="form">
        <input type="text" name="busqueda" id="id_search" placeholder="Buscar...">
      <ul id="response"></ul>

    </form>
</nav>
</header>-->

<?php
include("pushBusqueda.php");
include("carusel_producto.php");
include("includes/whatssap.php");
$stmt = $DB_con->prepare('SELECT db_id, db_nombre, db_precio, db_imagen FROM tbl_producto ORDER BY db_id DESC');
//  $producto = $stmt->fetchAll(PDO::FETCH_OBJ);
  $stmt->execute();
?>


<div class="d-flex justify-content-center pt-3 mb-4">
<div class=" text-center col-md-10 col-10 bg-warning pt-2 rounded-3" style="height:60px;">
  <small class="h3 ">Productos en Stock </small>
</div>
</div>





<?php//require_once('carusel_producto.php'); ?>
<div class="container">
<div class="row">
<?php
foreach ($stmt as $item_pro ){// extract($row);

  ?>


      <!---->
         <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-6 ">
           <div class="card shadow ">
             <!--<ul class="list-group list-group-flush text-center"><li class="list-group-item"><?php// echo $row['db_id'] ?></li></ul>
           --> <div class="">
               <img src="imagenes/<?php echo $item_pro->db_imagen//$row['db_imagen']; ?>" class="card-img-top" width="200px"/>
           </div>
             <div class="card-body">
               <div class="d-flex justify-content-between align-items-center">
                 <h5 class="card-title"><?php echo $item_pro->db_nombre;//$db_nombre; ?></h5>
                 <h7 class="text-end"><del><b>s/.0</b></del></h7>
               </div> <hr>
               <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                       <button type="button" class="btn btn-sm btn-outline-primary">Conprar</button>
                   </div>
                   <span>s/.<?php echo $item_pro->db_precio;?></span>
               </div>
             </div>
           </div>
      </div>

<?php } ?>
</div>
<?php //} ?>
</div>


<?php // COMBAK:  -----------------------------------------------------------> ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<?php
include("includes/footer_.php");
 ?>
