<?php 
	$nombre = $_POST['nombre'];
	$asunto = $_POST['tema'];
	$mensaje = $_POST['mensaje'];
    $mail = $_POST['email'];

	echo $nombre. "ha dicho <br/>".$mensaje;
	if(mail('pp@pp.com', $asunto, $mensaje)){
		echo "mail enviado";
	}else{
		echo "uyuyuyuyuy";
	}
 ?>