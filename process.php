<?php 
	$destino= "sebastian.diaz@kapta.biz";
	$nombre= $_POST["nombre"];
	$empresa= $_POST["empresa"];
	$email= $_POST["email"];
	$mensaje= $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nEmpresa: " . $empresa . "\nEmail: " .  $email . "\nMensaje: " . $mensaje;
	mail($destino,"Nuevo Contacto Usuario", $contenido);
	header("Location: index.html");
?>