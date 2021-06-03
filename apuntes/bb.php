


<?php

include 'model/cn.php';
include("includes/head.php");
/*
$stmt = $DB_con->prepare('SELECT db_id, db_nombre, db_precio, db_imagen FROM tbl_producto ORDER BY db_id DESC');
//  $producto = $stmt->fetchAll(PDO::FETCH_OBJ);
  $stmt->execute();

  <div class="container">
  <div class="row">

  <div class="card-body col-mg-12">
  <div class="shadow">
  <img src="https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg" alt="" width="300px">
  </div>
  <div class="shadow">
  <img src="https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg" alt="" width="300px">
  </div>
  </div>
  </div>
  </div>
  */

 ?>


 <!--Inicio carousel todos los productos en oferta-->

 <h3 class="text-center font-text text-danger">Conoce todos nuestros productos en oferta</h3>

 		<div id="carouselExampleControlsOferta" class="carousel slide mt-4 mb-4" data-ride="carousel">
 		  <div class="carousel-inner">

 			<div class="carousel-item active">
 				<div class="row">


 				<div class="col-3">
 					<div class="card" style="">
 						<a href="?p=catalogo&id=19"><img src="https://automundo.pe/wp-content/uploads/2020/09/Auto-tesla.jpg" class="d-block w-100 h-50" alt="Cajas para Delivery" ></a>
 							  <div class="card-body  d-none d-sm-none d-md-block">
 								<h5 class="card-title text-center text-primary">Cajas para Delivery</h5><hr> <div class="d-flex justify-content-between">
 								  <span><del><b>s/.80</b></del></span>
 								  <span class="text-warning"><b>20% Desc.</b></span>
 								  <span class="text-success"><b>s/.64</b></span>
 								</div></div>
 					</div>
 				</div>

 				<div class="col-3">
 					<div class="card" style="">
 						<a href="?p=catalogo&id=25"><img src="https://automundo.pe/wp-content/uploads/2020/09/Auto-tesla.jpg" class="d-block w-100" alt="Lector de Código de Barra Inalámbrico"></a>
 							  <div class="card-body  d-none d-sm-none d-md-block">
 								<h5 class="card-title text-center text-primary">Lector de Código de Barra Inalámbrico</h5><hr> <div class="d-flex justify-content-between">
 								  <span><del><b>s/.200</b></del></span>
 								  <span class="text-warning"><b>20% Desc.</b></span>
 								  <span class="text-success"><b>s/.160</b></span>
 								</div></div>
 					</div>
 				</div>
 				<div class="col-3">
 					<div class="card" style="">
 						<a href="?p=catalogo&id=28"><img src="https://automundo.pe/wp-content/uploads/2020/09/Auto-tesla.jpg" class="d-block w-100" alt="Set de 15 Brochas para Maquillaje."></a>
 							  <div class="card-body  d-none d-sm-none d-md-block">
 								<h5 class="card-title text-center text-primary">Set de 15 Brochas para Maquillaje.</h5><hr> <div class="d-flex justify-content-between">
 								  <span><del><b>s/.50</b></del></span>
 								  <span class="text-warning"><b>50% Desc.</b></span>
 								  <span class="text-success"><b>s/.25</b></span>
 								</div></div>
 					</div>
 				</div>
 				<div class="col-3">
 					<div class="card" style="">
 						<a href="?p=catalogo&id=31"><img src="https://automundo.pe/wp-content/uploads/2020/09/Auto-tesla.jpg" class="d-block w-100" alt="Mochila Sport Para Laptop"></a>
 							  <div class="card-body  d-none d-sm-none d-md-block">
 								<h5 class="card-title text-center text-primary">Mochila Sport Para Laptop</h5><hr> <div class="d-flex justify-content-between">
 								  <span><del><b>s/.80</b></del></span>
 								  <span class="text-warning"><b>20% Desc.</b></span>
 								  <span class="text-success"><b>s/.64</b></span>
 								</div></div>
 					</div>
 				</div>
      	</div>
 			</div>
 			<div class="carousel-item">
 				<div class="row">

 				<div class="col-3">
 					<div class="card" style="">
 						<a href="?p=catalogo&id=34"><img src="images/productos/374123772813_745521526045352_7758435087594244050_n-removebg-preview.png" class="d-block w-100" alt="Caja de Metal para Delivery con Logotipo."></a>
 							  <div class="card-body  d-none d-sm-none d-md-block">
 								<h5 class="card-title text-center text-primary">Caja de Metal para Delivery con Logotipo.</h5><hr> <div class="d-flex justify-content-between">
 								  <span><del><b>s/.300</b></del></span>
 								  <span class="text-warning"><b>25% Desc.</b></span>
 								  <span class="text-success"><b>s/.225</b></span>
 								</div></div>
 					</div>
 				</div>
 				<div class="col-3">
 					<div class="card" style="">
 						<a href="?p=catalogo&id=36"><img src="images/productos/328123961363_428544804807779_4609719770690196145_n.png" class="d-block w-100" alt="Bastón Plegable Original Ortopédico Con Luz Led."></a>
 							  <div class="card-body  d-none d-sm-none d-md-block">
 								<h5 class="card-title text-center text-primary">Bastón Plegable Original Ortopédico Con Luz Led.</h5><hr> <div class="d-flex justify-content-between">
 								  <span><del><b>s/.80</b></del></span>
 								  <span class="text-warning"><b>15% Desc.</b></span>
 								  <span class="text-success"><b>s/.68</b></span>
 								</div></div>
 					</div>
 				</div>
 				<div class="col-3">
 					<div class="card" style="">
 						<a href="?p=catalogo&id=44"><img src="images/productos/741123936358_388999975578816_8028648761375948106_n.jpg" class="d-block w-100" alt="Tripode Semi Profesional Wt 3560 Soporta 3kg P/canon Nikon 1.6m"></a>
 							  <div class="card-body  d-none d-sm-none d-md-block">
 								<h5 class="card-title text-center text-primary">Tripode Semi Profesional Wt 3560 Soporta 3kg P/canon Nikon 1.6m</h5><hr> <div class="d-flex justify-content-between">
 								  <span><del><b>s/.150</b></del></span>
 								  <span class="text-warning"><b>25% Desc.</b></span>
 								  <span class="text-success"><b>s/.112.5</b></span>
 								</div></div>
 					</div>
 				</div>
 				<div class="col-3">
 					<div class="card" style="">
 						<a href="?p=catalogo&id=46"><img src="images/productos/779124180018_865668797575395_2434861671021110126_n.jpg" class="d-block w-100" alt="Mochila Antirrobo Clave, Carga Usb Audifonos, Celular y  Laptop."></a>
 							  <div class="card-body  d-none d-sm-none d-md-block">
 								<h5 class="card-title text-center text-primary">Mochila Antirrobo Clave, Carga Usb Audifonos, Celular y  Laptop.</h5><hr> <div class="d-flex justify-content-between">
 								  <span><del><b>s/.60</b></del></span>
 								  <span class="text-warning"><b>20% Desc.</b></span>
 								  <span class="text-success"><b>s/.48</b></span>
 								</div></div>
 					</div>
 				</div>
 				</div>
 			</div>

 		  </div>
 		  <a class="carousel-control-prev" href="#carouselExampleControlsOferta" role="button" data-slide="prev">
 			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 			<span class="sr-only">Anterior</span>
 		  </a>
 		  <a class="carousel-control-next" href="#carouselExampleControlsOferta" role="button" data-slide="next">
 			<span class="carousel-control-next-icon" aria-hidden="true"></span>
 			<span class="sr-only">Siguiente</span>
 		  </a>
 		</div>
 <!--Fin carousel todos los productos en oferta-->









 <div class="container">
   <div class="row">
     <div class="col">
       <div class="card">

         <div class="accordion" id="accordionExample">
           <div class="accordion-item">
             <h2 class="accordion-header" id="headingOne">
               <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Accordion Item #1
               </button>
             </h2>
             <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
               <div class="accordion-body">
         dfadf
             </div>
             </div>
           </div>
         </div>

       </div>
     </div>
   </div>
 </div>






 <div class="accordion" id="accordionExample">
   <div class="accordion-item">
     <h2 class="accordion-header" id="headingOne">
       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Accordion Item #1
       </button>
     </h2>
     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
       <div class="accordion-body">
 dfadf
     </div>
     </div>
   </div>
   <div class="accordion-item">
     <h2 class="accordion-header" id="headingTwo">
       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       iten2
       </button>
     </h2>
     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
       <div class="accordion-body">
       </div>
     </div>
   </div>
   <div class="accordion-item">
     <h2 class="accordion-header" id="headingThree">
       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Accordion Item #3
       </button>
     </h2>
     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
       <div class="accordion-body">dfd
       </div>
     </div>
   </div>
 </div>












 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ38i_UyScKRPVqdj5DMgA3X8WvdaqwfyE7AA&usqp=CAU" class="d-block w-100" alt="..."  height="400px">
 <img src="https://promart.vteximg.com.br/arquivos/ids/569998-1000-1000/112526.jpg?v=637401116546630000" class="d-block w-100" alt="..."  height="400px">
 <img src="https://www.aibitech.com/35688-thickbox_default/lampa-t-1000-pu%C3%B1o-plastico-offset-cuchara-ancho-10-1-2-largo-18-1-4-largo-total-39-1-2-pci-pe-11171-truper.jpg" class="d-block w-100" alt="..." height="400px">
