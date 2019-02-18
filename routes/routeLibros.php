<?php

require ('../clases/libros.class.php');

$Libro = new Libro();

$action = $_POST['action'];

if (isset($_POST['info'])) {
	$info = $_POST['info'];
	switch ($action) {
		case 'read':
			echo json_encode($Libro->read($info));
			//echo json_encode($Alumno->read());
			break;
		case 'busqueda':
			echo json_encode($Libro->busqueda($info));
			break;
		
	}
}

?>