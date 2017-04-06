<?php
	abstract class Persona{

		private $_apellido;
		private $_dni;
		private $_nombre;
		private $_sexo;

		function __construct($_apellido, $_dni, $_nombre, $_sexo){
			$this->_apellido = $_apellido;
			$this->_dni = $_dni;
			$this->_nombre = $_nombre;
			$this->_sexo = $_sexo;
		}

		function getApellido(){
			return $this->_apellido;
		}

		function getDni(){
			return $this->_dni;
		}

		function getNombre(){
			return $this->_nombre;
		}

		function getSexo(){
			return $this->_sexo;
		}

		abstract static function Hablar($idioma);

		static function ToString(){
			return $_apellido.'-'.$_dni.'-'.$_nombre.'-'.$_sexo;
		}
	}
?>