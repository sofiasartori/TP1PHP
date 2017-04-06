<?php
	include_once 'persona.php';

	class Empleado extends Persona{

		protected $_legajo;
		protected $_sueldo;

		function __construct($_legajo, $_sueldo){
			$this->_legajo = $_legajo;
			$this->_sueldo = $_sueldo;
		}

		function getLegajo(){
			return $this->_legajo;
		}

		function getSueldo(){
			return $this->_sueldo;
		}

		static function Hablar($idioma){
			return 'El empleado habla '.$idioma;
		}

		static function ToString(){
			return $_apellido.'-'.$_dni.'-'.$_nombre.'-'.$_sexo;
		}
	}
?>