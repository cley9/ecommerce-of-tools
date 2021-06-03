<?php
//include('includes/head_.php');
class slider {
  //atributos
  public $nameBusqueda;
public function sliderProducto($nameBusqueda){
        if(!empty($nameBusqueda)){
          include('model/cn.php');
            $busqueda = $nameBusqueda ;
            $sql = "SELECT * FROM tbl_producto WHERE db_nombre LIKE '%".$busqueda."%'";// busqueda sql
          //  $result = mysqli_query($conn,$sql);
          $sql .= "LIMIT 4";//es el limite que aparecera al momento de escribir 5 le puse

            $stmt=$DB_con->prepare($sql);
            $stmt->execute(array());
            ?><div class="row "> <?php
            while ($item=$stmt->fetch(PDO::FETCH_ASSOC)) {
            //while($item = mysqli_fetch_assoc($result)){// recorrido de while
            ?>

                    <div class="col-3">
                    <div class="card shadow" >
                      <img src="imagenes/<?php echo $item['db_imagen']; ?>"/>
                      <div class="card-body d-none d-sm-none d-md-block    d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center" >
                            <h6 class=" text-left"><?php echo $item['db_nombre']; ?></h6>
                          <h6 class=" text-end">s/ <?php echo  $item['db_precio']; ?></h6>
                        </div>  <hr>
                        <div class="text-center">
                          <button type="button" class="btn btn-primary " >Agregar </button>
                            </div>
                    </div>
                    </div>
                    </div>
                  <?php }?>
          </div> <?php
        }
      }
    }
    // objetos instanciado
$objFirst = new slider;
/*
$nomeBuscando='Martillo';
$objFirst-> sliderProducto($nomeBuscando);*/
?>

<main>
<div class="container" >
  <h6 class="display-6">¡No los dejes ir!</h6>

  <div class="row ">
<div class="col-1"></div>
    <div class="col-10">
      <div class="card-none">
        <?php // COMBAK:  ---------------------------------------------------------------------------------------?>
  <div id="carouselExampleIndicators_" class="carousel slide mt-4 mb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
    <?php
    $nomeBuscando='tubo';
    $objFirst-> sliderProducto($nomeBuscando);
    ?>
  </div>
    <div class="carousel-item">
      <?php
       $nomeBuscando='Tapa';
      $objFirst-> sliderProducto($nomeBuscando);
      ?>
    </div>
    <div class="carousel-item">
      <?php
      $nomeBuscando='cinta';
      $objFirst-> sliderProducto($nomeBuscando);
      ?>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators_"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators_"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</main>
</div>
</div>
<div class="col-1">  <div class="">  </div></div>
</div>
</div>
</div>





<!-- ----------------------------------------------------------------------------------------------------------slayder_end--->
