<?php
// session_start();

// if (!$_SESSION["ingreso"]) {

// 	header("location:index.php?ruta=ingreso");
// 	exit();
// }
?>

<br>
<h1>Turnos</h1>

<table id="t1" border="1">
	<thead>
		<tr>
			<th>Turno</th>
			<th>Modulo</th>
		</tr>
	</thead>

	<tbody>
		<?php
		$mostrar = new TurnosC();
		$mostrar->MostrarTurnosC();
		?>
	</tbody>

</table>