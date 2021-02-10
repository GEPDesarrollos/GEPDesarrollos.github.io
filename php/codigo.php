<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GEP WEB DESIGN - envío de Formulario</title>
</head>
<body>
	<?php  
		$destinatario = "guillejun@gmail.com";


		$cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    	$cuerpo .= "Email: " . $_POST['email']. "\r\n";
	    $cuerpo .= "Mensaje: " . $_POST['mensaje']. "\r\n";

	    mail($destinatario, "Formulario de contacto de GitHub", $cuerpo);

	?>
	<h1 style="color:white; text-align:center; whidth:70%; margin: auto; border: 3px solid white; border-radius: 10px; margin-top: 25%;">Gracias por contactarnos <?php echo($_POST["nombre"]); ?> en breve nos estaremos comunicando nuevamente con vos <br>
<a href="../index.html">Volver al sitio</a></h1>
	
</body>
</html>