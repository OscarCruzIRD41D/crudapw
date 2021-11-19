<?php
	require_once '../../modelos/modelos-oficios.php';
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
		<h1>oficios</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/control-oficios.php" method="post">
		<input type="hidden" name="id_oficios" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre" value="<?= $objUsuario[1] ?>" required autofocus/>
		<input name="paga" placeholder="paga mensual" value="<?= $objUsuario[2] ?>" required autofocus/>
		<input name="horas" placeholder="horas semanales" value="<?= $objUsuario[3] ?>" required autofocus/>
		<input name="jefe" placeholder="nombre del jefe" value="<?= $objUsuario[4] ?>" required autofocus/>		
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>