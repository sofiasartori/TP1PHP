<?php
	include_once 'empleado.php';
	include_once 'fabrica.php';

	$empleado1 = new Empleado(400, 12000);

	echo 'Legajo empleado: '.$empleado1->getLegajo().'<br>';
	echo 'Sueldo empleado: '.$empleado1->getSueldo().'<br>';
	echo $empleado1::Hablar('Español').'<br>';

	Fabrica::AgregarEmpleado($empleado1);
	

?>