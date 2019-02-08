<!DOCTYPE html>
    <html>
    <head>
        <title>Formulario de Registro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- vinculo a bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/FormularioAlumno.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->  
<link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
   
    <body>
      <form action="registroAlumno.php" method="POST">
        <div class="content-wrapper">
          <div class="contact-form">
          <h1>Formulario de Registro</h1>
       <div class="txtb">
         <label>Nombre Completo</label>
         <input type="text" name="Nombre" value="" placeholder="Ingresa tu nombre">
       </div>
       <div class="txtb">
         <label>Número Teléfonico</label>
         <input type="text" name="Telefono" value="" placeholder="Ingresa tu número de teléfono">
       </div>
       
       <div class="txtb">
         <label>Que carrera cursas</label>
         <input type="text" name="Carrera" value="" placeholder="Ingresa la carrera que estas cursando">
       </div>
       <div class="txtb">
         <label>Escribe tu usuario para el sistema</label>
         <input type="text" name="usuario_alumno" value="" placeholder="Nickname">
       </div>
       
       <div class="txtb">
         <label>Escribe una contraseña para este usuario</label>
         <input type="text" name="pass_alumno" value="" placeholder="Contraseña">
       </div>
       
      <div class="container col-md-12 col-lg-12">
        <div class="row">
          <input type="submit" class="btn1 col-md-6 col-lg-6 col-sm-6" value="Registrarme">
       <input type="submit" href="Pagina_Principal.html" class="btn2 col-md-6 col-lg-6 col-sm-6" value="Cancelar">  
        <a href="FormularioMaestro.php">Eres profesor? Da click aqui</a>
        </div>
      
      </div>
      
     </div>
        </div>
        
     
     </form>
</body>
 <!-- vinculando a libreria Jquery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>