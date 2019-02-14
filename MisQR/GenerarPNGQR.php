<?php

include "../clases/conectarQR.php";
include "ClaseQR.php"; 
$libro = $_POST['libro'];
$tipo = $_POST['tipo'];
$dateqr = date('Yms');
// Objeto QR
$qr = new QR_BarCode(); 


$qr->sms($libro, $tipo);

// display QR code image
$qr->qrCode();
$query = "INSERT INTO qr (qr, libro, tipo) VALUES ('$dateqr', '$libro', '$tipo' )";
	if (mysqli_query($conexion, $query)) {
		echo "<script> alert('registrado') </script> ";
	}
	else {
  echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}

?>