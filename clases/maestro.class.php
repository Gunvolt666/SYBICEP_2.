<?php

require_once('MySQLclass.php');

/**
 * 
 */
class Maestro extends MySQL
{
	public function show($info)
	{
		$consulta = "SELECT * FROM maestros";
	}
	public function read($info)
	//public function read()
	{
		/*if ($info) {
			$consulta = "SELECT * FROM alumnos";
		}*/
		$consulta = "SELECT * FROM maestros";

		return $this->query_row($consulta);
	}
	public function busqueda($info)
	{
		$consulta = "SELECT id_maestro, CONCAT(usuario,' ',carrera,' ',telefono,' ',nombre) nombre, telefono, carrera, usuario FROM maestros WHERE nombre LIKE '%{$info}%' OR usuario LIKE '%{$info}%'";

		return  $this->query_row($consulta);
	}
}

?>