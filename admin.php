<?php
session_start();
if($_SESSION['user'] == "admin"){

echo "Estas dentro del panel de administrador";

echo "<br> <br> <a href =\"salir.php\"> salir panel</a>";




} else {
  echo "adios";
  header("location:Login.php");
}




?>