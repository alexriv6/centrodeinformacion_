<?php
include("../conexion/conexion.php");
include("../conexion/config.inc.php");

$id_m = $_POST['id_m'];

  $query = mysqli_query($conexion, "DELETE FROM residencias WHERE id_res = '$id_m'");


  if ($query == true) {
     echo "<script>alert('Eliminado Correctamente!'); location.href='modificar.php';</script>";
  }
  else {
     echo "<script>alert('No se puede Eliminar!'); location.href='modificar.php';</script>";
  }

?>