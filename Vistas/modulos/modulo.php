<?php
session_start();
if (!$_SESSION["ingreso"]) {

	header("location:index.php?ruta=ingreso");
	echo "TURNO ENVIADO A TV";
	exit();
}
?>

<br>
<h1>REGISTRAR TURNO</h1>

<form method="post" action="">

	<input type="number" placeholder="Turno" name="turnoW" required MIN="1">
	<input type="number" placeholder="Modulo" name="moduloW" min="1" max="2" value="1" list="modulos" required>
	<input type="submit" class="btn btn-primary" value="Registrar">
	
</form>

<datalist id="modulos">
	<option value="1">SIAU1</option>
	<option value="2">SIAU2</option>
</datalist>

<td><a href="" target="_blank">
	<a href="index.php?ruta=turnoTV" class="btn btn-primary btn-lg active" role="button" 
		aria-pressed="true" onclick="window.open(this.href, this.target, 'width=900,height=600');
		return false;">TELEVISOR</a>

		<?php
		$registrar = new TurnosC();
		$registrar->RegistrarTurnoC();
		?>