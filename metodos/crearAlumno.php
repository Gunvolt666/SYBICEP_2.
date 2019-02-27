<?php

include ("../clases/database.php");

$alumnos = new MiDB();

if (isset($_POST) && !empty($_POST)) {
	$Nombre = $alumnos->escape($_POST['Nombre']);

	$Telefono = $alumnos->escape($_POST['Telefono']);

	$Carrera = $alumnos->escape($_POST['Carrera']);

	$usuario = $alumnos->escape($_POST['usuario']);
	
	$password = $alumnos->escape($_POST['password']);
	md5($password);
	$resultado = $alumnos->createAlumno($Nombre, $Telefono, $Carrera, $usuario, $password);
	if ($resultado) {
		$mensaje = "Se a registrado con exito";
		header("location.href:index.html");
		$class = "alert alert-success";

	}
	else
	{
		$mensaje = "Algo anda mal";
		$class = "alert alert-danger";
	}
}

?>
<div class="<?php echo $class?>">
				  <?php echo $mensaje;?>
				</div>	
					<?php
				
	
			?>