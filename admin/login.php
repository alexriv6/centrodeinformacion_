<?php
 include("../conexion/conexion.php");

   	if(!empty($_POST)){
      $user = $_POST['usuario'];
      $pass = $_POST['pass'];

      $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username = '$user' AND pass = '$pass'");

   		if($query->num_rows>0){
   			while($row = mysqli_fetch_array($query)){
   				//echo "Bienvenido ".$row['username'];
   				@session_start();
   				$_SESSION["username"]=$row["username"];
   			//	$_SESSION["id_admin"]=$row["Id_admin"];
   				//header("Location: perfil.php");
          echo true;
          //echo $_SESSION["username"];
   			}

   		}else{
        echo false;
   		}

   	}

   ?>