<?php
	require_once '../../modelos/modelos-materias.php';
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
		<h1>materias de clases</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/control-materias.php" method="post">
		<input type="hidden" name="id_materias" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre de materias" value="<?= $objUsuario[1] ?>" required autofocus/>
		<input name="alumnos" placeholder="cantidad de alumnos" value="<?= $objUsuario[2] ?>" required autofocus/>
		<input name="maestro" placeholder="nombre del maestro" value="<?= $objUsuario[3] ?>" required autofocus/>		
		<input name="horas" placeholder="horas a la semana" value="<?= $objUsuario[4] ?>" required autofocus/>		
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>