<?php require_once '../modelos/modelos-materias.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	/*Se crea el objeto de la clase Rol*/
	$objUsuario = new usuario();
    echo $accion;
	switch ($accion) 
	{

		case 'Ingresar':
			$objUsuario->nombre = $_POST['nombre'];
			$objUsuario->alumnos= $_POST['alumnos'];
			$objUsuario->maestro= $_POST['maestro'];
			$objUsuario->horas= $_POST['horas'];
			$objUsuario->ingresar();            
			break;
		case 'Editar':
			$objUsuario->id_materias= base64_decode($_POST['id_materias']);
			$objUsuario->nombre = $_POST['nombre'];
			$objUsuario->alumnos= $_POST['alumnos'];
			$objUsuario->maestro= $_POST['maestro'];
			$objUsuario->horas= $_POST['horas'];
			$objUsuario->editar();

			break;
		case 'elim':
		//echo $_GET['id_usuario'];

			$objUsuario->id_materias = base64_decode($_GET['id_materias']);
			$objUsuario->eliminar();
			break;
	}
}
header('Location: ../vistas/materias/index.php');