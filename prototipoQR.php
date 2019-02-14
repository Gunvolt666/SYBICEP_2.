<!DOCTYPE html>
<html>
<head>
	<title>Pruebas QR</title>
</head>
<body>
<form action="MisQR/GenerarPNGQR.php" method="POST">
	<input type="text" name="nombre">
	<input type="text" name="libro">
	<input type="submit" name="">
</form>
</body>
</html>
<?php
$time = time();

echo date("d-m-Y (H:i:s)", $time);
 ?>