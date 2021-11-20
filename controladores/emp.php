<?php require_once '../modelos/emp.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	/*Se crea el objeto de la clase Rol*/
	$objemp = new emp();
	switch ($accion) 
	{

		case 'Ingresar':
			$objemp->nombre = $_POST['nombre'];
			$objemp->supervisor= $_POST['Supervisor'];
			$objemp->departamento= $_POST['Departamento'];
			$objemp->edificio= $_POST['Edificio'];
			$objemp->ingresar();            
			break;
		case 'Editar':
			$objemp->idemp= base64_decode($_POST['idemp']);
			$objemp->nombre = $_POST['nombre'];
			$objemp->supervisor= $_POST['supervisor'];
			$objemp->departamento= $_POST['departamento'];
			$objemp->edificio= $_POST['edificio'];
			$objemp->editar();
			break;
		case 'elim':
			$objemp->idemp = base64_decode($_GET['idemp']);
			$objemp->eliminar();
			break;
	}
}
header('Location: ../vistas/emp/index.php');