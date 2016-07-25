<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='estilos.css' rel='stylesheet'/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio POO</title>
</head>
<?php
	include("validarsesion.php");
	
	if( sesion_iniciada() )
	{ 
?>
<body>
<form id="form1" name="form1" method="post" action="respoperaciones.php">
  <div align="center">
    <table width="637" border="1">
      <tr>
        <td height="167">Banner</td>
      </tr>
      <tr>
        <td height="301"><div align="center">
          <table width="484" border="1">
            <tr>
              <td width="238"><div align="right">Primer número:</div></td>
              <td width="230">
                <input type="text" name="num1" id="textfield" /></td>
              </tr>
            <tr>
              <td><div align="right">Segundo número:</div></td>
              <td><input type="text" name="num2" id="textfield2" /></td>
              </tr>
            <tr>
              <td colspan="2">
                <div align="center">                  
                  <select name="operaciones" id="select">
                  	<option value="ninguna">Seleccione una operación</option>
                    <option value="suma">Sumar</option>
                    <option value="resta">Restar</option>
                    <option value="multiplicacion">Multiplicar</option>
                    <option value="division">Dividir</option>
                  </select>
                </div>
                </td>
				<tr>
                	<td colspan="2"	><div align="center">
                	  <input type='submit' value='Operar'/>
              	  </div></td>
                </tr>							                
              
              
              <td colspan="2">
                
                </td>
              </tr>
              
            </table>
        </div></td>
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