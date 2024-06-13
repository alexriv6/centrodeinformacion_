<?php
include ('../conexion/conexion.php');
include ('../conexion/config.inc.php');

if (isset($_POST['aceptar'])) {

            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $num_tel = $_POST["num_tel"];
            $comentario = $_POST["comentario"];
            $db=new Conect_MySql();
            $sql = "INSERT INTO comentarios(nombre, correo, num_tel, comentario) VALUES('$nombre','$correo','$num_tel','$comentario')";
            $query = $db->execute($sql);
            if($query){

                echo"<script type=\"text/javascript\">alert('¡ Gracias :) !'); window.location='../index.php';</script>";
                }
        } else {
            echo"<script type=\"text/javascript\">alert('Ha ocurrido un problema, lamentmos no poder ayudarte ');</script>";
            echo "<a href = '../index.php'>Regresar</a>";

        }

?>