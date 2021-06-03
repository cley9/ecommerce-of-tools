<?php
include("../includes/head.php");
?>
<div class="" style="height:300px">

</div>

<?php
include("../includes/footer.php");
 ?>













esto va en la linea 18




 <?php if (isset($_SESSION['message_'])) {
 	?>
 	<div class="alert alert-<?= $_SESSION['mensaje_type_'];  ?> alert-dismissible fade show text-center" role="alert">
 <h4> <?= $_SESSION['message_']; ?></h4>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
 <?php /*session_unset();*/} ?>
