<?php

require_once('MySQLclass.php');

/**
 * 
 */
class Libro extends MySQL
{
	public function show($info)
	{
		$consulta = "SELECT tipo, nombre_libro, dias_pedido, alumno_libro, situacion FROM libros";
	}
	public function read($info)
	//public function read()
	{
		/*if ($info) {
			$consulta = "SELECT * FROM alumnos";
		}*/
		$consulta = "SELECT * FROM libros";

		return $this->query_row($consulta);
	}
	public function busqueda($info)
	{
		$consulta = "SELECT id_libro, CONCAT(nombre_libro,' ',alumno_libro,' ',dias_pedido) nombre_libro, tipo, situacion, alumno_libro FROM libros WHERE nombre_libro LIKE '%{$info}%'";
	
		return $this->query_row($consulta);
	}
}

?>