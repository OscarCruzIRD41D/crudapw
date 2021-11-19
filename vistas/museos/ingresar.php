<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Ingresar</title>
</head>
<body>
	<header>
		<h1>Registros de museos nuevos</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/control-museos.php" method="post">
		<input name="nombre" placeholder="Nombre" required autofocus />
		<input name="op1" placeholder="cantidad de clientes" required autofocus />
		<input name="op1" placeholder="cantidad de exposiciones" required autofocus />
		<input name="op3" placeholder="horas abierto" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>