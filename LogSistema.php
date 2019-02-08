<?php

session_start();
if (isset($_SESSION['usuario'])) {
  if (($_SESSION['usuario']['tipo'] == "Admin")) {
    header('Location: MenuPrincipal.php');
  }
  elseif ($_SESSION['usuario']['tipo'] == "Usuario") {
    header('Location: MenuPrincipal.php');
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/LogSistema.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="login">
	<h1>Acceso al Sistema SYBICEP</h1>
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Iniciar Sesion</h2>

  <form class="login-container">
    <p><input type="text" placeholder="Escriibe tu usuario"></p>
    <p><input type="password" placeholder="Escribe tu contraseña"></p>
    <p><input type="submit" value="ACCEDER"></p>
  </form>
</div>

</body>
</html>