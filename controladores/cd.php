<?php require_once '../modelos/cd.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	/*Se crea el objeto de la clase Rol*/
	$objcd = new cd();
	switch ($accion) 
	{

		case 'Ingresar':
			$objcd->nombrecd = $_POST['nombrecd'];
			$objcd->deportecd= $_POST['deportecd'];
			$objcd->paiscd= $_POST['paiscd'];
			$objcd->ciudadcd= $_POST['ciudadcd'];
			$objcd->ingresar();            
			break;
		case 'Editar':
			$objcd->idcd= base64_decode($_POST['idcd']);
			$objcd->nombrecd = $_POST['nombrecd'];
			$objcd->deportecd= $_POST['deportecd'];
			$objcd->paiscd= $_POST['paiscd'];
			$objcd->ciudadcd= $_POST['ciudadcd'];
			$objcd->editar();
			break;
		case 'elim':
		echo $_GET['idcd'];

			$objcd->idcd = base64_decode($_GET['idcd']);
			$objcd->eliminar();
			break;
	}
}
header('Location: ../vistas/cd/index.php');