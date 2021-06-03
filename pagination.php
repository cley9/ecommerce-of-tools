
<?php
//include("includes/head_.php");
include( "model/cn.php");
$productosPorPagina = 16;
$pagina = 1;
if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
}
$limit = $productosPorPagina;
$offset = ($pagina - 1) * $productosPorPagina;
$sentencia = $DB_con->query("SELECT count(*) AS conteo FROM tbl_producto");
$conteo = $sentencia->fetchObject()->conteo;
$paginas = ceil($conteo / $productosPorPagina);
$sentencia = $DB_con->prepare("SELECT * FROM tbl_producto LIMIT ? OFFSET ?");
$sentencia->execute([$limit, $offset]);
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<?php
//require_once('carusel_producto.php'); ?>
<div class="container pt-4">
<div class="row"><!--
  <div class="text-center bg-warning rounded-3 pt-2 mb-3"  style="height:50px;">
    <small class="h4 ">Lista de </small>
  </div>--->

<?php
foreach ($productos as $item_pro ){// extract($row); ?>
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

<div class="container ">
    <div class="col-xs-12 ">
          <nav aria-label="Page navigation example ">
            <ul class="pagination    d-flex justify-content-center">
                <!-- Si la página actual es mayor a uno, mostramos el botón para ir una página atrás -->
                <?php if ($pagina > 1) { ?>
                    <li class="page-item">
                        <a class="page-link" href="./index.php?pagina=<?php echo $pagina - 1 ?>">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                <?php } else {?>
                   <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <span aria-hidden="true">&laquo;</span>

                      </a>
                    </li>
                    <?php  } ?>
                <!-- Mostramos enlaces para ir a todas las páginas. Es un simple ciclo for-->
                <?php for ($x = 1; $x <= $paginas; $x++) { ?>
                    <li class=" page-item <?php if ($x == $pagina) echo "active" ?>">
                        <a class="page-link" href="./index.php?pagina=<?php echo $x ?>">
                            <?php echo $x ?></a>
                    </li>
                <?php  } ?>
                <!-- Si la página actual es menor al total de páginas, mostramos un botón para ir una página adelante -->
                <?php if ($pagina < $paginas) { ?>
                    <li class="page-item">
                        <a class="page-link" href="./index.php?pagina=<?php echo $pagina + 1 ?>">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <?php
                  } else { ?>
                       <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                              <span aria-hidden="true">&raquo;</span>

                            </a>
                          </li>
                          <?php  }  ?>
            </ul>
        </nav>
    </div>
  </div>
