<?php

require_once('MySQLclass.php');

/**
 * 
 */
class Usuarios extends MySQL
{
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
	public function Crear()
	{

	}
	public function Editar()
	{
		$query = mysql_real_escape_string(htmlentities($_POST['usuario']));
		mysql_query("UPDATE usuarios (usuario, nombre, passwrord) VALUES ('$usuario', '$contra_admin', '$nombre') WHERE id_admin = '$id_admin'");
	}
}

?>