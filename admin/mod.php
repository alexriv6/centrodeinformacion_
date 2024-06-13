<?php
include("../conexion/conexion.php");
@session_start();
if (!isset($_SESSION["username"])) header("Location: index.html");
$id_res = $_GET['id_res'];
$doc = mysqli_query($conexion, "SELECT * FROM residencias WHERE id_res = $id_res");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Modificar Documento</title>
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
                <img HSPACE="200" VSPACE="10">
                </a>
            </ul>
            <div class="dropdown">
                <a class="btn btn-dark" type="button" style="background-color: 49657D;" href="modificar.php">Regresar</a>
                <a class="btn btn-dark" type="button" href="logout.php"> Salir</a>
            </div>
    </nav><br>
    <br>
    <br>
    <br>
    <div class="col-md-8 offset-2">
        <center>
            <h1>Modificar Documento</h1><br>
        </center>

        <form action="update.php" method="POST" enctype="multipart/form-data">
            <?php foreach ($doc as $dat); ?>
            <div class="mb-3">
                <input type="text" name="id_res" id="id_res" class="form-control" value="<?php echo $dat['id_res']; ?>" readonly>
            </div>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Título residencia</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="proyecto" name="proyecto" value="<?php echo $dat['proyecto']; ?>">
                </div>
            </div><br>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Autor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="proyecto_autor" name="proyecto_autor" value="<?php echo $dat['proyecto_autor']; ?>">
                </div>
            </div><br>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Empresa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo $dat['empresa']; ?>">
                </div>
            </div><br>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Año</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="anio" name="anio" value="<?php echo $dat['anio']; ?>">
                </div>
            </div><br>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Número de control</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_control" name="no_control" value="<?php echo $dat['no_control']; ?>">
                </div>
            </div><br>
            <div class="mb-6 row">
                <label for="text" class="col-sm-2 col-form-label">Carrera</label>
                <div class="col-sm-10">
                    <select id="carrera" name="carrera" class="form-select" value="<?php echo $dat['carrera']; ?>" required>
                        <option value="<?php echo $dat['carrera']; ?>"><?php echo $dat['carrera']; ?></option>
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
                <input class="form-control form-control-lg" type="file" id="archivo" name="archivo">
            </div><br>
            <center><button type="submit" name="guardar" id="guardar" class="btn btn-primary">HECHO</button></center><br><br>
           
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>