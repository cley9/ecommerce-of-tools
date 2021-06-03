

<link rel="stylesheet" href="icono.css">
  <header class=" pt-4">

    <div class="container text-center h-100  d-flex justify-content-center align-items-center">
      <div class="col-8 col-md-5 ">
          <form action="" id="form" class="">
            <input type="search" name="busqueda" id="id_search" class="input-icono form-control me-2 rounded-pill " placeholder="Menu a buscarr..." >

          </form>
            </div>
              </div>
  </header>

   <div class="pt-4" id="response"> </div>



<?php  //esto no causa nada
    include_once('model/cn.php');
    if(!empty($_GET['busqueda'])){
      $busqueda = $_GET['busqueda'];
        $sql = "SELECT * FROM tbl_producto WHERE db_nombre LIKE '%".$busqueda."%'";// busqueda sql
      //  $result = mysqli_query($conn,$sql);
        $stmt=$DB_con->prepare($sql);
        $stmt->execute(array());
        ?>
        <div class="container">
          <div class="row">

        <?php
          while($item=$stmt->fetch(PDO::FETCH_ASSOC)) {
        //while($item = mysqli_fetch_assoc($result)){

            ?>
            <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-6 ">
              <div class="card shadow ">
                <!--<ul class="list-group list-group-flush text-center"><li class="list-group-item"><?php// echo $row['db_id'] ?></li></ul>
              --> <div class="">
              <img src="imagenes/<?php  echo $item['db_imagen']; ?>" class="card-img-top" width="200px"/>
              </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title"><?php echo $item['db_nombre'];  ?></h5>
                    <h7 class="text-end"><del><b>s/.0</b></del></h7>
                  </div> <hr>
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                          <button type="button" class="btn btn-sm btn-outline-primary">Conprar</button>
                      </div>
                      <span>s/.<?php echo $item['db_precio'];?></span>
                  </div>
                </div>
              </div>
         </div>

     <?php }?>

        </div>
      </div>
          <?php
    }
    if (!empty($_GET['busqueda'])) {//  para evitar error cuando se mande un mull

     $nombre= $_GET['busqueda'];
     $stmt = $DB_con->prepare("SELECT db_id FROM tbl_producto WHERE db_nombre = ? LIMIT 1;");
     $stmt->execute([$nombre]);
     # Ver cuántas filas devuelve
     $numeroDeFilas = $stmt->rowCount();
     # Si son 0 o menos, significa que no existe
     if ($numeroDeFilas <= 0) {
       //  echo "El producto de  nombre $nombre NO existe";
       ?>
       <div class="d-flex justify-content-center">
         <div class=" col-md-6 alert alert-warning alert-dismissible fade show " role="alert">
           <small class="h6 d-flex justify-content-center">Producto <?php echo $nombre ?>  no  encontrado</small>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
       </div>
       <?php
     }
     else {
       ?>  <div class="text-center">
         <!--<small class="">Producto  <?php //echo $nombre ?> encotrado</small>-->
       </div>
       <?php
     }
   } else {
     // code...
   }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
