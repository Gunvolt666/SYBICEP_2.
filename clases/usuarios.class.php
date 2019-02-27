<?php

require_once('MySQLclass.php');

/**
 * 
 */
class Usuarios extends MySQL
{
	private $nombre;
	private $usuario;

	public function login($info)
	{
		$usuario = $info['usuario'];
		$password = $info['password'];
		
		$resultado = $this->usuarioExiste($usuario, $password);

		if ($resultado['status'] == 1) {
			$_SESSION['id'] = $resultado['id'];
			$_SESSION['nombre'] = $resultado['nombre'];
			$_SESSION['privilegio'] = $resultado['privilegio'];
			$_SESSION['usuario'] = $resultado['usuario'];

			return true;

		}
		else
			return false;
	}
	
	public function show($info)
	{
		$consulta = "SELECT nombre, usuario, fecha_registro FROM usuarios";
	}
	public function read($info)
	//public function read()
	{
		/*if ($info) {
			$consulta = "SELECT * FROM alumnos";
		}*/
		$consulta = "SELECT * FROM usuarios";

		return $this->query_row($consulta);
	}
	public function busqueda($info)
	{

		$consulta = "SELECT id, CONCAT(nombre,' ',usuario) nombre, usuario, fecha_registro FROM usuarios WHERE nombre LIKE '%{$info}' OR usuario LIKE '%{$info}%'";
		return  $this->query_row($consulta);
	}
	public function Crear($usuario, $password, $privilegio, $fecha_registro)
	{
		$insertar = "INSERT INTO usuarios (nombre,usuario, password, privilegio) VALUES ('$nombre', '$usuario', '$password', '$privilegio')";


		$md5pass = md5($password);
		
		}
	public function Editar()
	{
		$query = mysql_real_escape_string(htmlentities($_POST['usuario']));
		mysql_query("UPDATE usuarios (usuario, nombre, passwrord) VALUES ('$usuario', '$contra_admin', '$nombre') WHERE id_admin = '$id_admin'");
	}
	private function usuarioExiste($usuario, $password)
	{
		
		$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
		$query = $this->query_assoc($consulta);
		if (count($query) > 0) {
			
			return array('status' => 1, 'usuario' => $query[0]['usuario'], 'nombre' => $query[0]['nombre'], 'privilegio' => $query[0]['privilegio'], 'id' => $query[0]['id']);

		}
		else
		{
			
			return array('status' => 0);
		}

	}
	public function usuarioAsignado($usuario, $password)
	{
		$query = $this->conect()->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
		$query->execute(['usuario' => $usuario]);

		foreach ($query as $currentUser => $value) {
			$this->nombre = $currentUser['nombre'];
			$this->nombre = $currentUser['usuario'];
		}
	}
	public function obtenerNombre()
	{
		return $this->nombre;
	}
}

class UsuarioSesion extends MySQL
{
	public function __construct()
	{
		session_start();
	}

	public function setCurrentUser($usuario)
	{
		$_SESSION['usuario'] = $usuario;
	}
	public function getCurrentUser()
	{
		return $_SESSION['usuario'];
	}
	public function closeSession()
	{
		session_unset();
		session_destroy();
	}
}

?>