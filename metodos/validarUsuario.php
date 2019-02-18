<?php
include("../clases/MySQLclass.php");
include 'LogSesionesAdmin.php';
session_start();
$usuario_autenticado=$_SESSION['usuario'];

$sql = mysqli_query($db,"SELECT usuario FROM administrador WHERE usuario='$usuario_autenticado' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$login_user=$row['usuario'];

if(!isset($user_check))
{
header("Location: ../MenuPrincipal.php");
}
?>