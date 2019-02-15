<?php
require '../clases/MySQLclass.php';

$usuarios = mysql_query("SELECT usuario, Nombre, tipo FROM administrador WHERE usuario = '"$_POST['usuario']."'
     AND contra_admin = '"$_POST['contra_admin']."'");

if ($usuarios->num_rows==1) {
  $datos = $usuarios->fecth_assoc();

  echo json_encode(array('error' => false, 'tipo' => $datos['tipo']));
}
else
{
  echo json_encode(array('error' =>true));
}
$mysqli->close();
?>