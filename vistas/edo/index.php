<?php require_once '../../modelos/edo.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Estados</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<header>
		<h1 id="hroles">Estados</h1>
		<h2 id="hlistar">Lista</h2>
	</header>

	<div id="divnuevo">
		<a id="anuevo" href="ingresar.php" >Ingresar nuevo</a>	
	</div>
	<br>
	
	<table id="roles" border="1" collapse>
		<thead>
			<tr>
				<th>Id Estado</th>
				<th>Nombre</th>
				<th>Zona</th>
				<th>Pais</th>
				<th>Continente</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>					

			<?php foreach (edo::listar() as $fila) { ?>
				<tr>
					<td id="idedo"><?= $fila[0] ?></td>
					<td id="nombre"><?= $fila[1] ?></td>
					<td id="zona"><?= $fila[2] ?></td>
					<td id="pais"><?= $fila[3] ?></td>
					<td id="continente"><?= $fila[4] ?></td>

					<div id="opciones" width="50" height="50">
						<td>
							<a id="aeditar" href="editar.php?id=<?=base64_encode($fila [0])?>">Editar</a>
					    </td>
				   </div>

					<td>
						<a id="aeliminar" href="../../controladores/edo.php?a=elim&idedo=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>