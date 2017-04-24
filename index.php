<?php
	include_once 'empleado.php';
	include_once 'persona.php';
	include_once 'fabrica.php';

	$empleado1 = new Empleado('apellido', 22222, 'nombre', 'Masculino', 400, 12000);
	echo 'Apellido: '.$empleado1->getApellido().'<br>';
	echo "Dni: ".$empleado1->getDni().'<br>';
	echo "Nombre: ".$empleado1->getNombre().'<br>';
	echo "Sexo: ".$empleado1->getSexo().'<br>';
	echo 'Legajo empleado: '.$empleado1->getLegajo().'<br>';
	echo 'Sueldo empleado: '.$empleado1->getSueldo().'<br>';
	echo $empleado1::Hablar('Español').'<br>';

	Fabrica::AgregarEmpleado($empleado1);
	

?>