<?php

include 'clases/usuarios.class.php';

$usuarioSesion = new UsuarioSesion();
$usuario = new Usuarios();
 if (isset($_POST['usuario']) && isset($_POST['password'])) {
  
  // echo "validacion de Login";
  $userForm = $_POST['usuario'];
  $passForm = $_POST['password'];

  if($usuario->usuarioExiste($userForm, $passForm)) {
   echo "usuario validado";
   $usuarioSession->setCurrentUser($userForm);
   $usuario->setUser($userForm);

   include_once 'vistas/MenuPrincipal.php';
	}

   else{
   // echo "Nombre de usuario y/o password incorrecto";
   $errorLogin = "Nombre de usuario y/o contraseña es incorrecto";
   include_once 'LogSistema.php';
  }
}


?>