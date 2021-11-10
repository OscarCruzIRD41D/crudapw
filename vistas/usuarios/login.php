<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widt=device-width, initial-scale=1">
	<title>Iniciar sesion</title>
</head>
<body>
	<header>
		<h1>Inicio de sesion</h1>		
	</header>
	<form action="../../controladores/usuarios.php" method="post">
		<input name="usuario" placeholder="Usuario" required autofocus />
		<input name="contrasena" placeholder="Contraseña" required autofocus />
		<input name="a" type="submit" value="Login"/>
		
	</form>

</body>
</html>