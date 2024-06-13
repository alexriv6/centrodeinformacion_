<?php
include("../conexion/conexion.php");
@session_start();
if (!isset($_SESSION["username"])) header("Location: index.html");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Documentos recepcionales</title>
</head>

<body><br>
    <nav class="navbar navbar-expand-xl navbar-dark" style='background-color: #ffffff;' id="main_navbar">
        <button class="navbar-toggler border-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span> Menú Principal</button>
        <div class="collapse navbar-collapse pl-5 pl-lx-0" id="navbarSupportedContent2">
            <ul class="navbar-nav mr-auto">
                <div class='d-none d-lg-block' id="tecnmblanco" style="visibility:hidden; ">
                    <img loading='lazy' alt="TecNM" style="width: 2px; height:auto;" src="assets/img/tecnm.jpg" />
                </div>
                <li class="nav-item active">
                    <a class="nav-link" href="\"> <span class=""></span></a>
                </li>
                <img loading="lazy" src="../assets/img/gobierno.png" height="45" alt="tec">
                <img loading="lazy" src="../assets/img/educacion.png" height="45" alt="tec">
                <img loading="lazy" src="../assets/img/TecNM_logo.png" height="55" alt="tec">
                <img loading="lazy" src="../assets/img/itpa.png" height="40" alt="tec">
            </ul>
        </div>
        <div class="dropdown">
            <a class="btn btn-dark" type="button" href="index.php"> Menú</a>
            <a class="btn btn-dark" type="button" href="logout.php"> Salir</a>
        </div>
    </nav><br>
    <div class="col-md-8 offset-2">
        <center>
            <h1>Subir  Documento recepcional</h1><br>
        </center>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="proyecto" name="proyecto" require>
                </div>
            </div><br>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Autor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="proyecto_autor" name="proyecto_autor" require>
                </div>
            </div><br>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Empresa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="empresa" name="empresa" require>
                </div>
            </div><br>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Año</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="anio" name="anio" require>
                </div>
            </div><br>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Número de control</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_control" name="no_control" require>
                </div>
            </div><br>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Carrera</label>
                <div class="col-sm-10">
                    <select id="carrera" name="carrera" class="form-select" require>
                        <option selected>Selecciona una opción</option>
                        <option value="II">Ingeniería industrial</option>
                        <option value="IIM">Ingeniería Industrial Mixta</option>
                        <option value="ITICS">Ingenieria en Tecnologías de la Información y Comunicaciones</option>
                        <option value="IL">Ingeniería en logística</option>
                        <option value="IM">Ingeniería en Mecatrónica</option>
                        <option value="IGE">Ingeniería en Gestión Empresarial</option>
                        <option value="IGEM">Ingeniería en Gestión Empresarial Mixta</option>
                    </select>
                </div>
            </div><br><br>
            <div>
                <label for="formFileLg" class="form-label">Selecciona el archivo PDF</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" id="archivo" name="archivo">
            </div><br>
            <center><button type="submit" name="aceptar" id="aceptar" class="btn btn-primary">HECHO</button></center><br><br>
    </div>
    </form>
    </div>
</body>

</html>