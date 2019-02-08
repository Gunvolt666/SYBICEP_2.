<?php

if (isset($_GET['id_alumno'])) {
	include ("database.php");
	$alumno = new Database();
	$id_alumno = intval($_GET['id_alumno']);
	$resultado = $alumno->deleteAlumno($id_alumno);

	if ($resultado) {
		echo "Exito";
	}
	else
	{
		echo "Algo anda mal";
	}
}

?>