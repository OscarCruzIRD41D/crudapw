<?php require_once '../modelos/productos.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	/*Se crea el objeto de la clase Rol*/
	$objproducto = new producto();
    echo $accion;
	switch ($accion) 
	{

		case 'Ingresar':
			$objproducto->nombre = $_POST['nombre'];
			$objproducto->descripcion= $_POST['descripcion'];
			$objproducto->precioventa= $_POST['precioventa'];
			$objproducto->existencia= $_POST['existencia'];
			$objproducto->ingresar();            
			break;
		case 'Editar':
			$objproducto->idproducto= base64_decode($_POST['idproducto']);
			$objproducto->nombre = $_POST['nombre'];
			$objproducto->descripcion= $_POST['descripcion'];
			$objproducto->precioventa= $_POST['precioventa'];
			$objproducto->existencia= $_POST['existencia'];
			$objproducto->editar();
			break;
		case 'elim':
		//echo $_GET['id_usuario'];

			$objproducto->idproducto = base64_decode($_GET['idproducto']);
			$objproducto->eliminar();
			break;
	}
}
header('Location: ../vistas/productos/index.php');
//bienbenido a prroductos controller :3