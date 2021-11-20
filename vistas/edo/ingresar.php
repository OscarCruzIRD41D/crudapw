<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Estados</title>
</head>
<body>
	<header>
		<h1>ingresar nuevo Estado</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/edo.php" method="post">
		<input name="nombre" placeholder="nombre" required autofocus />
		<input name="zona" placeholder="zona" required autofocus />
		<input name="pais" placeholder="pais" required autofocus />
		<input name="continente" placeholder="continente" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>