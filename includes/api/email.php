<?php

$para = "aalegabpett04@gmail.com";
$asunto = "Asunto del correo";
$mensaje = "Hola lucas yo tambien me llamo lucas pero esto lo escribi en un tiempo diferente al tuyo re loco";

// Cabeceras del correo
$headers = "From: remitente@example.com\r\n";
$headers .= "Reply-To: remitente@example.com\r\n";
$headers .= "CC: copia@example.com\r\n";
$headers .= "BCC: copiaoculta@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Envía el correo
if(mail($para, $asunto, $mensaje, $headers)) {
    echo "El correo se envió correctamente.";
} else {
    echo "No se pudo enviar el correo.";
}

?>