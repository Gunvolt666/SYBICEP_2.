<?php

include_once 'clases/usuario.class.php'

$userSession = new UserSession();
$user = new User();

if (isset($_SESSION['user'])) {
	echo "Funciona";
}
elseif (isset($_POST['usuario']) && isset($_POST['password'])) {
	$userForm = $_POST['usuario'];
}

else
{
	echo "Login";
	include_once '../Screen.php';
}
?>