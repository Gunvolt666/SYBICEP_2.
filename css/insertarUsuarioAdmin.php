<?php  
include 'conexionDB.php';

$usuario = $_POST['usuario'];
$contra_admin = $_POST['contra_admin'];
$nombre = $_POST['nombre'];

$query = "INSERT INTO administrador (usuario, contra_admin, nombre) VALUES ('$usuario', '$contra_admin', '$nombre')";

$registro = mysqli_query($conexion, $query);

if ($registro == true) {
	echo "Registro exitoso";
}
else
{
	echo "Algo anda mal con la insercion de datos";
}


?>
<html>
<head>
	
	
</head>

<body>
<div class="container">
	
	<div class="row" >
		<div class="row" style="text-align: center;" >
			<?php if ($registro) { ?>
				<h3>REGISTRO GUARDADO</h3>
			<?php } else { ?>
				<h3>ERROR AL SUBIR DATA</h3>
			<?php } ?>
				<a href="MenuUsuariosControl.php" class="btn btn-primary">Regresar</a>
		</div>
	</div>

</div>
</body>
</html>