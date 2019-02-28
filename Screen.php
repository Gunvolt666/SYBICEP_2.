<?php

require_once 'clases/alumno.class.php';

session_start();

$usuario = $_SESSION['usuario'];


?>

<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<title>Mi Portal</title>

<meta name="description" content="Responsive Header Nav">

<meta name="author" content="Treehouse">

<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">

<link rel="stylesheet" href="css/Screen.css">

<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<script src="js/Screen.js"></script>

</head>

<body>

<header>

<a href="#" id="logo">SEARCH YOUR BOOK</a>

<nav>

<a href="#" id="menu-icon"></a>

<ul>
<li><a href=""><?php echo $usuario; ?></a></li>
<li><a href="#" class="current">INICIO</a></li>
<li><a href="#">COMO FUNCIONA?</a></li>
<li><a href="#">LIBROS</a></li>
<li><a href="#">MIS QR</a></li>
<li><a href="#">CONTACTO</a></li>
<li><a href="">CERRAR SESION</a></li>

</ul>

</nav>

</header>

<section>

<img src="css/ICEP.png" alt="Respond" />

<h1>Libros recientes</h1>

<p></p>

<p></p>

<p></p>

</section>

</body>

</html>