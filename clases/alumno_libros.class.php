<?php

require_once('MySQLclass.php');


/**
 * 
 */
class Registro extends MySQL
{
	public function show($info)
	{
		$consulta = "SELECT alumnos.Nombre, libros.nombre_libro, alumno_libros.id_alumno, alumno_libros.id_libro FROM alumno_libros INNER JOIN alumnos ON alumnos.id_alumno = alumno_libros.id_alumno INNER JOIN libros ON libros.id_libro = alumno_libros.id_libro WHERE alumno_libros.status = 0;"
	}
}


?>