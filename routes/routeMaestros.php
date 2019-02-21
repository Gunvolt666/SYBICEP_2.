<?php

require ('../clases/maestro.class.php');

$Maestro = new Maestro();

//if (isset($_POST['action']))

$action = $_POST['action'];	

if (isset($_POST['info'])) {
	$info = $_POST['info'];
	switch ($action) {
		case 'read':
			echo json_encode($Maestro->read($info));
			//echo json_encode($Maestro->read());
			break;
		case 'busqueda':
			echo json_encode($Maestro->busqueda($info));
			break;
		
	}
}

?>