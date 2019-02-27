<!DOCTYPE html>
    <html>
    <head>
        <title>Formulario de Registro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- vinculo a bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/FormularioAlumno.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->  
<link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
   
    <body>
      <form id="#formCheck" action="metodos/crearAlumno.php" method="POST">
        <div class="content-wrapper">
          <div class="contact-form">
          <h1>Formulario de Registro</h1>
       <div class="txtb">
         <label>Nombre Completo</label>
         <input type="text" name="Nombre" value="" placeholder="Ingresa tu nombre">
       </div>
       <div class="txtb">
         <label>Número Teléfonico</label>
         <input type="text" name="Telefono"  placeholder="Ingresa tu número de teléfono">
       </div>
       
       <div class="select">
         <label>Que carrera cursas</label>
         <select name="Carrera" id="Carrera">
          <option value="Derecho">Derecho</option>
          <option value="Administracion de Empresas">Administracion de Empresas</option>
          <option value="Ingenieria en Gestion Empresarial">Ingenieria en Gestion Empresarial</option>
          <option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Computacionales</option>
          <option value="Contabilidad Financiera">Contabilidad Financiera</option>
          <option value="Psicologia Organizacional">Psicologia Organizacional</option>
        </select>

       </div>
       <div class="txtb">
         <label>Escribe tu usuario para el sistema</label>
         <input type="text" name="usuario" value="" placeholder="Nickname">
       </div>
       
       <div class="txtb">
         <label>Escribe una contraseña para este usuario</label>
         <input id="contrasena" type="password" name="password" value="" placeholder="Contraseña">
       </div>
       <div class="txtb">
         <label>Confirma tu contraseña</label>
         <input id="confirContrasena" type="password" placeholder="Contraseña">
       </div>
       
      <div class="container col-md-12 col-lg-12">
        <div class="row">
          <input id="boton" type="submit" class="btn1 col-md-6 col-lg-6 col-sm-6" value="Registrarme">
       <input type="submit" href="Pagina_Principal.html" class="btn2 col-md-6 col-lg-6 col-sm-6" value="Cancelar">  
        <a href="FormularioMaestro.php">Eres profesor? Da click aqui</a>
        </div>
      <div id="noCoinciden"></div>
      </div>
      
     </div>
        </div>
        
     
     </form>
</body>
<script src="js/compararPassword.js"></script>
 <!-- vinculando a libreria Jquery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>