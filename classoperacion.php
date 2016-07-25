<?php 
	class Operacion
	{
		protected $num1;
		protected $num2;
		protected $resultado;
		
		public function __construct( $num1, $num2 )
		{
			  $this->num1 = $num1;
			  $this->num2 = $num2;
		}
		
		public function operar( $tipo_operacion )
		{
			switch( $tipo_operacion )
			{
				case "ninguna":
					echo "Error: no seleccionó ninguna operación";
				break;
					
				case "suma":
					$this->resultado = $this->num1 + $this->num2;
					
				break;
					
				case "resta":
					$this->resultado = $this->num1 - $this->num2;
				break;
					
				case "multiplicacion":
					$this->resultado = $this->num1 * $this->num2;
				break;
					
				case "division":
					$this->resultado = $this->num1 / $this->num2;
				break;				
					
			}	
			
			echo "El resultado es: $this->resultado";		
		}
		
	}



?>