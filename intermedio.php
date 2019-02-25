<?php

require_once 'clases/usuarios.class.php';

$usuarioSesion = new UsuarioSesion();
$usuario = new Usuarios();

if (isset($_SESSION['user'])) {
	echo "Funciona";
}
elseif (isset($_POST['usuario']) && isset($_POST['password'])) {
	$userForm = $_POST['usuario'];
	$passForm = $_POST['password'];
	if ($user->usuarioExiste($userForm, $passForm)) {
		$usuarioSesion->setCurrentUser($userForm);
		$usuario->setUser($userForm);
	}
	else
	{
		$errorLogin = "Nombre de usuario y/o password incorrecto";
		include_once 'logSistema.php';
	}
}

else
{
	echo "Login";
	include_once 'vistas/MenuPrincipal.php';
}
?>