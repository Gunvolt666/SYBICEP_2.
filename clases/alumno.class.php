<?php

require_once('MySQLclass.php');

/**
 * 
 */
class Alumno extends MySQL
{
	public function show($info)
	{
		$consulta = "SELECT Nombre, Telefono, Carrera, usuario_alumno FROM alumnos";
	}
	public function read($info)
	//public function read()
	{
		/*if ($info) {
			$consulta = "SELECT * FROM alumnos";
		}*/
		$consulta = "SELECT * FROM alumnos";

		return $this->query_row($consulta);
	}
	public function busqueda($info)
	{
		$consulta = "SELECT id_alumno, CONCAT(Carrera,''Telefono,''Nombre) Nombre, Telefono, Carrera, usuario_alumno FROM alumnos WHERE Nombre LIKE '%{$info}' OR Telefono LIKE '%{$info}%'";
		return  $this->query_row($consulta);
	}
}

?>