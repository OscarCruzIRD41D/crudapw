<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Clubes deportivos</title>
</head>
<body>
	<header>
		<h1>ingresar nuevo club</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/emp.php" method="post">
		<input name="nombre" placeholder="nombre" required autofocus />
		<input name="Supervisor" placeholder="Supervisor" required autofocus />
		<input name="Departamento" placeholder="Departamento" required autofocus />
		<input name="Edificio" placeholder="Edificio" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>