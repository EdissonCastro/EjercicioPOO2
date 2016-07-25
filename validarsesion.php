<?php
	function sesion_iniciada()
	{
		session_start();
	
		if( !$_SESSION['principal'] )
		{			
			return false;
		}
		else return true;				
	}
?>