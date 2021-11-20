<?php
	require_once '../../modelos/edo.php';
	$objedo = edo::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Editar-Estado</title>
</head>
<body>
	<header>
		<h1>Editar registro de Estado</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/edo.php" method="post">
		<input type="hidden" name="idedo" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="nombre" value="<?= $objedo[1] ?>" required autofocus/>
		<input name="zona" placeholder="zona" value="<?= $objedo[2] ?>" required autofocus/>
		<input name="pais" placeholder="pais" value="<?= $objedo[3] ?>" required autofocus/>	
		<input name="continente" placeholder="continente" value="<?= $objedo[4] ?>" required autofocus/>	
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>