<?php require_once '../../modelos/productos.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>productos</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<header>
		<h1 id="hroles">Registros de productos</h1>
		<h2 id="hlistar">Lista</h2>
	</header>

	<div id="divnuevo">
		<a id="anuevo" href="ingresar.php" >Ingresar nuevo</a>	
	</div>
	<br>
	
	<table id="roles" border="1" collapse>
		<thead>
			<tr>
				<th>Id Producto</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Precioventa</th>
				<th>Existencia</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>					

			<?php foreach (producto::listar() as $fila) { ?>
				<tr>
					<td id="idproductos"><?= $fila[0] ?></td>
					<td id="nombre"><?= $fila[1] ?></td>
					<td id="descripcion"><?= $fila[2] ?></td>
					<td id="precioventa"><?= $fila[3] ?></td>
					<td id="existencia"><?= $fila[4] ?></td>

					<div id="opciones" width="50" height="50">
						<td>
							<a id="aeditar" href="editar.php?id=<?=base64_encode($fila [0])?>">Editar</a>
					    </td>
				   </div>

					<td>
						<a id="aeliminar" href="../../controladores/productoscontroller.php?a=elim&idproducto=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>