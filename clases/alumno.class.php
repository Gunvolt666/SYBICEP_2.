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
		if ($info == 2) {
			$consulta = "SELECT * FROM alumnos Nombre, libros nombre_libro WHERE Nombre.Nombre=nombre_libro.nombre_libro AND IF(libro != '') libro, INNER JOIN  "
		}
	}
	public function busqueda($info)
	{
		$consulta = "SELECT id_alumno, CONCAT(Carrera,' ',Telefono,' ',Nombre) Nombre, Telefono, Carrera, usuario_alumno FROM alumnos WHERE Nombre LIKE '%{$info}%'";
			//exit($consulta);
		return  $this->query_row($consulta);
	}
}

?>