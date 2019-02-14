<?php

require_once('MySQLclass.php');

/**
 * 
 */
class Usuarios extends MySQL
{
	public function show($info)
	{
		$consulta = "SELECT usuario, nombre FROM administrador";
	}
	public function read($info)
	//public function read()
	{
		/*if ($info) {
			$consulta = "SELECT * FROM alumnos";
		}*/
		$consulta = "SELECT * FROM administrador";

		return $this->query_row($consulta);
	}
	public function busqueda($info)
	{

		$consulta = "SELECT id_admin, CONCAT(usuario,' ',nombre) nombre, usuario FROM administrador WHERE nombre LIKE '%{$info}' OR usuario LIKE '%{$info}%'";
		return  $this->query_row($consulta);
	}
	public function Crear()
	{

	}
	public function Editar()
	{
		$query = mysql_real_escape_string(htmlentities($_POST['usuario']));
		mysql_query("UPDATE administrador (usuario, contra_admin, nombre) VALUES ('$usuario', '$contra_admin', '$nombre') WHERE id_admin = '$id_admin'");
	}
}

?>