
<?php
session_start();
if(isset($_POST['enviar'])){
if($_POST['username'] == NULL or $_POST['password'] == NULL){
echo "<h1>Campos vacios</h1>";;
echo "<br> <br> <a href =\"Login.php\"> Regresar </a>";

}
else{
$usuario = "admin";
$contraseña = "1234";

if($usuario == $_POST['username'] && $contraseña == $_POST['password']){
$_SESSION['user'] = $_POST['username'];
header("location:admin.php");


}
else{
echo "<h1>Datos incorrectos</h1>";
echo " <br> <a href =\"Login.php\"> Regresar </a>";
}

}

}
else
{
 header("location:Login.php");
}

?>