<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='estilos.css' rel='stylesheet'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio POO</title>
</head>
<?php
	include("validarsesion.php");
	include("classoperacion.php");
	
	if( sesion_iniciada() )
	{ 
?>
<body>
<form id="form1" name="form1" method="post" action="validar.php">
  <div align="center">
    <table width="637" border="1">
      <tr>
        <td height="167">Banner</td>
      </tr>
      <tr>
        <td height="301">
        	<?php
            	$tipo_operacion = $_POST['operaciones'];
				
				$operacion = new Operacion( $_POST['num1'], $_POST['num2'] );
				
				$operacion->operar( $tipo_operacion );		
				
				echo 
				"
					<form action='operaciones.php'>					
						<input type='submit' value='Intentar de nuevo' />
					</form>
				
				";		
								
			?>
            
                
            
        </td>
      </tr>
      <tr>
        <td height="178">Footer</td>
      </tr>
  </table>
  </div>
</form>
</body>
</html>
<?php
	}// Fin if
	else
	{
		echo "Error: sesión no iniciada";
		echo 
		"
			<form action='index.php'>
				<input type='submit' value='Iniciar sesión' />
			</form>
		";
	}
?>