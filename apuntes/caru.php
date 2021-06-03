<?php
//include("../includes/head.php")
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carousel</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--
  <link rel="stylesheet" href="caru.css">
</head>
<body>
-->
 			<!--slider -->
			<div  class="container-fluid" id="headcarousel_container" style="padding: 0;">
				<div id="headcarouselid" class="carousel slide" data-ride="carousel">
					<!-- indicators -->
					<ul class="carousel-indicators">
						<li class="active" data-target="#headcarouselid" data-slide-to="0"></li>
						<li class="" data-target="#headcarouselid" data-slide-to="1"></li>
						<li class="" data-target="#headcarouselid" data-slide-to="2"></li>
						<li class="" data-target="#headcarouselid" data-slide-to="3"></li>
						<li class="" data-target="#headcarouselid" data-slide-to="4"></li>
					</ul>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg" title="slidepicture" alt="slidepicture">
						</div>
						<div class="item">
							<img src="https://cdn.pixabay.com/photo/2014/07/28/20/39/landscape-404072_960_720.jpg" title="slidepicture" alt="slidepicture">
						</div>
						<div class="item">
							<img src="https://cdn.pixabay.com/photo/2018/08/23/07/35/thunderstorm-3625405_960_720.jpg" title="slidepicture" alt="slidepicture">
						</div>
						<div class="item">
							<img src="https://cdn.pixabay.com/photo/2017/09/08/20/29/chess-2730034_960_720.jpg" title="slidepicture" alt="slidepicture">
						</div>
						<div class="item">
							<img src="https://cdn.pixabay.com/photo/2018/05/30/15/31/rustic-3441673_960_720.jpg" title="slidepicture" alt="slidepicture">
						</div>
					</div>
					<!-- Left and right controls -->
					<a class="carousel-control left" href="#headcarouselid" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="carousel-control right" href="#headcarouselid" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>

</body>
</html>
