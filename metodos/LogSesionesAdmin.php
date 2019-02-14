<?php
session_start();
include("../clases/MySQLclass.php"); //Conexion

$error = ""; //Variables para guardar errores
if(isset($_POST["submit"]))
{
if(empty($_POST["usuario"]) || empty($_POST["contra_admin"]))
{
$error = "Ambos campos son requeridos";
}else
{

$usuario=$_POST['usuario'];
$contra_admin=$_POST['contra_admin'];

// para evitar inyecciones SQL
$usuario = stripslashes($usuario);
$contra_admin = stripslashes($contra_admin);
$username = mysqli_real_escape_string($dbCon, $usuario);
$contra_admin = mysqli_real_escape_string($dbCon, $contra_admin);
$contra_admin = md5($contra_admin);

//Chequeo en la BD
$sql="SELECT id_admin FROM administrador WHERE usuario='$usuario' and contra_admin='$contra_admin'";
$result=mysqli_query($dbCon,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);



if(mysqli_num_rows($result) == 1)
{
$_SESSION['usuario'] = $login_user; // Iniciar Sesion
header("location: ../MenuPrincipal.php"); //
}else
{
$error = "Usuario o contraseña incorrecto";
}

}
}

?>