<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Ingresar</title>
</head>
<body>
	<header>
		<h1>Registros de materias nuevas</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/control-materias.php" method="post">
		<input name="nombre" placeholder="Nombre de materias" required autofocus />
		<input name="alumnos" placeholder="cantidad de alumnos" required autofocus />
		<input name="maestro" placeholder="nombre del maestro" required autofocus />
		<input name="horas" placeholder="horas a la semanas" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>