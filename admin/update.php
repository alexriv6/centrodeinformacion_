<?php
// include("../conexion/conexion.php");
include_once '../conexion/config.inc.php';

 
 if(isset($_POST['guardar']))// SI SE PRESIONA EL BOTÓN INSERTAR OCURRE LO SIGUIENTE:
 {
    $id_res = $_POST["id_res"];
    $proyecto = $_POST["proyecto"];
    $proyecto_autor = $_POST["proyecto_autor"];
    $empresa = $_POST["empresa"];
    $carrera = $_POST["carrera"];
    $anio = $_POST["anio"];
    $no_control = $_POST["no_control"];
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../app/files/" . $nombre;


   if(empty($_POST['archivo'])){
    echo("<script>console.log('Correcto: " . "');</script>");

    if ($nombre != "" ){
        
        if (copy($ruta, $destino)) {

            echo("<script>console.log('ARCHIVO: " . $nombre . "');</script>");
    
            $db=new Conect_MySql();
                $sql = "UPDATE residencias SET proyecto = '$proyecto', proyecto_autor = '$proyecto_autor', empresa = '$empresa', carrera = '$carrera', anio ='$anio', no_control = '$no_control', archivo = '$nombre' WHERE id_res = '$id_res' ";
                $query = $db->execute($sql);
    
          if ($sql==true){// SI LA QUERY ANTERIOR SE EJECUTA CON EXITO
            echo"<script type=\"text/javascript\">alert('¡ Guardado Exitoso !'); window.location='modificar.php';</script>";
          }else{
          echo "Error";
              //echo"<script type=\"text/javascript\">alert('El registro no se puede guardar :( '); window.location='index.php';</script>";
          }
        }
    }else{

        echo("<script>console.log('correcto: " . "');</script>");
        if ($nombre == null || $nombre=="" ){
            $db=new Conect_MySql();
            $sql = "UPDATE residencias SET proyecto = '$proyecto', proyecto_autor = '$proyecto_autor', empresa = '$empresa', carrera = '$carrera', anio ='$anio', no_control = '$no_control' WHERE id_res = '$id_res' ";
            $query = $db->execute($sql);

            echo"<script type=\"text/javascript\">alert('¡ OK :D !'); window.location='modificar.php';</script>";

        }else{
            echo"<script type=\"text/javascript\">alert('¡ No !'); window.location='modificar.php';</script>";

        }


    }
    


 
   }else{
  
    echo("<script>console.log('Correcto: " . "');</script>");

    if ($nombre != "" ){
        if (copy($ruta, $destino)) {

        echo("<script>console.log('ARCHIVO: " . $nombre . "');</script>");

        $db=new Conect_MySql();
            $sql = "UPDATE residencias SET proyecto = '$proyecto', proyecto_autor = '$proyecto_autor', empresa = '$empresa', carrera = '$carrera', anio ='$anio', no_control = '$no_control', archivo = '$nombre' WHERE id_res = '$id_res' ";
            $query = $db->execute($sql);

      if ($sql==true){// SI LA QUERY ANTERIOR SE EJECUTA CON EXITO
        echo"<script type=\"text/javascript\">alert('¡ Guardado Exitoso !'); window.location='modificar.php';</script>";
      }else{
      echo "Error";
          //echo"<script type=\"text/javascript\">alert('El registro no se puede guardar :( '); window.location='index.php';</script>";
      }
    }
   }else{
       if ($nombre == null || $nombre=="" ){
        if (copy($ruta, $destino)) {
        $db=new Conect_MySql();
        $sql = "UPDATE residencias SET proyecto = '$proyecto', proyecto_autor = '$proyecto_autor', empresa = '$empresa', carrera = '$carrera', anio ='$anio', no_control = '$no_control', archivo = '$nombre' WHERE id_res = '$id_res' ";
        $query = $db->execute($sql);
          
           echo"<script type=\"text/javascript\">alert('¡ OK :D !'); window.location='modificar.php';</script>";

       }
       else{
           echo"<script type=\"text/javascript\">alert('¡ No se pudo modificar el archivo !'); window.location='modificar.php';</script>";

       }
    }


   }
 
   }
 }

?>





