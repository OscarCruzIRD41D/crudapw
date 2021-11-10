<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Catalogo productos</title>
</head>
<body>
	<header>
		<h1>ingresar nuevos productos</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/productoscontroller.php" method="post">
		<input name="nombre" placeholder="Nombre" required autofocus />
		<input name="descripcion" placeholder="descripcion" required autofocus />
		<input name="precioventa" placeholder="precio de venta" required autofocus />
		<input name="existencia" placeholder="existencias" required autofocus />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>