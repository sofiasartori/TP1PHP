<?php
	include_once 'persona.php';

	class Empleado extends Persona{

		protected $_legajo;
		protected $_sueldo;

		function __construct($_apellido, $_dni, $_nombre, $_sexo, $_legajo, $_sueldo){
			parent::__construct($_apellido, $_dni, $_nombre, $_sexo);
			$this->_legajo = $_legajo;
			$this->_sueldo = $_sueldo;
		}

		function getApellido(){
			return parent::getApellido();
		}

		function getDni(){
			return parent::getDni();
		}

		function getNombre(){
			return parent::getNombre();
		}

		function getSexo(){
			return parent::getSexo();
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
			return $_legajo.'-'.$_sueldo;
		}
	}
?>