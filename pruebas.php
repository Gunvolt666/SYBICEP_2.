<?php

include 'conexionprueba.php';
session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $usuario = mysqli_real_escape_string($db,$_POST['usuario']);
      $contra = mysqli_real_escape_string($db,$_POST['contra']); 
      
      $sql = "SELECT id FROM usuarios WHERE usuario = '$usuario' AND password = '$contra'";
     

      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result) or die(mysqli_error($result));
     
       $count = mysqli_num_rows($result) or die(mysqli_error());


       if($count == 0) {
        //session_register('usuario');
         echo "Funciona el codigo";
       $usuario = $_SESSION['usuario'];
         
         header("location: Bienvenido.php");
      }else {
         $error = "Usuario no valido";
      }
      }

?>

