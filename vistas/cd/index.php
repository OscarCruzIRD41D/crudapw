<?php require_once '../../modelos/cd.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Clubes</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<header>
		<h1 id="hroles">Clubes deportivos</h1>
		<h2 id="hlistar">Lista</h2>
	</header>

	<div id="divnuevo">
		<a id="anuevo" href="ingresar.php" >Ingresar nuevo</a>	
	</div>
	<br>
	
	<table id="roles" border="1" collapse>
		<thead>
			<tr>
				<th>Id club</th>
				<th>Nombre</th>
				<th>Deporte</th>
				<th>Pais</th>
				<th>ciudad</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>					

			<?php foreach (cd::listar() as $fila) { ?>
				<tr>
					<td id="idcd"><?= $fila[0] ?></td>
					<td id="nombre"><?= $fila[1] ?></td>
					<td id="Deporte"><?= $fila[2] ?></td>
					<td id="Pais"><?= $fila[3] ?></td>
					<td id="ciudad"><?= $fila[4] ?></td>

					<div id="opciones" width="50" height="50">
						<td>
							<a id="aeditar" href="editar.php?id=<?=base64_encode($fila [0])?>">Editar</a>
					    </td>
				   </div>

					<td>
						<a id="aeliminar" href="../../controladores/cd.php?a=elim&idcd=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>