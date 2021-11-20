<?php require_once '../modelos/edo.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	/*Se crea el objeto de la clase Rol*/
	$objedo = new edo();
	switch ($accion) 
	{

		case 'Ingresar':
			$objedo->nombre = $_POST['nombre'];
			$objedo->zona= $_POST['zona'];
			$objedo->pais= $_POST['pais'];
			$objedo->continente= $_POST['continente'];
			$objedo->ingresar();            
			break;
		case 'Editar':
			$objedo->idedo= base64_decode($_POST['idedo']);
			$objedo->nombre = $_POST['nombre'];
			$objedo->zona= $_POST['zona'];
			$objedo->pais= $_POST['pais'];
			$objedo->continente= $_POST['continente'];
			$objedo->editar();
			break;
		case 'elim':
			$objedo->idedo = base64_decode($_GET['idedo']);
			$objedo->eliminar();
			break;
	}
}
header('Location: ../vistas/edo/index.php');