<?php
	require_once '../../modelos/usuarios.php';
	$objUsuario = usuario::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Editar</title>
</head>
<body>
	<header>
		<h1>Usuario</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/usuarios.php" method="post">
		<input type="hidden" name="id_usuario" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre" value="<?= $objUsuario[1] ?>" required autofocus/>
		<input name="usuario" placeholder="usuario" value="<?= $objUsuario[2] ?>" required autofocus/>
		<input name="contrasena" placeholder="contraseña" value="<?= $objUsuario[3] ?>" required autofocus/>		
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>