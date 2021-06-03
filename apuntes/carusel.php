<?php
include 'model/cn.php';
include("includes/head.php");
$stmt = $DB_con->prepare('SELECT db_id, db_nombre, db_precio, db_imagen FROM tbl_producto ORDER BY db_id DESC');
//  $producto = $stmt->fetchAll(PDO::FETCH_OBJ);
  $stmt->execute();

 ?>



<div id="carouselExampleCaptions" class="carousel slide slide_" data-bs-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="dado"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" ></li>
    <li data-bs-target="#carouselExampleCaptions"  data-bs-slide-to="2"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3">d</li>

</ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="imagenes/656178.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>


    <?php
    if($stmt->rowCount() > 0)
    {
       foreach ($stmt as $row ){
         extract($row);
         ?><!---->

    <div class="carousel-item" data-bs-interval="2000">
        <img src="imagenes/<?php echo $row['db_imagen']; ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>



          <?php } ?>
        <?php } ?>
      






    <div class="container">

    <div class="row">
    <?php
    if($stmt->rowCount() > 0)
    {
       foreach ($stmt as $row ){
         extract($row);
         ?><!---->
         <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-6 ">
           <div class="card shadow ">
             <!--<ul class="list-group list-group-flush text-center"><li class="list-group-item"><?php// echo $row['db_id'] ?></li></ul>
           --> <div class="">
               <img src="imagenes/<?php echo $row['db_imagen']; ?>" class="card-img-top" width="200px"/>
           </div>
             <div class="card-body">
               <h5 class="card-title"><?php echo $db_nombre; ?></h5>
               <p class="card-text">descripcion</p>
               <hr>
               <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                       <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                       <button type="button" class="btn btn-sm btn-outline-primary">Conprar</button>
                   </div>
                   <span><?php echo $db_precio;?></span>
               </div>
             </div>

           </div>

      </div>
    <?php } ?>
    </div>
    <?php } ?>
    </div>



  </div >
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
