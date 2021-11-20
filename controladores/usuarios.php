<?php require_once '../modelos/usuarios.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	/*Se crea el objeto de la clase Rol*/
	$objUsuario = new usuario();
    echo $accion;
	switch ($accion) 
	{

		case 'Ingresar':
			$objUsuario->nombre = $_POST['nombre'];
			$objUsuario->usuario= $_POST['usuario'];
			$objUsuario->contrasena= $_POST['contrasena'];
			$objUsuario->ingresar();            
			break;
		case 'Editar':
			$objUsuario->id_usuario= base64_decode($_POST['id_usuario']);
			$objUsuario->nombre = $_POST['nombre'];
			$objUsuario->usuario=$_POST['usuario'];
			$objUsuario->contrasena= $_POST['contrasena'];
			$objUsuario->editar();
			break;
		case 'elim':
		//echo $_GET['id_usuario'];

			$objUsuario->id_usuario = base64_decode($_GET['id_usuario']);
			$objUsuario->eliminar();
			break;
		case 'Login':
			$objUsuario->usuario=$_POST['usuario'];
			$objUsuario->contrasena=$_POST['contrasena'];
			if($objUsuario->Login())
			{
				header('Location: ../vistas/usuarios');
			}else
				{
				echo "USUARIO Y/O CONTRASEÑA INCORRECTOS";
				}
			break;
	}
}
//header('Location: ../vistas/usuarios/index.php');
//GG
