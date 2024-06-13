<?php
include("../conexion/conexion.php");
@session_start();
if (!isset($_SESSION["username"])) header("Location: index.html");
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
  <link rel="image" href="assets/img/tecnm.jpg" />
  <meta charset="UTF-8">
  <title>ITPA | Documentos recepcionales</title>
  <meta charset="UTF-8">
  <link rel="icon" href="../estilos/img/itpa.jpg" type="image / x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-xl navbar-dark" id="main_navbar">
  <button class="navbar-toggler border-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> Menú Principal
  </button>
  <div class="collapse navbar-collapse pl-5 pl-lx-0" id="navbarSupportedContent2">
    <ul class="navbar-nav mr-auto">
      <div class='d-none d-lg-block' id="tecnmblanco" style="visibility:hidden; ">
        <img loading='lazy' alt="TecNM" style="width: 2px; height:auto;" src="../assets/img/tecnm.jpg" />
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="\"> <span class=""></span></a>
      </li>
      <img loading="lazy" src="../assets/img/gobierno.png" height="45" alt="tec" />
      <img loading="lazy" src="../assets/img/educacion.png" height="45" alt="tec" />
      <img loading="lazy" src="../assets/img/TecNM_logo.png" height="55" alt="tec" />
      <img loading="lazy" src="../assets/img/itpa.png" height="40" alt="tec" />
      <img HSPACE="200" VSPACE="10">
    </ul>
    <div class="dropdown">
      <a class="btn btn-dark dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown" style="background-color: 49657D;">Menú</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="../index.php">Inicio </a></li>
        <li><a class="dropdown-item" href="comentarios.php">Comentarios</a></li>
        <li><a class="dropdown-item" href="logout.php">Salir</a></li>
</nav>
<br><br>

<center>
  <div class="tab-content">
    <div class="tab-pane container active">
      <div class="col-sm-12 col-md-12 offset-1">
        <div class="row ">

          <nav class="navbar navbar-expand-xl navbar-dark" id="main_navbar">
            <div class="card" style="width: 18rem;">
              <img src="../assets/img/modificar.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text"></p>
                <a href="modificar.php" class="btn btn-primary">Modificar / Eliminar</a>
              </div>
            </div></span>

            <div class="col-sm-4 col-md-4">
              <div class="card" style="width: 18rem;">
                <img src="../assets/img/registrar.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text"></p>
                  <a href="alta.php" class="btn btn-primary">Nuevo registro</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 col-md-4 ">
              <div class="card" style="width: 18rem;">
                <img src="../assets/img/reportes.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text"></p>
                  <a href="comentarios.php" class="btn btn-primary">Bandeja de mensajes</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
</center>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>