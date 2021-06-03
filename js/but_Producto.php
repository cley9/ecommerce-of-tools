<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>filter Producto</title>
</head>
<body>


  <?php include("includes/head_.php"); ?>

   <div class="container">
   <div class="row">


 <form class="" id="multi-filters"  method="post">


  <div  class="col-md-4 col-lg-3 card d-none d-sm-none d-md-block " >
  <div class="card-header text-center"><small class="h3 ">Productos</small> </div>

  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck1"  name="db_nombre[]" value="clavo">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck1"> Clavo</label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >1</h7>
  </div>




  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck2" name="db_nombre[]" value="tuerca">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck2"> Perfil de Plastico </label>
  <h7 class="badge ms-auto p-2 bd-highlight "style="background:#EE7358;" >cly</h7>
  </div>

  </div>
 </form>

  </div>
  </div>



<h1>dfdf</h1>

 <div id="filters-result" class="bg-white">

 </div>
</body>
</html>


<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<script src="js/button.js" charset="utf-8"></script>
