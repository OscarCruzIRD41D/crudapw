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
			header('Location: ../vistas/museos/index.php');            
			break;
		case 'Editar':
			$objUsuario->id_usuario= base64_decode($_POST['id_usuario']);
			$objUsuario->nombre = $_POST['nombre'];
			$objUsuario->alumnos=$_POST['alumnos'];
			$objUsuario->maestro= $_POST['maestro'];
			$objUsuario->horas= $_POST['horas'];
			$objUsuario->editar();
			header('Location: ../vistas/museos/index.php');
			break;
		case 'elim':
		//echo $_GET['id_usuario'];

			$objUsuario->id_usuario = base64_decode($_GET['id_usuario']);
			$objUsuario->eliminar()
			header('Location: ../vistas/usuarios');;
			break;
	}
}
//header('Location: ../vistas/usuarios/index.php');