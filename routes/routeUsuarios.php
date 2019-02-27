<?php

require ('../clases/usuarios.class.php');

$Usuarios = new Usuarios();

$action = $_POST['action'];

if (isset($_POST['info'])) {
	$info = $_POST['info'];
	switch ($action) {
		case 'read':
			echo json_encode($Usuarios->read($info));
			//echo json_encode($Alumno->read());
			break;
		case 'busqueda':
			echo json_encode($Usuarios->busqueda($info));
			break;
		case 'login':
			echo json_encode($Usuarios->Login($info));
			break;
			case 'crear':
			echo json_encode($Usuarios->Crear($info));
				break;
	}
}

?>
