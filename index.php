<?php
include('model/cn.php');
include("includes/head_.php");
include("pushBusqueda.php");
include("carusel_producto.php");
?>


<div class="d-flex justify-content-center pt-3 mb-4">
<div class=" text-center col-md-10 col-10 bg-warning pt-2 rounded-3" style="height:60px;">
  <small class="h3 ">Productos en Stock </small>
</div>
</div>


<?php  include("pagination.php");// COMBAK:  -----------------------------------------------------------> ?>


	<div class="">

<a href="https://api.whatsapp.com/send?phone=931863427" class="btn-wsp" target="_blank">
<i class="fa fa-whatsapp icono"></i>
</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<?php
include("includes/footer_.php");
 ?>
