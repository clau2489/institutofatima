<?php
//datos capturados del alumno
$apellidoalumno = $_POST['apellidoalumno'];
$nombrealumno = $_POST['nombrealumno'];
$documentoalumno = $_POST['documentoalumno'];
$edadalumno = $_POST['edadalumno'];
$nacimientoalumno = $_POST['nacimientoalumno'];
$callealumno = $_POST['callealumno'];
$alturaalumno = $_POST['alturaalumno'];
$pisoalumno = $_POST['pisoalumno'];
$deptoalumno = $_POST['deptoalumno'];
$localidadalumno = $_POST['localidadalumno'];
$anio = $_POST['anio'];
$esalumno = $_POST['esalumno'];
$tienehermanos= $_POST['tienehermanos'];
$procedencia = $_POST['procedencia'];
//datos capturados del responsable
$apellidopadre = $_POST['apellidopadre'];
$nombrepadre = $_POST['nombrepadre'];
$documentopadre = $_POST['documentopadre'];
$edadpadre = $_POST['edadpadre'];
$callepadre = $_POST['callepadre'];
$alturapadre = $_POST['alturapadre'];
$pisopadre = $_POST['pisopadre'];
$deptopadre = $_POST['deptopadre'];
$localidadpadre = $_POST['localidadpadre'];
$provinciapadre = $_POST['provinciapadre'];
$emailpadre = $_POST['emailpadre'];
$telefonopadre = $_POST['telefonopadre'];
$ocupacion = $_POST['ocupacionpadre'];
$esexalumno = $_POST['esexalumno'];
$responsable = $_POST['responsable'];


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
if ($anio === 'SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES – 4TO AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}
if ($anio === 'SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  5TO AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}
if ($anio === 'SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  6TO AÑO (TURNO MAÑANA)') {
	$to = 'insfainscripcionsecundaria@gmail.com';
}
if ($anio === 'SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 4TO AÑO (TURNO MAÑANA)') {
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
$mail->Subject = "Alumno Nuevo - Recibiste un formulario de pre inscripción";
$mail->Body = " \n
Haz recibido una inscripcion online a traves del sitio web con los siguientes datos: \n
Datos del Alumno:
Apellido: ".$apellidoalumno."
Nombre: ".$nombrealumno."
N° de Documento: ".$documentoalumno."
Edad: ".$edadalumno." años.
Fecha de Nacimiento: ".$nacimientoalumno.".
Calle: ".$callealumno."
Altura: ".$alturaalumno."
Piso: ".$pisoalumno."
Dpto: ".$deptoalumno."
Localidad: ".$localidadalumno."
Año, nivel y curso al que se inscribe: ".$anio."
¿Es alumno de INSFA?: ".$esalumno."
¿Tiene hermanos en INSFA?: ".$tienehermanos."
Colegio de Procedencia: ".$procedencia."\n
Datos del Padre/Madre o Tutor:
Apellido: ".$apellidopadre."
Nombre: ".$nombrepadre."
N° de Documento: ".$documentopadre."
Calle: ".$callepadre."
Piso: ".$pisopadre."
Dpto: ".$deptopadre."
Localidad: ".$localidadpadre."
Provincia: ".$provinciapadre."
Correo Electrónico: ".$emailpadre."
Telefono de contacto: ".$telefonopadre."
Ocupación: ".$ocupacion."
¿Es Ex Alumno de INSFA?".$esexalumno."
Persona que realizó el formulario: ".$responsable."\n\n
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
	header("Location:mailnoconfirmado.php");
}

?>