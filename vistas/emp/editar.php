<?php
	require_once '../../modelos/emp.php';
	$objemp = emp::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Editar-empleado</title>
</head>
<body>
	<header>
		<h1>Editar registro de emplead</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/emp.php" method="post">
		<input type="hidden" name="idemp" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="nombre" value="<?= $objemp[1] ?>" required autofocus/>
		<input name="supervisor" placeholder="supervisor" value="<?= $objemp[2] ?>" required autofocus/>
		<input name="departamento" placeholder="departamento" value="<?= $objemp[3] ?>" required autofocus/>	
		<input name="edificio" placeholder="edificio" value="<?= $objemp[4] ?>" required autofocus/>	
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>