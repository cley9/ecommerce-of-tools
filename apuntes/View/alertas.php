


<?php
//if (isset($_GET['btn'])) {
if (isset($_POST['btn'])) {
  // code...
    $MSGerro= " correcto la inscripcion ";
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
    					//header('Location:vista.php');

    }
  else {
    // code...
    $MSGerro="strdfadfidadf33g";
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php echo $MSGerro; ?></h1>
    <form class="" action="" method="post">

      <input type="submit" name="btn" value="hola">

            <input type="submit" name="salir" value="SALIR">
      <!--
      <a href="?=btn">hfadfj2020</a>
      -->
    </form>
  </body>
</html>
