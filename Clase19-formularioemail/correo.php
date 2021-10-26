<?php
/*este es el correo al que se envia el mensaje */
$destinatario='josueschuanta@gmail.com';
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$cabecera="enviado desde la pagina de josue salvatierra";
$mensajecompleto=$mensaje ."\n atentamente" . $nombre;

mail($destinatario,$mensaje,$cabecera);
echo "<script>alert('correo enviado satisfactoriamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";



?>