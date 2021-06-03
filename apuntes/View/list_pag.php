
<?php
include("includes/head_.php");
include( "model/cn.php");
# Cuántos productos mostrar por página
$productosPorPagina = 10;
// Por defecto es la página 1; pero si está presente en la URL, tomamos esa
$pagina = 1;
if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
}
# El límite es el número de productos por página
$limit = $productosPorPagina;
# El offset es saltar X productos que viene dado por multiplicar la página - 1 * los productos por página
$offset = ($pagina - 1) * $productosPorPagina;
# Necesitamos el conteo para saber cuántas páginas vamos a mostrar
$sentencia = $DB_con->query("SELECT count(*) AS conteo FROM tbl_producto");
$conteo = $sentencia->fetchObject()->conteo;
# Para obtener las páginas dividimos el conteo entre los productos por página, y redondeamos hacia arriba
$paginas = ceil($conteo / $productosPorPagina);

# Ahora obtenemos los productos usando ya el OFFSET y el LIMIT
$sentencia = $DB_con->prepare("SELECT * FROM tbl_producto LIMIT ? OFFSET ?");
$sentencia->execute([$limit, $offset]);
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
# Y más abajo los dibujamos...
?>



              <div class="container pt-4 mb-3 ">

                <div class="text-center bg-warning rounded-3 pt-2" style="height:50px;">
                  <small class="h4 ">Lista de </small>
                </div>
              <div class="row  row-cols-2  row-cols-md-5 ">
                <!--- col-12 col-sm-6 col-lg-3 -->
              <?php
             foreach ($productos as $item_pro) {

              //while($item = mysqli_fetch_assoc($result)){// recorrido de while
              ?>
              <div class="pt-4 mb-4 ">
                    <div class="card shadow"  >
                      <img src="imagenes/<?php echo $item_pro->db_imagen //echo $item['db_imagen']; ?>"/>
                      <div class="card-body justify-content-between align-items-center">

                        <div class="d-flex justify-content-between align-items-center" >
                          <h6 class=" text-left"><?php echo $item_pro->db_nombre;//echo $item['db_nombre']; ?></h6>
                          <h6 class=" text-end">s/.<?php echo $item_pro->db_precio;// echo  $item['db_precio']; ?></h6>
                        </div>  <hr>
                        <div class="text-center">
                          <button type="button" class="btn btn-primary " >Agregar  200</button>
                          <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<? echo $item_pro->db_id;//hp echo $item["db_id"]; ?> ">carro 23</a>
                        </div>
                      </div>
                    </div>
                  </div>              <?php
            }
              ?>
        </div>
        </div>








<div class="container">

    <div class="col-xs-12">


        <nav>
            <div class="row bg-info">
                <div class="col-xs-12 col-sm-6">

                    <p>Mostrando <?php echo $productosPorPagina ?> de <?php echo $conteo ?> productos disponibles</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p>Página <?php echo $pagina ?> de <?php echo $paginas ?> </p>
                </div>
            </div>
            <nav aria-label="Page navigation example">


            <ul class="pagination bg-success">


                <!-- Si la página actual es mayor a uno, mostramos el botón para ir una página atrás -->
                <?php if ($pagina > 1) { ?>
                    <li class="page-item">
                        <a class="page-link" href="./list_pag.php?pagina=<?php echo $pagina - 1 ?>">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                <?php }
                else {
                  ?>  <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <span aria-hidden="true">&laquo;</span>

                      </a>
                    </li>
                    <?php

                }?>

                <!-- Mostramos enlaces para ir a todas las páginas. Es un simple ciclo for-->
                <?php for ($x = 1; $x <= $paginas; $x++) { ?>
                    <li class=" page-item <?php if ($x == $pagina) echo "active" ?>">
                        <a class="page-link" href="./list_pag.php?pagina=<?php echo $x ?>">
                            <?php echo $x ?></a>
                    </li>
                <?php } ?>
                <!-- Si la página actual es menor al total de páginas, mostramos un botón para ir una página adelante -->
                <?php if ($pagina < $paginas) { ?>
                    <li class="page-item">
                        <a class="page-link" href="./list_pag.php?pagina=<?php echo $pagina + 1 ?>">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>

                <?php }
                      else {
                        ?>  <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                              <span aria-hidden="true">&raquo;</span>

                            </a>
                          </li>
                          <?php

                      }
                ?>
            </ul>
        </nav>
          </nav>
    </div>

  </div>




    </div>
  </div>
  </body>
  </html>
