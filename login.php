<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio POO</title>
<link href="estilos.css" rel="stylesheet"/>
</head>
<body>
<header>Encabezado</header>
<nav>    
    <div id="navegador">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="login.php">Ingresar</a></li>
        <li><a href="registro.php">Registrarse</a></li>
      </ul>
    </div>
</nav>
<section>
    <div class="contenedor">

    <h1 class="titulo">Ingreso de usuarios</h1>

    	<form name="form1" method="post" action="validar.php">  
             <table class="formulario">
             
             		<tr>
                      <td class="etiqueta">Documento:</td>
                      <td><input type="text" name="documento" id="textfield" /></td>
                    </tr>
             
             
                    <tr>
                      <td class="etiqueta">Contraseña:</td>
                      <td><input type="password" name="clave" id="textfield" /></td>
                    </tr>
                    
                    <tr>
                      <td class="etiqueta">¿Cuánto es 2 x 8?:</td>
                      <td><input type="text" name="respuesta" id="textfield2" /></td>
                    </tr>
                    
                    <tr>
                      <td colspan="2">                    
                          <button type="submit" name="button" id="button">Enviar</button>                     
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