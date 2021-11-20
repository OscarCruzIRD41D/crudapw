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

	<form action="../../controladores/cd.php" method="post">
		<input name="nombrecd" placeholder="nombrecd" required autofocus />
		<input name="deportecd" placeholder="deportecd" required autofocus />
		<input name="paiscd" placeholder="paiscd" required autofocus />
		<input name="ciudadcd" placeholder="ciudadcd" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>