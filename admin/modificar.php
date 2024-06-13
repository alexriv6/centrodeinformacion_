<?php
include("../conexion/conexion.php");
@session_start();
if (!isset($_SESSION["username"])) header("Location: index.html");
$IGE = mysqli_query($conexion, "SELECT * FROM residencias WHERE carrera ='IGE' OR carrera ='IGEM'");
$IM = mysqli_query($conexion, "SELECT * FROM residencias WHERE carrera = 'IM'");
$ITIC = mysqli_query($conexion, "SELECT * FROM residencias WHERE carrera = 'ITICS'");
$IL = mysqli_query($conexion, "SELECT * FROM residencias WHERE carrera = 'IL'");
$II = mysqli_query($conexion, "SELECT * FROM residencias WHERE carrera = 'II' OR carrera ='IIM'");
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
    <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css" />
    <title>Editar</title>
</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-dark" style='background-color: #ffffff;' id="main_navbar">
        <button class="navbar-toggler border-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span> Menú Principal</button>
        <div class="collapse navbar-collapse pl-5 pl-lx-0" id="navbarSupportedContent2">
            <ul class="navbar-nav mr-auto">
                <div class='d-none d-lg-block' id="tecnmblanco" style="visibility:hidden; ">
                    <img loading='lazy' alt="TecNM" style="width: 2px; height:auto;" src="assets/img/tecnm.jpg" />
                </div>
                <li class="nav-item active">
                    <a class="nav-link" href="\"> <span class=""></span></a>
                    <img loading="lazy" src="../assets/img/gobierno.png" height="45" alt="tec">
                    <img loading="lazy" src="../assets/img/educacion.png" height="45" alt="tec">
                    <img loading="lazy" src="../assets/img/TecNM_logo.png" height="55" alt="tec">
                    <img loading="lazy" src="../assets/img/itpa.png" height="40" alt="tec">
                    <img HSPACE="200" VSPACE="10">
                    </a>
            </ul>
            <div class="dropdown">
                <a class="btn btn-dark" type="button" href="index.php">Regresar</a>
                <a class="btn btn-dark" type="button" href="logout.php"> Salir</a>
            </div>
    </nav><br>
    <br>
    <br>
    <div class="container col-md-11">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" href="#IGE" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile">Ingeniería en Gestión Empresarial</button>
                <button class="nav-link" href="#II" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile">Ingeniería Industrial</button>
                <button class="nav-link" href="#IM" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile">Ingeniería en Mecatrónica</button>
                <button class="nav-link" href="#ITIC" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile">Ingenirería en TIC's</button>
                <button class="nav-link" href="#IL" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-contact">Ingeniería en Logística</button>
            </div>
        </nav><br>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="IGE" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table class="table" id="IGE_table">
                    <thead class="table-dark">
                        <tr>
                            <th>Proyecto</th>
                            <th>Autor</th>
                            <th>Empresa</th>
                            <th>Carrera</th>
                            <th>Año</th>
                            <th>No. Control</th>
                            <th>Ver</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($IGE as $dat1) : ?>
                            <tr>
                                <th><?php echo $dat1["proyecto"]; ?></th>
                                <th><?php echo $dat1["proyecto_autor"]; ?></th>
                                <th><?php echo $dat1["empresa"]; ?></th>
                                <th><?php echo $dat1["carrera"]; ?></th>
                                <th><?php echo $dat1["anio"]; ?></th>
                                <th><?php echo $dat1["no_control"]; ?></th>
                                <th><button class="elle btn btn-dark" href="ver.php?id_res=<?php echo $dat1["id_res"]; ?>" target="'_blank">Ver<img src="https://img.icons8.com/color/25/000000/view-file.png" /></button></th>
                                <th><button class="elle btn btn-dark" href="mod.php?id_res=<?php echo $dat1["id_res"]; ?>">Modificar<img src="https://img.icons8.com/cotton/32/000000/correct-document.png" /></button></th>
                                <th><button class="elle btn btn-dark" data-bs-toggle="modal" data-bs-target="#borrar" data-id="<?php echo $dat1["id_res"]; ?>">Eliminar<img src="https://img.icons8.com/color/32/000000/delete.png" /></button></th>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="II" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table class="table" id="II_table">
                    <thead class="table-dark">
                        <tr>
                            <th>Proyecto</th>
                            <th>Autor</th>
                            <th>Empresa</th>
                            <th>Carrera</th>
                            <th>Año</th>
                            <th>No. Control</th>
                            <th>Ver</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($II as $dat2) : ?>
                            <tr>
                                <th><?php echo $dat2["proyecto"]; ?></th>
                                <th><?php echo $dat2["proyecto_autor"]; ?></th>
                                <th><?php echo $dat2["empresa"]; ?></th>
                                <th><?php echo $dat2["carrera"]; ?></th>
                                <th><?php echo $dat2["anio"]; ?></th>
                                <th><?php echo $dat2["no_control"]; ?></th>
                                <th><button class="elle btn btn-dark" href="ver.php?id_res=<?php echo $dat2["id_res"]; ?>" target="'_blank">VER<img src="https://img.icons8.com/color/25/000000/view-file.png" /></button></th>
                                <th><button class="elle btn btn-dark" href="mod.php?id_res=<?php echo $dat2["id_res"]; ?>">Modificar<img src="https://img.icons8.com/cotton/32/000000/correct-document.png" /></button></th>
                                <th><button class="elle btn btn-dark" data-bs-toggle="modal" data-bs-target="#borrar" data-id="<?php echo $dat2["id_res"]; ?>">Eliminar<img src="https://img.icons8.com/color/32/000000/delete.png" /></button></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="IM" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table class="table" id="IM_table">
                    <thead class="table-dark">
                        <tr>
                            <th>Proyecto</th>
                            <th>Autor</th>
                            <th>Empresa</th>
                            <th>Carrera</th>
                            <th>Año</th>
                            <th>No. Control</th>
                            <th>Ver</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($IM as $dat3) : ?>
                            <tr>
                                <th><?php echo $dat3["proyecto"]; ?></th>
                                <th><?php echo $dat3["proyecto_autor"]; ?></th>
                                <th><?php echo $dat3["empresa"]; ?></th>
                                <th><?php echo $dat3["carrera"]; ?></th>
                                <th><?php echo $dat3["anio"]; ?></th>
                                <th><?php echo $dat3["no_control"]; ?></th>
                                <th><button class="elle btn btn-dark" href="ver.php?id_res=<?php echo $dat3["id_res"]; ?>" target="'_blank">VER<img src="https://img.icons8.com/color/25/000000/view-file.png" /></button></th>
                                <th><button class="elle btn btn-dark" href="mod.php?id_res=<?php echo $dat3["id_res"]; ?>">Modificar<img src="https://img.icons8.com/cotton/32/000000/correct-document.png" /></button></th>
                                <th>><button class="elle btn btn-dark" data-bs-toggle="modal" data-bs-target="#borrar" data-id="<?php echo $dat2["id_res"]; ?>">Eliminar<img src="https://img.icons8.com/color/32/000000/delete.png" /></button></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="ITIC" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table class="table" id="ITIC_table">
                    <thead class="table-dark">
                        <tr>
                            <th>Proyecto</th>
                            <th>Autor</th>
                            <th>Empresa</th>
                            <th>Carrera</th>
                            <th>Año</th>
                            <th>No. Control</th>
                            <th>Ver</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ITIC as $dat4) : ?>
                            <tr>
                                <th><?php echo $dat4["proyecto"]; ?></th>
                                <th><?php echo $dat4["proyecto_autor"]; ?></th>
                                <th><?php echo $dat4["empresa"]; ?></th>
                                <th><?php echo $dat4["carrera"]; ?></th>
                                <th><?php echo $dat4["anio"]; ?></th>
                                <th><?php echo $dat4["no_control"]; ?></th>
                                <th><button class="elle btn btn-dark" href="ver.php?id_res=<?php echo $dat4["id_res"]; ?>" target="'_blank">VER<img src="https://img.icons8.com/color/25/000000/view-file.png" /></button></th>
                                <th><button class="elle btn btn-dark" href="mod.php?id_res=<?php echo $dat4["id_res"]; ?>">Modificar <img src="https://img.icons8.com/cotton/32/000000/correct-document.png" /></button></th>
                                <th><button class="elle btn btn-dark" data-bs-toggle="modal" data-bs-target="#borrar" data-id="<?php echo $dat2["id_res"]; ?>">Eliminar<img src="https://img.icons8.com/color/32/000000/delete.png" /></button></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="IL" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table class="table" id="IL_table">
                    <thead class="table-dark">
                        <tr>
                            <th>Proyecto</th>
                            <th>Autor</th>
                            <th>Empresa</th>
                            <th>Carrera</th>
                            <th>Año</th>
                            <th>No. Control</th>
                            <th>Ver</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($IL as $dat5): ?>
                            <tr>
                                <th><?php echo $dat5["proyecto"]; ?></th>
                                <th><?php echo $dat5["proyecto_autor"]; ?></th>
                                <th><?php echo $dat5["empresa"]; ?></th>
                                <th><?php echo $dat5["carrera"]; ?></th>
                                <th><?php echo $dat5["anio"]; ?></th>
                                <th><?php echo $dat5["no_control"]; ?></th>
                                <th><button class="elle btn btn-dark" href="ver.php?id_res=<?php echo $dat5["id_res"]; ?>" target="'_blank">VER<img src="https://img.icons8.com/color/25/000000/view-file.png" /></button></th>
                                <th><button class="elle btn btn-dark" href="mod.php?id_res=<?php echo $dat5["id_res"]; ?>">Modificar<img src="https://img.icons8.com/cotton/32/000000/correct-document.png" /></button></th>
                                <th>><button class="elle btn btn-dark" data-bs-toggle="modal" data-bs-target="#borrar" data-id="<?php echo $dat2["id_res"]; ?>">Eliminar<img src="https://img.icons8.com/color/32/000000/delete.png" /></button></th>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="borrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="deleter.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Eliminar registro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Eliminar el registro?
                    </div>
                    <input type="text" id="id_m" name="id_m">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit"  class="btn btn-primary">Continuar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <scritp src="../assets/DataTables/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#IGE_table').DataTable(); 
                    $('#IM_table').DataTable(); 
                    $('#II_table').DataTable();
                    $('#ITIC_table').DataTable();
                    $('#IL_table').DataTable();

                    $('.elle').click(function(){
                        $("#id_m").hide();
                        var eliminar = $(this).data('id');
                        console.log(eliminar);
                        document.getElementById("id_m").value = eliminar;
                    });
                });
            </script>
</body>
</html>