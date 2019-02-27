
<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesion</title>
	<link rel="stylesheet" type="text/css" href="css/LogSistema.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="login">
	<h1><strong>Acceso al Sistema SYBICEP</strong></h1>
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Iniciar Sesion</h2>

  <form action="intermedio.php" method="POST" class="login-container">
    <?php
    if (isset($errorLogin)) {
      echo $errorLogin;
    }
    ?>
    <p><input id="usuario" type="text" name="usuario" placeholder="Escribe tu usuario"></p>
    <p><input id="password" type="password" name="password" placeholder="Escribe tu contraseña"></p>
    <p><input type="submit" id="boton" value="ACCEDER"></p>
  </form>
</div>
<script src="js/jQuery-2.1.4.min.js"></script>
<script src="js/usuarioslog.js"></script>
</body>
</html>