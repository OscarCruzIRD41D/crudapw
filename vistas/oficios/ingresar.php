<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Ingresar</title>
</head>
<body>
	<header>
		<h1>Registros de oficios nuevos</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/control-oficios.php" method="post">
		<input name="nombre" placeholder="Nombre" required autofocus />
		<input name="paga" placeholder="paga mensual" required autofocus />
		<input name="horas" placeholder="horas semanales" required autofocus />
		<input name="jefe" placeholder="Nombre del jefe" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>