<?php
	include_once('../models/connection.php');

	if(!isset(send))
	$nombre = $_POST['nombre'];
	$mail = $_POST['correo'];
	$header = 'From: ' .$mail. "\r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";
	$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
	$mensaje .= "Su e-mail es: " . $mail . " \r\n";
	$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());
	$para = 'delicias_eldorado@hotmail.com';
	$asunto = 'Comentario o sugerencia pagina Delicias';
	mail($para, $asunto, utf8_decode($mensaje), $header);
	echo '&estatus = ok&';
?>