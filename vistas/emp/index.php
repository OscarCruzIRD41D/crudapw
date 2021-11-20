<?php require_once '../../modelos/emp.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Empleados</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<header>
		<h1 id="hroles">Empleados</h1>
		<h2 id="hlistar">Lista</h2>
	</header>

	<div id="divnuevo">
		<a id="anuevo" href="ingresar.php" >Ingresar nuevo</a>	
	</div>
	<br>
	
	<table id="roles" border="1" collapse>
		<thead>
			<tr>
				<th>Id Empleado</th>
				<th>Nombre</th>
				<th>Supervisor</th>
				<th>Departamento</th>
				<th>Edificio</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>					

			<?php foreach (emp::listar() as $fila) { ?>
				<tr>
					<td id="idemp"><?= $fila[0] ?></td>
					<td id="nombre"><?= $fila[1] ?></td>
					<td id="Supervisor"><?= $fila[2] ?></td>
					<td id="Departamento"><?= $fila[3] ?></td>
					<td id="Edificio"><?= $fila[4] ?></td>

					<div id="opciones" width="50" height="50">
						<td>
							<a id="aeditar" href="editar.php?id=<?=base64_encode($fila [0])?>">Editar</a>
					    </td>
				   </div>

					<td>
						<a id="aeliminar" href="../../controladores/emp.php?a=elim&idemp=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>