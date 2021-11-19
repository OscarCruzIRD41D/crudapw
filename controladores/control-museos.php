<?php require_once '../modelos/modelos-museos.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	/*Se crea el objeto de la clase Rol*/
	$objUsuario = new usuario();
    echo $accion;
	switch ($accion) 
	{

		case 'Ingresar':
			$objUsuario->nombre = $_POST['nombre'];
			$objUsuario->op1= $_POST['op1'];
			$objUsuario->op2= $_POST['op3'];
			$objUsuario->op3= $_POST['op3'];
			$objUsuario->ingresar();            
			break;
		case 'Editar':
			$objUsuario->id_museos= base64_decode($_POST['id_museos']);
			$objUsuario->nombre = $_POST['nombre'];
			$objUsuario->op1= $_POST['op1'];
			$objUsuario->op2= $_POST['op2'];
			$objUsuario->op3= $_POST['op3'];
			$objUsuario->editar();

			break;
		case 'elim':
		//echo $_GET['id_usuario'];

			$objUsuario->id_museos = base64_decode($_GET['id_museos']);
			$objUsuario->eliminar();
			break;
	}
}
header('Location: ../vistas/museos/index.php');