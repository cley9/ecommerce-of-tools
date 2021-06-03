
<?php
include('includes/head_.php');
    ?>


    <?php

    class misClas {
    //atributos
    public $atributoUno;
    public $atributoDos;
    public $CataloProducto;


  public function tabla(){
    ?>
    <div class="container">
      <div class="row">


  <div  class="col-md-4 col-lg-3 card d-none d-sm-none d-md-block " >
  <div class="card-header text-center"><small class="h3 ">Productos</small> </div>
  <ul class="list-group list-group-flush">

    <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck1">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck1"> Perfil de Aluminio </label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck2">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck2"> Perfil de Plastico </label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck3">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck3"> Fragua </label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck4">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck4"> Pegamento </label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck5">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck5"> Cantoneras </label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck6">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck6"> Niveladores</label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck7">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck7"> Tubo de Agua</label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck8">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck8"> Tubo de Desague(Nicol)</label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck9">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck9"> Tubo de Luz</label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck10">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck10"> Caños de Cosina</label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck11">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck11"> Caño Lavatorio Nacional  </label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck12">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck12"> Caño Lavatorio Importado </label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck13">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck13"> Caño de Jardin </label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck14">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck14"> Ocre Bayer</label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck15">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck15"> Tapas de Desague PVC</label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
<div class="  list-group-item  align-items-center  d-flex bd-highlight ">
<input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck16">
<label class="form-check-label p-1 bd-highlight"  for="exampleCheck16"> One Piece</label>
<h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
</div>
  </ul>
</div>




</div>
</div>


<div class="container-fluid shadow">

<div class="row bg-success">


    <div  class="col-md-4 col-lg-3 card d-none d-sm-none d-md-block " >
    <div class="card-header text-center"><small class="h3 ">Productos</small> </div>
    <ul class="list-group list-group-flush">

      <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
    <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck1">
    <label class="form-check-label p-1 bd-highlight"  for="exampleCheck1"> Perfil de Aluminio </label>
    <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck2">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck2"> Perfil de Plastico </label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck3">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck3"> Fragua </label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck4">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck4"> Pegamento </label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck5">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck5"> Cantoneras </label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck6">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck6"> Niveladores</label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck7">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck7"> Tubo de Agua</label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck8">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck8"> Tubo de Desague(Nicol)</label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck9">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck9"> Tubo de Luz</label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck10">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck10"> Caños de Cosina</label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck11">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck11"> Caño Lavatorio Nacional  </label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck12">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck12"> Caño Lavatorio Importado </label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck13">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck13"> Caño de Jardin </label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck14">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck14"> Ocre Bayer</label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck15">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck15"> Tapas de Desague PVC</label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck16">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck16"> One Piece</label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>
    </ul>
  </div>



  <?php
  }

    public function miMetodo($CataloProducto,$atributoUno,$atributoDos){



      //echo " nomrbre del producto  ".$CataloProducto."-------s".$atributoUno."  ----> ".$atributoDos;

          if(!empty($CataloProducto)){
            include('model/cn.php');
              $busqueda = $CataloProducto ;
              $sql = "SELECT * FROM tbl_producto WHERE db_nombre LIKE '%".$busqueda."%'";// busqueda sql
            //  $result = mysqli_query($conn,$sql);
              $stmt=$DB_con->prepare($sql);
              $stmt->execute(array());
              ?>

                <div class="col-9">

              <div class="row  row-cols-2  row-cols-md-5 ">







                <!--- col-12 col-sm-6 col-lg-3 -->
              <?php
              while ($item=$stmt->fetch(PDO::FETCH_ASSOC)) {
              //while($item = mysqli_fetch_assoc($result)){// recorrido de while
              ?>



                  <div class="      pt-4 mb-4 bg-primary">
                    <div class="card shadow" >
                      <img src="imagenes/<?php echo $item['db_imagen']; ?>"/>

<!--
<small class="h4 text-center"> Lista de producto </small> <br><br>

    row-cols-1 row-cols-md-3 g-4      data de row
                      <div class="card-body d-none d-sm-none d-md-block    d-flex justify-content-between align-items-center">
                    -->
                    <div class="card-body justify-content-between align-items-center">

                        <div class="d-flex justify-content-between align-items-center" >
                          <h6 class=" text-left"><?php echo $item['db_nombre']; ?></h6>
                          <h6 class=" text-end"><?php echo  $item['db_precio']; ?></h6>
                        </div>  <hr>
                        <div class="text-center">
                          <button type="button" class="btn btn-primary " >Agregar </button>
                        </div>
                      </div>
                    </div>
                  </div>





              <?php
            }
              ?>
            </div>
        </div>
        </div>
              <?php
          }

    }

  };
    $miObjetoUno = new misClas;
    ///
    $tablaCatalogo = new misClas;
    $tablaCatalogo->tabla();
$factor='tuerca';
$miObjetoUno-> miMetodo($factor,"alaex ufadf",30);
$catProducto2='dfa';
$miObjetoUno-> miMetodo($catProducto2,"alaex ufadf",30);
$catProducto3='sffa';

$miObjetoUno-> miMetodo($catProducto3,"alaex ufadf",30);

echo "------------------------------------------------------------------------------------------>";
?> <div class="d">
  <form class="" action="" method="post">
    <a href="?nameCatalogo=negro">negro</a><br><br>
    <a href="?nameCatalogo=red">rojo</a><br><br>
    <a href="?nameCatalogo=gris">gris</a><br><br>
    <!--<input type="submit" name="gris" value="gris">-->
  </form>
</div>
<?php
if (isset($_GET['nameCatalogo'])) {
  $resivirCatalogo=$_GET['nameCatalogo'];
  $miObjetoUno-> miMetodo($resivirCatalogo,"alaex ufadf",30);
  // code...
} else {
  // code...
  ?><h2>seleccione el catalo de Producto</h2><?php
}


include('includes/footer_.php');
?>
