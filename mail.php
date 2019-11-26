<?
$para = "lalo_super@live.com";
$nombre= $_POST["nombre"];
$asunto = "Probando e-mail por $nombre: " .$_POST["asunto"];
$mensaje = $_POST["mensaje"];
$de = $_POST["mail"];

$headers = "MIME-Version:1.0;\r\n";
$headers .= "Content-type: text/html; \r\n charset=UTF8; \r\n";
$headers .= "from: $de \r\n";
$headers .= "To: $para; \r\n Subject:$asunto \r\n";

if(mail($para,$asunto,$mensaje,$headers))
	echo "enviado Correctamente";
else
	echo "No se pudo :(";
?>