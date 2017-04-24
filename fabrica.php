<?php

	class Fabrica{
		private $_empleados;
		private $_razonSocial;

		function __construct($_razonSocial){
			$this->_empleados = array();
			$this->_razonSocial = $_razonSocial;			
		}

		function AgregarEmpleado ($persona){
			echo var_dump($this->_empleados);
			array_push($_empleados, $persona);
		}

		static function CalcularSueldos(){
			$sueldos = 0;

			for ($i=0; $i < count($_empleados)	; $i++)	 { 
				$sueldos += array_column($_empleados, 'sueldo');
			}
			/*foreach ($_empleados as $sueldo) {
				$sueldos += $sueldo;
			}*/
			echo $sueldos;
		}

		static function EliminarEmpleado($persona){
			unset($_empleados[$persona]);
		}

		private static function EliminarEmpleadosRepetidos(){
			array_unique($_empleados);
		}

		static function ToString(){
			return var_dump($_empleados).'-'.$_razonSocial;
		}	
	}
	
?>