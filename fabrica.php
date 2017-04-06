<?php

	class Fabrica{
		private $_empleados;
		private $_razonSocial;

		function __construct($_razonSocial){
			$this->_empleados = array();
			$this->_razonSocial = $_razonSocial;
		}

		static function AgregarEmpleado ($persona){

			array_push($_empleados, $persona);
		}

		static function CalcularSueldos(){

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