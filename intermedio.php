<?php

require_once 'clases/usuarios.class.php';

$userSession = new UserSession();
$usuario = new Usuario();

if (isset($_SESSION['user'])) {
	echo "Funciona";
}
elseif (isset($_POST['usuario']) && isset($_POST['password'])) {
	$userForm = $_POST['usuario'];
	$passForm = $_POST['password'];
	if ($user->usuarioExiste($userForm, $passForm)) {
		echo "usuario validado";
	}
	else
	{
		echo "Algo anda mal";
	}
}

else
{
	echo "Login";
	include_once 'Screen.php';
}
?>