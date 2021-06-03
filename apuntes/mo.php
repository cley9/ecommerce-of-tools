<?php


include("includes/head.php")
 ?>
<?php
//if (isset($_GET['btn'])) {
if (isset($_POST['btn'])) {
  // code...
    $MSGerro= " correcto la inscripcion ";
    $fa="fa";
    /*?>
<script>
  alert('Archivo editado correctamente ...');
  //window.location.href='index.php';
  </script>
<?php*/
  }
  elseif (isset($_POST['salir'])) {
    // code...
    $MSGerro="salida close";
    $fa="fa";
    					//header('Location:vista.php');

    }
  else {
    // code...
    $MSGerro="strdfadfidadf33g";
    $fa="fa";
  }
 ?>
<br><br><br>
<form class="" action="" method="post">
  <input type="submit" name="salir" value="salir"><br>
</form>
<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fa">
 Launch demo modal
</button>

-->
<!-- Modal

-->
<input type="button" name="fadfa" value="hola" data-bs-toggle="modal" data-bs-target="#<?= $fa ?>" >
<div class="modal fade" id="fa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
       ...
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="button" class="btn btn-primary">Save changes</button>
     </div>
   </div>
 </div>

</div>







<input type="button" name="" id="cley"value="holas">

<div id="alertSI" class="alert alert-success alert-dismissible fade show" role="alert">Login ¡OK!</div>


<script>

$('#cley').click(function(){//alert('djf');
  //print('<div id="alertSI" class="alert alert-success alert-dismissible fade show" role="alert">Login ¡OK!</div>');

$("#alertSI_").fadeTo(500, 500).slideUp(500, function() {
  $("#alertSI_").slideUp(500);
});

});
    </script>
