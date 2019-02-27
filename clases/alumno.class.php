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
	private function alumnoExiste($usuario, $password)
	{
		
		$consulta = "SELECT * FROM alumnos WHERE usuario = '$usuario' AND password = '$password'";
		$query = $this->query_assoc($consulta);
		if (count($query) > 0) {
			
	return array('status' => 1, 'usuario' => $query[0]['usuario'], 'Nombre' => $query[0]['Nombre'], 'id_alumno' => $query[0]['id_alumno']);

		}
		else
		{
			
			return array('status' => 0);
		}

	}
	public function login($info)
	{
		$usuario = $info['usuario'];
		$password = $info['password'];
		
		$resultado = $this->alumnoExiste($usuario, $password);

		if ($resultado['status'] == 1) {
			$_SESSION['id_alumno'] = $resultado['id_alumno'];
			$_SESSION['Nombre'] = $resultado['Nombre'];
			$_SESSION['usuario'] = $resultado['usuario'];

			return true;

		}
		else
			return false;
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