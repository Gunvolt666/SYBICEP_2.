<?php

require ('../clases/alumno.class.php');

$Alumno = new Alumno();

//if (isset($_POST['action']))

$action = $_POST['action'];	

if (isset($_POST['info'])) {
	$info = $_POST['info'];
	switch ($action) {
		case 'read':
		//echo "Estas en routeAlumnos en la accion read";
			echo json_encode($Alumno->read($info));
			//echo json_encode($Alumno->read());
			break;
		case 'busqueda':
				
			echo json_encode($Alumno->busqueda($info));
			break;
			case 'login':
				echo json_encode($Alumno->login($info));
				
				break;
		
	}
}

?>