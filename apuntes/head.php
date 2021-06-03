<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Navbar - Bootstrap 5</title>


  </head>
  <body>

<div id="app">

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: orange;">
  <div class="container-fluid">
    <!-- Icono de NAVBAR -->
    <nav class="navbar navbar-dark">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top">
        </a>

    </div>
    </nav>
    <b><a class="navbar-brand text-success">AgrupecVentas</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent"><!---->

      <ul class="navbar-nav  mb-2 mb-lg-0"><!---->

        <li class="nav-item">
           <router-link to="/" class="nav-link active" aria-current="page">Inicio</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/portfolio" class="nav-link">Portfolio</router-link>
        </li>
         <li class="nav-item ">
           <router-link to="/contacto" class="nav-link">Contacto</router-link>
        </li>

      </ul>
      <!--
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>
</div>
<!--es para el boton de menu-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<!-- COMBAK: ---------------------------------------------------------------- -->
<footer class="pt-4 border-top bg-dark text-white">
<div class="container">
        <div class="row pb-3">
            <div class="col-12 col-md">
                <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <a class="navbar-brand" href="#"><img src="img/conocimiento.png" class="img-fluid " width="80px" height="80px" alt=""></a>

                <small class="d-block mb-3 text-muted">© 2020 Trabajo final de analisis y diseño de sistemas de informacion</small>
            </div>
            <div class="col-6 col-md">
                <h5>Contacto</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Contáctanos</a></li>
                    <li><a class="text-muted" href="#">Ubícanos</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Acerca</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Nosotros</a></li>
                    <li><a class="text-muted" href="#">Equipo</a></li>

                </ul>
            </div>
        </div>
    </div>
</footer>
  </body>
</html>
