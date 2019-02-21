<?php

require_once('MySQLclass.php');

/**
 * 
 */
class Alumno extends MySQL
{
	public function show($info)
	{
		$consulta = "SELECT * FROM alumnos";

	}
	public function read($info)
	//public function read()
	{
		if ($info == 2) {
			$consulta = "SELECT * FROM alumnos";
		}
		if ($info == 1 ) {
			$consulta = "SELECT alumnos.Nombre, libros.nombre_libro, alumno_libros.id_alumno, alumno_libros.id_libro FROM alumno_libros INNER JOIN alumnos ON alumnos.id_alumno = alumno_libros.id_alumno INNER JOIN libros ON libros.id_libro = alumno_libros.id_libro WHERE alumno_libros.status = $info;";
		}
		else if ($info == 0 ) {
			$consulta = "SELECT alumnos.Nombre, libros.nombre_libro, alumno_libros.id_alumno, alumno_libros.id_libro FROM alumno_libros INNER JOIN alumnos ON alumnos.id_alumno = alumno_libros.id_alumno INNER JOIN libros ON libros.id_libro = alumno_libros.id_libro WHERE alumno_libros.status = $info;";
		}
		
		return $this->query_row($consulta);
	}
	public function busqueda($info)
	{
		$consulta = "SELECT id_alumno, CONCAT(Nombre,' ',Carrera,' ',Telefono)nombre, telefono, carrera, usuario_alumno FROM alumnos WHERE Nombre LIKE '%{$info}%' OR usuario_alumno LIKE '%{$info}%'";

		return  $this->query_row($consulta);
	}
}

?>