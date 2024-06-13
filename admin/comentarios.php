<?php
@session_start();
if (!isset($_SESSION["username"])) header("Location: index.html");
include("../conexion/conexion.php");
$COM = mysqli_query($conexion, "SELECT * FROM comentarios");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">

  <link rel="icon" href="assets/img/tecnm.jpg" />
</head>
<nav class="navbar navbar-expand-xl navbar-dark" style='background-color: #ffffff;' id="main_navbar">

  <button class="navbar-toggler border-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> Menú Principal</button>
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
    <a type="button" href="../admin/index.php" class="btn btn-dark" style="background-color: 49657D;">Regresar</a>
    <button type="button" data-bs-toggle="modal" data-bs-target="#borrar" class="btn btn-dark" style="background-color: 49657D;">Vaciar</button>
  </div>
</nav>
<br>
<div class="container">
  <div class="col-md-10 offset-md-3">
    <div class="col-md-7">
      <center>
        <h1>Comentarios</h1>
      </center><br>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="col-md-12 offset-md-12">
    <div class="col-md-12">
      <table id="exp" class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo Electrónico</th>
            <th scope="col">Número de Teléfono</th>
            <th scope="col">Comentarios</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($COM as $dat) : ?>
            <tr>
              <th> <?php echo $dat['id_com'] ?></th>
              <th> <?php echo $dat['nombre'] ?></th>
              <th><?php echo $dat['correo'] ?></th>
              <th><?php echo $dat['num_tel'] ?></th>
              <th><?php echo $dat['comentario'] ?></th>
            </tr>
          <?php endforeach ?>

        </tbody>
      </table>

      <!-- Modal -->
      <div class="modal fade" id="borrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Vaciar contenido</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ¿Vacíar toda la mensajería?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <a type="button" href="delete.php" class="btn btn-primary">Continuar</a>
            </div>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
      <script>
        $(document).ready(function() {
            $('#exp').DataTable( {
                dom: 'Bfrtip',
                buttons: [
            {
                extend: 'excelHtml5',
                title: 'Reporte de comentarios',
                text: 'Exportar Excel'
            },
            {
                extend: 'pdfHtml5',
                title: 'Reporte de Comentarios',
                text: 'Exportar PDF'
            }
        ]
            } );
        } );
    </script>

      </body>

</html>