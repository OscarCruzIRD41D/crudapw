<?php require_once '../modelos/modelos-oficios.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	/*Se crea el objeto de la clase Rol*/
	$objUsuario = new usuario();
    echo $accion;
	switch ($accion) 
	{

		case 'Ingresar':
			$objUsuario->nombre = $_POST['nombre'];
			$objUsuario->paga= $_POST['paga'];
			$objUsuario->horas= $_POST['horas'];
			$objUsuario->jefe= $_POST['jefe'];
			$objUsuario->ingresar();            
			break;
		case 'Editar':
			$objUsuario->id_oficios= base64_decode($_POST['id_oficios']);
			$objUsuario->nombre = $_POST['nombre'];
			$objUsuario->paga= $_POST['paga'];
			$objUsuario->horas= $_POST['horas'];
			$objUsuario->jefe= $_POST['jefe'];
			$objUsuario->editar();

			break;
		case 'elim':
		//echo $_GET['id_usuario'];

			$objUsuario->id_oficios = base64_decode($_GET['id_oficios']);
			$objUsuario->eliminar();
			break;
	}
}
header('Location: ../vistas/oficios/index.php');