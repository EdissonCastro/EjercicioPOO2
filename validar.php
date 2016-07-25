<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='estilos.css' rel='stylesheet'/>
<title>Ejercicio POO</title>
</head>
<body>
<?php
	session_start();
	
	$clave = $_POST['clave'];
	$respuesta = $_POST['respuesta'];
	
		if( $clave == "1234" && $respuesta == "16" )
		{
			$_SESSION['principal'] = true;
			header("Location:operaciones.php");
		}				
		else
		{
			$_SESSION['principal'] = false;
			echo "Error: Contraseña o respuesta no válidos";
			echo 
			"<form action='index.php'>
				<input type='submit' value='Intentar de nuevo' />
			</form>";
		}	

?>
</body>
</html>
