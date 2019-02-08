<?php

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])== 'xmlhttprequest') {
	require_once('MySQLclass.php');
	sleep(2);
	session_start();

	$mysqli->set_charset('utf8');

	$usuario = $mysqli->real_escape_string($_POST['usuario']);

	$password = $mysqli->real_escape_string($_POST['contra_admin']);

	if ($consulta = $mysqli->prepare("SELECT Nombre AND usuario FROM administrador WHERE usuario = ? AND contra_admin= ?") ) {
		$consulta->bind_param('ss', $usuario, $password);

		$consulta->execute();

		$resultado = $consulta->get_result();

		if ($resultado->num_rows==1) {
			$data = $resultado->fetch_assoc();

			$_SESSION['usuario'] = $datos;
			echo json_encode(array('error' => false, 'tipo' => $data['tipo']));
			else
			{
				echo json_encode(array('error' => true));	
			}
			$consulta -> close();
		}

	}
	$mysqli->close();

}

?>