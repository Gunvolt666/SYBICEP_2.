<?php

include 'clases/usuarios.class.php';

$usuarioSesion = new UsuarioSesion();
$usuario = new Usuarios();
if (isset($_SESSION['usuario'])) {

	echo "Hay sesion";
	$passForm = $_POST['password'];

	if ($user->usuarioExiste($userForm, $passForm)) {
		$usuarioSesion->setCurrentUser($userForm);
		$usuario->setCurrentUser($userForm);

		include_once 'vistas/MenuPrincipal.php';
	}

}
else
{
if ($user->usuarioExiste($userForm, $passForm)) {
		$usuarioSesion->setCurrentUser($userForm);
		$usuario->setCurrentUser($userForm);

		include_once 'vistas/MenuPrincipal.php';
	}
	else
	{
		$errorLogin = "Nombre de usuario y/o contraseña incorrecto";
		include_once 'LogSistema.php';
	}	
}

?>