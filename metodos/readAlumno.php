<?php

while ($row = mysqli_fetch_object($listado)) {
	
	$Nombre = $row->Nombre;
	$Carrera = $row->Carrera;
	$Telefono = $row->Telefono;
	$usuario_alumno = $row->usuario_alumno;
	$pass_alumno = $row->pass_alumno;

	
}

?>