<?php

//----------------------------------------------------------------------------  busqueda ajax
 include("model/cn.php");
    if(!empty($_POST['busqueda'])){
        $busqueda = explode(" ", $_POST['busqueda']);
        $sql = "SELECT * FROM tbl_producto WHERE db_nombre LIKE '%".$busqueda[0]."%'";//el primer index es le pone 0
        for($i =1; $i < count($busqueda);$i++){//count para contar
            if(!empty($busqueda[$i])){//que no estee vacio osea si existe
                $sql .= "AND db_nombre LIKE '%".$busqueda[$i]."%'";
            }
        }
        $sql .= "LIMIT 5";//es el limite que aparecera al momento de escribir 5 le puse
        //$result = mysqli_query($conn,$sql);
        $stmt=$DB_con->prepare($sql);
        $stmt->execute(array());
        ?>
        <div class="container">
          <div class="row">

        <?php
          while($item=$stmt->fetch(PDO::FETCH_ASSOC)) {
        //while($item = mysqli_fetch_assoc($result)){

            ?>
            <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-6 ">
              <div class="card shadow ">
                <!--<ul class="list-group list-group-flush text-center"><li class="list-group-item"><?php// echo $row['db_id'] ?></li></ul>
              --> <div class="">
                  <img src="imagenes/<?php echo $item['db_imagen']; ?>" class="card-img-top" width="200px"/>
              </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title"><?php echo $item['db_nombre'];  ?></h5>
                    <h7 class="text-end"><del><b>s/.0</b></del></h7>
                  </div> <hr>
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                          <button type="button" class="btn btn-sm btn-outline-primary">Conprar</button>
                      </div>
                      <span>s/.<?php echo $item['db_precio'];?></span>
                  </div>
                </div>
              </div>
         </div>

     <?php }?>

        </div>
      </div>
          <?php
        }
        ?>
