<?php
include("../conexion/conexion.php");
include("../conexion/config.inc.php");

  $query = mysqli_query($conexion, "TRUNCATE comentarios");


  if ($query == true) {
     echo "<script>alert('Eliminado Correctamente!'); location.href='comentarios.php';</script>";
  }
  else {
     echo "<script>alert('No se puede Eliminar!'); location.href='comentarios.php';</script>";
  }

?>