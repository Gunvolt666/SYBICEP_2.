<?php

require_once('MySQLclass.php');

/**
 * 
 */
class Usuarios extends MySQL
{
	public function Login($info)
	{
		session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $usuario = mysqli_real_escape_string($dbCon,$_POST['usuario']);
      $contra = mysqli_real_escape_string($db,$_POST['contra']); 
      
      $sql = "SELECT id FROM usuarios WHERE usuario = '$usuario' and password = '$contra'";
      if ($sql = true) {


      $result = mysqli_query($dbCon,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $activo = $row['activo'];
       $count = mysqli_num_rows($result);


       if($count == 1) {
         session_register("usuario");
         $_SESSION['login_user'] = $usuario;
         
         header("location: ../vistas/MenuPrincipal.php");
      }else {
         $error = "Usuario no valido";
      }
      }
      else
      {
      	echo "Error al seleccionar la Base de datos";
      }
   }
	}
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
	public function usuarioExiste($user, $pass)
	{
		$md5pass = md5($pass);

		$query= $this->connect()->prepare("SELECT * FROM usuarios WHERE usuario = :user AND password = :pass");
		$query->execute(['user' => $user, 'pass' => $md5pass]);

		if ($query->rowCount()) {
			return true;
		}
		else
		{
			return false;
		}
	}
	public function usuarioAsignado($user)
	{
		$query = $this->connect()->prepare("SELECT ^FROM usuarios WHERE usuario = :user");
		$query->execute(['user' => $user]);

		foreach ($query as $currentUser => $value) {
			$this->nombre = $currentUser['nombre'];
			$this->nombre = $currentUser['usuario'];
		}
	}
	public function obtenerNombre()
	{
		return $this->nombre;
	}
}

class UsuarioSesion extends MySQL
{
	public function __construct()
	{
		session_start();
	}

	public function setCurrentUser($user)
	{
		$_SESSION['user'] = $user;
	}
	public function getCurrentUser()
	{
		return $_SESSION['user'];
	}
	public function closeSession()
	{
		session_unset();
		session_destroy();
	}
}

?>