<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Ingresar</title>
</head>
<body>
	<header>
		<h1>Registros de usuarios nuevos</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/usuarios.php" method="post">
		<input name="nombre" placeholder="Nombre" required autofocus />
		<input name="usuario" placeholder="usuario" required autofocus />
		<input name="contrasena" placeholder="contraseña" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>