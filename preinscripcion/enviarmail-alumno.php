<?php
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$anio = $_POST['anio'];
$email = $_POST['email'];
$telefono= $_POST['telefono'];

//ifs que envian correo a inicial
if ($anio === 'INICIAL - SALA MULTICICLO 2 Y 3 AÑOS (TURNO MAÑANA)') {
	$to = 'insfainscripcioninicial@gmail.com';
} 
if ($anio === 'INICIAL - SALA MULTICICLO 4 Y 5 AÑOS (TURNO MAÑANA)') {
	$to = 'insfainscripcioninicial@gmail.com';
} 
if ($anio === 'INICIAL - SALA 3 AÑOS (TURNO TARDE)') {
	$to = 'insfainscripcioninicial@gmail.com';
} 
if ($anio === 'INICIAL - SALA 4 AÑOS (TURNO TARDE)') {
	$to = 'insfainscripcioninicial@gmail.com';
}
if ($anio === 'INICIAL - SALA MULTICICLO 4 Y 5 AÑOS (TURNO TARDE)') {
	$to = 'insfainscripcioninicial@gmail.com';
}
if ($anio === 'INICIAL - SALA  5 AÑOS (TURNO TARDE)') {
	$to = 'insfainscripcioninicial@gmail.com';
}


//ifs que envian correo a primaria
if ($anio === 'PRIMARIA - 1ER GRADO (TURNO TARDE)') {
	$to = 'insfainscripcionprimaria@gmail.com';
}
if ($anio === 'PRIMARIA - 2DO GRADO (TURNO TARDE)') {
	$to = 'insfainscripcionprimaria@gmail.com';
}
if ($anio === 'PRIMARIA - 3ER GRADO (TURNO TARDE)') {
	$to = 'insfainscripcionprimaria@gmail.com';
}
if ($anio === 'PRIMARIA - 4TO GRADO (TURNO TARDE)') {
	$to = 'insfainscripcionprimaria@gmail.com';
}
if ($anio === 'PRIMARIA - 5TO GRADO (TURNO TARDE)') {
	$to = 'insfainscripcionprimaria@gmail.com';
}
if ($anio === 'PRIMARIA - 6TO GRADO (TURNO TARDE)') {
	$to = 'insfainscripcionprimaria@gmail.com';
}



//ifs que envian correo a secundaria
if ($anio === 'SECUNDARIA BÁSICA - 1ER AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}
if ($anio === 'SECUNDARIA BÁSICA - 2DO AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}
if ($anio === 'SECUNDARIA BÁSICA - 3ER AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}
if ($anio === 'SECUNDARIA SUPERIOR - 4TO AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}
if ($anio === 'SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  5TO AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}
if ($anio === 'SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  6TO AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}
if ($anio === 'SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 5TO AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}
if ($anio === 'SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 6TO AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}





//librerias
require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();

//Configuracion servidor mail
$mail->From = "insfainscripciones@gmail.com"; //remitente
$mail->FromName = "Pre Inscripcion Online 2021"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='insfainscripciones@gmail.com'; //nombre usuario
$mail->Password = 'PFXLNBCU'; //contraseña


//Agregar destinatario	
$mail->AddAddress($to);
$mail->Subject = "Alumno Regular - Recibiste un formulario de pre inscripción";
$mail->Body = " \n
Haz recibido una preinscripcion online a traves del sitio web con los siguientes datos: \n
Apellido/s: ". $apellido ."
Nombre/s: ". $nombre ."
Año, nivel y curso a cursar: ". $anio ."
Telefono de Contacto: ". $telefono ."
Correo Electronico: ". $email ."\n\n
Por favor, contáctese al número telefónico recibido e indiquele el día y horario en que se llevará a cabo la inscripción final\n
Muchas Gracias.

"
;
	
//le activamos el charset utf8
$mail->CharSet = 'UTF-8';
//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
	header("Location:mailconfirmado.php");
} else {
	//header("Location:mailnoconfirmado.php");
	echo "Error: " . $mail . "<br>" . $con->error; //Redireccion de la página
}

?>