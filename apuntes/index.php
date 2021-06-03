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

    <style>
       .contenedor{
          height: 100%;
          width: 100%;
          display: flex;
          position: fixed;
          align-items: center;
          justify-content: center;
          color: antiquewhite;
        }
        .inicio{
           background-color: #6610f2 ;
        }
        .portfolio{
           background-color: #304ffe ;
        }
        .contacto{
            background-color: #474747 ;
         }
    </style>
  </head>
  <body>

<div id="app">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- Icono de NAVBAR -->
    <nav class="navbar navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top">
        </a>
    </div>
    </nav>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
           <router-link to="/" class="nav-link active" aria-current="page">Inicio</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/portfolio" class="nav-link">Portfolio</router-link>
        </li>
         <li class="nav-item">
           <router-link to="/contacto" class="nav-link">Contacto</router-link>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<router-view></router-view>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/vue-router@3.4.9/dist/vue-router.js"></script>
<script>
    //1 - Definimos los componentes de ruta
    const Inicio = {
        template:`<div class="inicio contenedor">
                    <h1 class="animate__animated animate__bounce">INICIO</h1>
                  </div>
                 `
        };
    const Portfolio = {
        template:`<div class="portfolio contenedor">
                    <h1 class="animate__animated animate__backInDown">PORTFOLIO</h1>
                  </div>
                  `
        };
    const Contacto = {
        template:`<div class="contacto contenedor">
                    <h1 class="animate__animated animate__slideInRight">PORTFOLIO</h1>
                    </div>
                 `
        };

    //2 - Definimos el arreglo de rutas
    const routes = [
        {path:'/', component: Inicio},
        {path:'/portfolio', component: Portfolio},
        {path:'/contacto', component: Contacto}
    ]

    //3 - Creamos una instancia de vuerouter y como parametro pasamos un objeto que contiene las rutas definidad en el punto 2
    const router = new VueRouter({routes})

    //4 - Creamos una instanacia de Vue y montamos la el ambito (#app)
    new Vue({
        router
    }).$mount('#app')

</script>
  </body>
</html>
