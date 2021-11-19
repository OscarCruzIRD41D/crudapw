<?php
	require_once '../../modelos/modelos-museos.php';
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
		<h1>Museos</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/control-museos.php" method="post">
		<input type="hidden" name="id_museos" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre del museo" value="<?= $objUsuario[1] ?>" required autofocus/>
		<input name="op1" placeholder="cantidad de clientes" value="<?= $objUsuario[2] ?>" required autofocus/>
		<input name="op2" placeholder="cantidad de exposiciones" value="<?= $objUsuario[3] ?>" required autofocus/>		
		<input name="op3" placeholder="horas abierto" value="<?= $objUsuario[4] ?>" required autofocus/>
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>