<?php
require '../clases/MySQLclass.php';

$usuarios = mysqli_query->query("SELECT usuario_alumno, Nombre FROM alumnos WHERE usuario_alumno = '"$_POST['usuario_alumno']."'
     AND pass_alumno = '"$_POST['pass_alumno']."'");

if ($usuarios->num_rows==1) {
  $datos = $usuarios->fecth_assoc();

  echo json_encode(array('error' => false, ''));
}
else
{
  echo json_encode(array());
}

?>