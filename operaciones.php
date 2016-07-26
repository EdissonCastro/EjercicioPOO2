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
    	<form name="form1" method="post" action="validar.php">  
             <table class="formulario">
                    <tr>
                      <td class="etiqueta">Primer número:</td>
                      <td><input type="text" name="num1" id="textfield" /></td>
                    </tr>
                    
                    <tr>
                      <td class="etiqueta">Segundo número:</td>
                      <td><input type="text" name="num2" id="textfield2" /></td>
                    </tr>
                    
                    <tr>
                      <td colspan="2">
                           <select name="operaciones" id="select">
                            <option value="ninguna">Seleccione una operación</option>
                            <option value="suma">Sumar</option>
                            <option value="resta">Restar</option>
                            <option value="multiplicacion">Multiplicar</option>
                            <option value="division">Dividir</option>
                          </select>            
                                               
                      </td>
                   	</tr>
                    
                    <tr>
                      <td colspan="2">                    
                          <button type="submit" name="button" id="button">Calcular</button>                     
                      </td>
                   	</tr>                 
             </table>                  
    	</form>    
    </div>
</section>
<footer>Pie de página</footer>


<!--


-->
</body>
</html>