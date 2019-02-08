<?php

include ("../clases/database.php");

$alumnos = new Database();

if (isset($_POST) && !empty($_POST)) {
	$Nombre = $alumnos->escape($_POST['Nombre']);
	$Carrera = $alumnos->escape($_POST['Carrera']);
	$Telefono = $alumnos->escape($_POST['Telefono']);
	$usuario_alumno = $alumnos->escape($_POST['usuario_alumno']);
	$pass_alumno = $alumnos->escape($_POST['pass_alumno']);

	$resultado = $alumnos->createAlumno($Nombre, $Telefono, $Carrera, $usuario_alumno, $pass_alumno);
	if ($resultado) {
		$mensaje = "Se a registrado con exito";
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
				  <?php echo $message;?>
				</div>	
					<?php
				}
	
			?>