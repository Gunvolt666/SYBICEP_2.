<?php

/**
 * 
 */
class MiDB
{
	private $conexion;
	private $localhost ="localhost";
	private $usuario = "root";
	private $contrasena = "";
	private $BD = "sybicep";

	function __construct()
	{
		$this->connect_db();
	}
	public function connect_db()
	{
		$this->conexion = mysqli_connect($this->localhost, $this->usuario, $this->contrasena, $this->BD);
		if (mysqli_connect_error()) {
			die("Algo anda mal con la conexion". mysqli_connect_error().mysqli_connect_errno());
		}
	}
	public function escape($var)
	{
		$return = mysql_real_escape_string($this->conexion, $var);
		return $return;
	}
	public function createAlumno($Nombre, $Carrera, $Telefono, $usuario_alumno, $pass_alumno)
	{
		$query = "INSERT INTO alumnos (Nombre, Carrera, Telefono, usuario_alumno, pass_alumno) VALUES ('$Nombre', '$Carrera', '$Telefono', '$usuario_alumno', '$pass_alumno')";
		$resultado = mysqli_query($this->conexion, $query);
		if ($resultado) {
			return true;
		}
		else
		{
			return false;
		}
	}
	public function readAlumno()
	{
		$query = "SELECT * FROM alumnos";
		$resultado = mysqli_query($this->conexion, $query);
		return $resultado;
	}
	public function oneRecordAlumno($id_alumno)
	{
		$query = "SELECT * FROM alumnos WHERE id_alumno ='$id_alumno'";
		$resultado = mysqli_query($this->conexion, $resultado);
		$return = mysqli_fetch_object($resultado);
		return $return;
	}
	public function updateAlumno($Nombre, $Carrera, $Telefono, $usuario_alumno, $pass_alumno)
	{
		$query = "UPDATE alumnos SET Nombre = '$Nombre', Carrera='$Carrera', Telefono='$Telefono', usuario_alumno='$usuario_alumno', pass_alumno='$pass_alumno' WHERE id_alumno = '$id_alumno'";

		$resultado = mysqli_query($this->conexion, $query);
		if ($resultado) {
			return true;
		}
		else
		{
			return false;
		}
	}
	public function deleteAlumno($id_alumno)
	{
		$query = "DELETE FROM alumnos WHERE id_alumno = '$id_alumno'";
		$resultado = mysqli_query($this->conexion, $query);
		if ($resultado) {
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>