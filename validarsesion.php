<?php

	function sesion_iniciada()
	{
		session_start();

		var_dump($_SESSION['usuario']);
	
		

						
	}

	function error_sesion()
	{
		echo
		"
		 	Error: no se ha detectado una sesión iniciada.
		 	Acceda como usuario e intentelo de nuevo
		";				
	}
?>