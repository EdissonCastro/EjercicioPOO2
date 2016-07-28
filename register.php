<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio POO</title>
<link href="estilos.css" rel="stylesheet"/>
</head>
<body>
<header>Encabezado</header>
<section>
    <div class="contenedor">
    	
    	<?php
			include("conexion.php");

			// Toma de datos del formulario:
			$documento = $_POST['documento'];
			$password  = $_POST['clave'];
			$password2 = $_POST['clave2'];
			$respuesta = $_POST['respuesta'];


			// Verificación de no existencia del usuario a registrarse:
			$query = "SELECT documento FROM usuarios WHERE documento = $documento";
			$result = $conexion->query( $query );
			$fila = $result->fetch_assoc();


			/*
				Si existe el usuario en base de datos, la variable
				$fila quedará con el valor del array asociativo, y por
				tanto quedará definida, así que isset() devolverá 'true'.
				En ese caso, el usuario no podrá registrarse, porque ya
				está registrado.
			*/ 
			if( isset( $fila )  )
			{
				echo 
				"
					<p class='formulario'>
						Error: el usuario con identificación
						$documento ya se encuentra registrado en el sistema.

						<form class='formulario' action='registro.php'>
							<button type='submit'>Registrar nuevamente</button>
						</form>
					</p>
				";
			}

			/*
				Si el usuario no se encuentra registrado en la base de datos
				la variable $fila quedará con el valor 'null', e isset() devolverá 'false'. Por tanto podrá registrarse.
			*/
			if( !isset( $fila ) )
			{
				// Validación de claves correctas:
				if( strcmp( $password, $password2 ) == 0 && strcmp( $respuesta, "16" ) == 0  )
				{
					$query2 = "INSERT INTO usuarios(documento, clave) VALUES('$documento', '$password');";
					$result2 = $conexion->query( $query2 );

					if( !$result2 ) 
					{
						echo
						"<p class='formulario'>
							$conexion->error;
						</p>

						<form class='formulario' action='login.php'>
							<button type='submit'>Intentar nuevamente</button>
						</form>
						";
					}

					if( $result2 )
					{
						echo 
						"	<p class='formulario'>
								Registro exitoso.

								<form class='formulario' action='login.php'>
									<button type='submit'>Ingresar al sistema</button>
								</form>
							</p>							
						";
					}
					
				}
				
			}
		?>
    </div>
</section>
<footer>Pie de página</footer>
</body>
</html>




