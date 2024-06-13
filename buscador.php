<?php
include("conexion/conexion.php");
$IGE = mysqli_query($conexion, "SELECT * FROM residencias WHERE carrera ='IGE' OR carrera = 'IGEM'");
$IM = mysqli_query($conexion, "SELECT * FROM residencias WHERE carrera = 'IM'");
$ITIC = mysqli_query($conexion, "SELECT * FROM residencias WHERE carrera = 'ITICS'");
$IL = mysqli_query($conexion, "SELECT * FROM residencias WHERE carrera = 'IL'");
$II = mysqli_query($conexion, "SELECT * FROM residencias WHERE carrera = 'II' OR carrera = 'IIM'");
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
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <title>Documentos recepcionales</title>
</head>

<body><br>
    <br>
    <div class="container col-md-11">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" href="#IGE" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile">Ingeniería Gestión Empresarial<img src="https://img.icons8.com/material-two-tone/24/000000/statistic-document.png" /></button>
                <button class="nav-link" href="#II" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile">Ingeniería Industrial <img src="https://img.icons8.com/material/24/000000/gears.png" /> </button>
                <button class="nav-link" href="#IM" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile">Ingeniería Mecatrónica <img src="https://img.icons8.com/material-two-tone/24/000000/open-end-wrench.png" /></button>
                <button class="nav-link" href="#ITIC" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile">Ingenirería TIC's <img src="https://img.icons8.com/material-two-tone/24/000000/programming.png" /></button>
                <button class="nav-link" href="#IL" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-contact">Ingeniería Logística <img src="https://img.icons8.com/material-two-tone/24/000000/loader.png" /></button>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($IGE as $dat): ?>
                            <tr>
                                <th><?php echo $dat1["proyecto"] ?></th>
                                <th><?php echo $dat1["proyecto_autor"] ?></th>
                                <th><?php echo $dat1["empresa"] ?></th>
                                <th><?php echo $dat1["carrera"] ?></th>
                                <th><?php echo $dat1["anio"] ?></th>
                                <th><?php echo $dat1["no_control"] ?></th>
                                <th><a href="app/ver.php?id_res=<?php echo $dat1["id_res"]; ?>" target="'_blank">VER</a></th>
                            </tr>
                        <?php endforeach; ?>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($II as $dat2): ?>
                            <tr>
                                <th><?php echo $dat2["proyecto"] ?></th>
                                <th><?php echo $dat2["proyecto_autor"] ?></th>
                                <th><?php echo $dat2["empresa"] ?></th>
                                <th><?php echo $dat2["carrera"] ?></th>
                                <th><?php echo $dat2["anio"] ?></th>
                                <th><?php echo $dat2["no_control"] ?></th>
                                <th><a href="app/ver.php?id_res=<?php echo $dat2["id_res"]; ?>" target="'_blank">VER</a></th>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($IM as $dat3): ?>
                            <tr>
                                <th><?php echo $dat3["proyecto"] ?></th>
                                <th><?php echo $dat3["proyecto_autor"] ?></th>
                                <th><?php echo $dat3["empresa"] ?></th>
                                <th><?php echo $dat3["carrera"] ?></th>
                                <th><?php echo $dat3["anio"] ?></th>
                                <th><?php echo $dat3["no_control"] ?></th>
                                <th><a href="app/ver.php?id_res=<?php echo $dat3["id_res"]; ?>" target="'_blank">VER</a></th>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ITIC as $dat4): ?>
                            <tr>
                                <th><?php echo $dat4["proyecto_autor"] ?></th>
                                <th><?php echo $dat4["proyecto"] ?></th>
                                <th><?php echo $dat4["empresa"] ?></th>
                                <th><?php echo $dat4["carrera"] ?></th>
                                <th><?php echo $dat4["anio"] ?></th>
                                <th><?php echo $dat4["no_control"] ?></th>
                                <th><a href="app/ver.php?id_res=<?php echo $dat4["id_res"]; ?>" target="'_blank">VER</a></th>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($IL as $dat5): ?>
                            <tr>
                                <th><?php echo $dat5["proyecto"] ?></th>
                                <th><?php echo $dat5["proyecto_autor"] ?></th>
                                <th><?php echo $dat5["empresa"] ?></th>
                                <th><?php echo $dat5["carrera"] ?></th>
                                <th><?php echo $dat5["anio"] ?></th>
                                <th><?php echo $dat5["no_control"] ?></th>
                                <th><a href="app/ver.php?id_res=<?php echo $dat5["id_res"]; ?>" target="'_blank">VER</a></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <scritp src="assets/DataTables/jquery.min.js">
            </script>
            <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#IGE_table').DataTable();
                    $('#IM_table').DataTable();
                    $('#II_table').DataTable();
                    $('#ITIC_table').DataTable();
                    $('#IL_table').DataTable();

                });
            </script>
</body>

</html>