<!DOCTYPE html>
<html lang="es-MX">
<head>
  <link rel="image" href="assets/img/tecnm.jpg" />
  <meta charset="UTF-8">
</head>
<title>ITPA | Residencias</title>
<meta charset="UTF-8">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="assets/css/style.css" rel="stylesheet">
<script src="carrusel/jquery-3.1.1.slim.min.js"></script>
<script src="carrusel/tether.min.js"></script>
<style>
  #main_navbar .dropdown-menu {
    background-color: #1B396A;
  }

  #main_navbar .dropdown-menu li {
    border-top: 1px solid #fff;
    border-left: 1px solid #fff;
    border-right: 1px solid #fff;
  }

  #main_navbar .dropdown-menu li:before {
    background-color: #1B396A;
  }

  #main_navbar .dropdown-menu li:after {
    background-color: #1B396A;
  }

  #main_navbar .dropdown-menu a {
    color: #fff;
  }
</style>

<link rel="icon" href="assets/img/tecnm.jpg" />
</head>
<nav class="navbar navbar-expand-xl navbar-dark" style='background-color: #ffffff;' id="main_navbar">
  <button class="navbar-toggler border-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> Menú Principal
  </button>
  <div class="collapse navbar-collapse pl-5 pl-lx-0" id="navbarSupportedContent2">
    <ul class="navbar-nav mr-auto">
      <div class='d-none d-lg-block' id="tecnmblanco" style="visibility:hidden; ">
        <img loading='lazy' alt="TecNM" style="width: 2px; height:auto;" src="assets/img/tecnm.jpg" />
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="\"> <span class=""></span></a>
      </li>
      <img loading="lazy" src="assets/img/gobierno.png" height="45" alt="tec">
      <img loading="lazy" src="assets/img/educacion.png" height="45" alt="tec">
      <img loading="lazy" src="assets/img/TecNM_logo.png" height="55" alt="tec">
      <img loading="lazy" src="assets/img/itpa.png" height="40" alt="tec">
    </ul>
  </div>
  <div class="dropdown">
    <a type="button" href="admin/index.html" class="btn btn-dark" style="background-color: 49657D;">Administrador</a>
    </ul>
  </div>
  </div>
</nav>
</a></div>
<div class="container-cabecera">
  <div class="row no-gutters">
    <div class="col-md-12 " style="max-width:20%">
      </a>
    </div>
  </div>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/nm1.jpeg" width="100%" height="55%" alt="...">
        <div class="carousel-caption">
          <h1 id='visor_imagenes'>
            <font face="Arial"><b>BIENVENIDO AL SISTEMA DE DOCUMENTOS RECEPCIONALES DEL ITPA</b></font>
          </h1>
          <p id='visor_imagenes'>Instituto Tecnológico de Pabellón de Artega, Aguascalientes</p>
          <br><br><br><br><br><br><br><br><br>
        </div>
        </nav>
      </div>
      <div class="carousel-item">
        <img src="assets/img/te4.png" width="100%" height="600" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/lib2.png" width="100%" height="600" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/img/tec8.png" width="100%" height="600" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

</div>
<br><br>
<hr>
</hr>
<center>
  <h1>Documentos</h1>
</center><br>
<center>
  <h5 style="color: #3399ff;">Selecciona la carrera de la cuál deseas saber los temas, posteriormente elegir ver para visualizar la de tu preferencia. </h5>
</center>
<center>
  <h5 style="color: #3399ff;">También puedes usar el buscador para facilitar tu proceso.</h5>
</center>
<hr>
</hr>

<div class="col-sm-12 col-md-12">
  <div class="row">
    <?php
    include 'buscador.php';
    ?>
    <br><br>
  </div>

  <hr>
  </hr>
  <center>
    <h1 id="com">Sección de Comentarios</h1>
  </center><br>
  <center>
    <h5 style="color: #3399ff;">Deja tus comentarios o dudas en el siguiente apartado. </h5>
  </center>

  <br><br>
  <hr>
  </hr>
  <div class="col-sm-12 col-md-12">
    <div class="row">
      <?php
      include 'app/comentarios.php';
      ?>
      <br><br>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <scritp src="assets/DataTables/jquery.min.js">
    </script>
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>

    </body>

</html>