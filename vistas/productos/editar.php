<?php
	require_once '../../modelos/productos.php';
	$objproducto = producto::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Editar-producto</title>
</head>
<body>
	<header>
		<h1>Editar registro de productos</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/productoscontroller.php" method="post">
		<input type="hidden" name="idproducto" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="nombre" value="<?= $objproducto[1] ?>" required autofocus/>
		<input name="descripcion" placeholder="descripcion" value="<?= $objproducto[2] ?>" required autofocus/>
		<input name="precioventa" placeholder="precioventa" value="<?= $objproducto[3] ?>" required autofocus/>	
		<input name="existencia" placeholder="existencia" value="<?= $objproducto[4] ?>" required autofocus/>	
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>