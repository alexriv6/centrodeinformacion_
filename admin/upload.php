<?php
include_once '../conexion/config.inc.php';

if (isset($_POST['aceptar'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../app/files/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $proyecto = $_POST["proyecto"];
            $proyecto_autor = $_POST["proyecto_autor"];
            $empresa = $_POST["empresa"];
            $carrera = $_POST["carrera"];
            $anio = $_POST["anio"];
            $no_control = $_POST["no_control"];
            $db=new Conect_MySql();
            $sql = "INSERT INTO residencias(proyecto, proyecto_autor, empresa, carrera, anio, no_control, archivo) VALUES('$proyecto','$proyecto_autor','$empresa','$carrera','$anio', '$no_control', '$nombre')";
            $query = $db->execute($sql);
            if($query){

                echo"<script type=\"text/javascript\">alert('¡ Guardado Exitoso !'); window.location='alta.php';</script>";
                }
        } else {
            echo"<script type=\"text/javascript\">alert('El archivo no se puede guardar :( ');</script>";
            echo "Error, favor de comunicarse con el desarrollador <a href = 'alta.php'>Regresar</a>";

        }
    }
}

?>
