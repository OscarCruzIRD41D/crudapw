<?php require_once '../../modelos/modelos-oficios.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>oficios</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<header>
		<h1 id="hroles">Registros de oficios</h1>
		<h2 id="hlistar">Listar</h2>
	</header>

	<div id="divnuevo">
		<a id="anuevo" href="ingresar.php" >Ingresar nuevo oficio</a>	
	</div>
	<br>
	
	<table id="roles" border="1" collapse>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>paga mensual</th>
				<th>horas semanales</th>
				<th>nombre de jefe</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>					

			<?php foreach (usuario::listar() as $fila) { ?>
				<tr>
					<td id="id_oficios"><?= $fila[0] ?></td>
					<td id="nombre"><?= $fila[1] ?></td>
					<td id="paga"><?= $fila[2] ?></td>
					<td id="horas"><?= $fila[3]?></td>
					<td id="jefe"><?= $fila[4]?></td>

					<div id="opciones" width="50" height="50">
						<td>
							<a id="aeditar" href="editar.php?id=<?=base64_encode($fila [0])?>">Editar</a>
					    </td>
				   </div>

					<td>
						<a id="aeliminar" href="../../controladores/control-oficios.php?a=elim&id_oficios=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>