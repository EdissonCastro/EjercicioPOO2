<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='estilos.css' rel='stylesheet'/>
<title>Ejercicio POO</title>
</head>
<body>
<?php
	
	include("conexion.php");
	
	// Toma de datos del formulario:
	
	$documento = $_POST['documento'];
	$clave 	   = $_POST['clave'];
	$respuesta = $_POST['respuesta'];
	

	// Consulta a base de datos:

		$query1 = "SELECT documento FROM usuarios WHERE documento = '$documento';";

		$query2 = "SELECT clave FROM usuarios WHERE clave = '$clave';";

		$result = $conexion->query( $query1 );
		$ddocumento = $result->fetch_assoc();

		$result2 = $conexion->query( $query2 );
		$cclave = $result2->fetch_assoc();


		// Si $ddocumento o $cclave no están definidas, es porque no existe el usuario:
		if( !isset( $ddocumento ) )
		{
			echo
			"
				<p class='formulario'>
					Error: no existe el usuario de identificación $documento
				</p>
			";
		}

		if ( isset( $ddocumento ) )
		{
			if( isset( $cclave) )
			{
				if( strcmp( $documento, $ddocumento ) == 0 && strcmp( $clave, $cclave ) == 0 )
				{
					if( $respuesta == "2" )
					{
						session_start();
						$_SESSION['usuario'] = $ddocumento['documento'];
						header("Location:operaciones.php");
					}
					else
					{
						echo 
						"
							<p class='formulario'>
								Error: la respuesta de seguridad es incorrecta
							</p>
						";
					}
					
				}
			}
			else
			{
				echo 
				"
					<p class='formulario'>
						Error: la contraseña ingresada es incorrecta
					</p>
				";
			}
		}
	
?>
</body>
</html>
