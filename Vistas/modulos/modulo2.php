<?php


session_start();
    if(!isset($_SESSION['rol'])){
        header("location:index.php?ruta=ingreso");

    }else{
        if($_SESSION['rol'] != 2){
            header("location:index.php?ruta=ingreso");

        }
    }
?>

<br>
<h1>TURNOS SIAU 2</h1>

<form method="post" action="">

	<input type="number" placeholder="Turno" name="turnoW" required MIN="1">
	<input type="hidden" placeholder="Modulo" name="moduloW" min="1" max="2" value="<?php echo $_SESSION['rol'];?>"required>
	<input type="submit" class="btn btn-primary" value="Registrar">

</form>

<td><a href="" target="_blank">
		<a href="index.php?ruta=turnoTV" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" onclick="window.open(this.href, this.target, 'width=900,height=600');
		return false;">TELEVISOR</a>

		<?php
		$registrar = new TurnosC();
		$registrar->RegistrarTurnoC();


		

		?>