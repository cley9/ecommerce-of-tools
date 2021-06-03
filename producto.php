
<?php
include('includes/head_.php');
include('pushBusqueda.php');

?>



<nav class="navbar bg-light  d-block d-sm-block d-md-none">
  <div class="container-fluid  ">

      <small class="  h6"> Seleccione Producto : </small>

    <form class="" id="multi-filters" method="post">
      <div class="row row-cols-2 row-cols-md-4  ">

        <div class="col ">
          <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck1"  name="db_nombre[]" value="Perfil de Aluminio">
          <label class="form-check-label p-1 bd-highlight"  for="exampleCheck1">Perfil de Aluminio</label>

        </div>

          <div class="col ">
            <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck2" name="db_nombre[]" value="Fragua">
            <label class="form-check-label p-1 bd-highlight"  for="exampleCheck2">  Fragua </label>
          </div>
          <div class="col ">
            <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck3" id="type_3" name="db_nombre[]" value="Pegamento">
            <label class="form-check-label p-1 bd-highlight"  for="exampleCheck3">Pegamento </label>
          </div>
          <div class="col ">
            <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck4" id="type_3" name="db_nombre[]" value="Cantoneras">
            <label class="form-check-label p-1 bd-highlight"  for="exampleCheck4">Cantoneras </label>
          </div>
          <div class="col ">
            <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck5" id="type_3" name="db_nombre[]" value="Tubo de Agua">
            <label class="form-check-label p-1 bd-highlight"  for="exampleCheck5">Tubo de Agua </label>
          </div>
          <div class="col ">
            <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck6" id="type_3" name="db_nombre[]" value="Tubo de Luz">
            <label class="form-check-label p-1 bd-highlight"  for="exampleCheck6">Tubo de Luz </label>
          </div>


      </div>



    </form>
  </div>
</nav>



<div class="container-fluid p-4 ">
  <div class="row  ">
   <div class="col-1 col-md-4 col-lg-3  d-none d-sm-none d-md-block ">




     <form class="" id="multi-filters"  method="post">

     <div  class="col-md-12  card bg-info " >
      <!-- <div  class="col-md-4 col-lg-3 card d-none d-sm-none d-md-block bg-info " >-->

     <div class="card-header text-center"><small class="h3 ">Productos</small> </div>
     <ul class="list-group list-group-flush">
     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck1"  name="db_nombre[]" value="Perfil de Aluminio">
     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck1">Perfil de Aluminio</label>
     <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >1</h7>
     </div>
     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck2" name="db_nombre[]" value="Fragua">
     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck2">  Fragua </label>
     <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >2</h7>
     </div>
     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck3" id="type_3" name="db_nombre[]" value="Pegamento">
     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck3">Pegamento </label>
     <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >3</h7>
     </div>


     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck4" id="type_3" name="db_nombre[]" value="Cantoneras">
     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck4">Cantoneras </label>
     <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >4</h7>
     </div>

     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck5" id="type_3" name="db_nombre[]" value="Tubo de Agua">
     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck5">Tubo de Agua </label>
     <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >5</h7>
     </div>

     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck6" id="type_3" name="db_nombre[]" value="Tubo de Luz">
     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck6">Tubo de Luz </label>
     <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >6</h7>
     </div>

   </ul> <br>
     </div>

     </form>
   </div>

   <div class="col-md-9">
     <div class="text-center ">  <small class="h4  ">Lista de Producto</small></div>
     <div class="row  row-cols-2  row-cols-md-5 " id="filters-result" class="bg-white">
     </div>
   </div>

  </div>
</div>
<!--
<div class="container-fluid pt-4 mb-3  ">

</div>
<div class="container pt-4 mb-3 shadow ">

  <div class="text-center bg-warning">  <small class="h4  ">Lista de Producto_20</small></div>
<div class="row  row-cols-2  row-cols-md-5 " id="filters-result" class="bg-white">




</div>
</div>-->



<?php


//echo "------------------------------------------------------------------------------------------>";

    class misClas {
    //atributos
    public $nameListaProducto;
      public function listaProducto($nameListaProducto){

          if(!empty($nameListaProducto)){
            include('model/cn.php');
              $busqueda = $nameListaProducto ;
$sql = "SELECT * FROM tbl_producto WHERE db_nombre LIKE '%".$busqueda."%'";// busqueda sql
            //  $result = mysqli_query($conn,$sql);
              $stmt=$DB_con->prepare($sql);
              $stmt->execute(array());
              ?>

              <div class="container pt-4 mb-3 ">

                <div class="text-center bg-warning rounded-3 pt-2" style="height:50px;">
                  <small class="h4 ">Lista de <?php echo $nameListaProducto; ?> </small>
                </div>
              <div class="row  row-cols-2  row-cols-md-5 ">
                <!--- col-12 col-sm-6 col-lg-3 -->
              <?php
              while ($item=$stmt->fetch(PDO::FETCH_ASSOC)) {
              //while($item = mysqli_fetch_assoc($result)){// recorrido de while
              ?>
              <div class="pt-4 mb-4 ">
                    <div class="card shadow"  >
                      <img src="imagenes/<?php echo $item['db_imagen']; ?>"/>
                      <div class="card-body justify-content-between align-items-center">

                        <div class="d-flex justify-content-between align-items-center" >
                          <h6 class=" text-left"><?php echo $item['db_nombre']; ?></h6>
                          <h6 class=" text-end">s/.<?php echo  $item['db_precio']; ?></h6>
                        </div>  <hr>
                        <div class="text-center">
                          <button type="button" class="btn btn-primary " >Agregar</button>

                        </div>
                      </div>
                    </div>
                  </div>              <?php
            }
              ?>
        </div>
        </div>
              <?php
          }

    }

  };
    $firstObjeto= new misClas;
    //$tablaCatalogo = new misClas;
   if (isset($_GET['listProName'])) {
     // code...
           $listaProductoBusqueda=$_GET['listProName'];
    // echo "holal"."  ".$listaProductoBusqueda;
     $firstObjeto-> listaProducto($listaProductoBusqueda,"alaex ufadf",30);

   }
   else {
   }
    $listaProductoBusqueda='tuerca';
    $firstObjeto-> listaProducto($listaProductoBusqueda,"alaex ufadf",30);

//echo "------------------------------------------------------------------------------------------>";
?>



<!---
--->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/button.js" charset="utf-8"></script>
<?php


include('includes/footer_.php');
?>
