<?php
	require_once '../../modelos/cd.php';
	$objcd = cd::obtenerPorId(base64_decode($_GET['id']));
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
	<form action="../../controladores/cd.php" method="post">
		<input type="hidden" name="idcd" value="<?= $_GET['id'] ?>" />
		<input name="nombrecd" placeholder="nombrecd" value="<?= $objcd[1] ?>" required autofocus/>
		<input name="deportecd" placeholder="deportecd" value="<?= $objcd[2] ?>" required autofocus/>
		<input name="paiscd" placeholder="paiscd" value="<?= $objcd[3] ?>" required autofocus/>	
		<input name="ciudadcd" placeholder="ciudadcd" value="<?= $objcd[4] ?>" required autofocus/>	
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>