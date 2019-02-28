<?php

require_once ('MySQLclass.php');



class Comentarios extends MySQL
{
	
	function __construct(argument)
	{
		# code...
	}
}

public function Comentarios($info)
{
	if(isset($_POST) & !empty($_POST)){
 
	$comentarios = "INSERT INTO comments (nombre, usuario, asunto, status) VALUES ('$nombre', '$usuario', '$asunto', 'draft')";
	$ires = mysqli_query($this->conect, $consulta) or die(mysqli_error($connection));
	if($ires){
		$smsg = "Your Comment Submitted Successfully";
	}else{
		$fmsg = "Failed to Submit Your Comment";
	}
 
}
}


?>