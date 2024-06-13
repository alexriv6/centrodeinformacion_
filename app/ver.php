<?php
include("../conexion/conexion.php");
$id_res = $_GET['id_res'];
$doc = mysqli_query($conexion, "SELECT archivo FROM residencias WHERE id_res = $id_res");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Residencia Profesional</title>
    <script type="style/css">

    </script>
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
                    <a href="../index.php" class="btn btn-dark" type="button">Regresar</a>
                </div>						
    </nav><br><br>
    <div class="col-md-10 offset-1">
    <?php  foreach ($doc as $dat):?>
    <iframe src="files/<?php echo $dat["archivo"];?>" target="_blank" width="1070" height="750"></iframe>
    <?php endforeach;?>
    </div>
    


</body>
</html>