

<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$postal = $_POST['postal'];
$direccion = $_POST['direccion'];
$provincias = $_POST['provincias'];


$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "NOMBRE: " . $nombre ." \r\n";
$mensaje .= "APELLIDOS: " . $apellidos . " \r\n";
$mensaje .= "E-MAIL: " . $email . " \r\n";
$mensaje .= "TELÉFONO: " . $telefono . " \r\n";
$mensaje .= "CÓDIGO POSTAL: " . $postal . " \r\n";
$mensaje .= "SEXO: " . $sexo . " \r\n";
$mensaje .= "PROVINCIAS: " . $provincias . " \r\n";
$mensaje .= "DIRECCIÓn: " . $direccion . " \r\n";
$mensaje .= "MENSAJE: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "FECHA DEL ENVIO: " . date('d/m/Y', time());

$para = $email;
$asunto = 'H&M';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo "<script language=Javascript> location.href=\"../gracias/index.html\"; </script>";

?>
