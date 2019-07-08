<?php
session_start();
if (!isset($_SESSION['rol'])) {
	header("location:index.php?ruta=ingreso");
} else {
	if ($_SESSION['rol'] != 1) {
		header("location:index.php?ruta=ingreso");
	}
}
?>

<div class="container pt-5 d-flex justify-content-center">
	<div class="row">
		<div class="col-sm-6 ">
			<div class="card">
				<div class="card-header text-light d-flex justify-content-center text-center">
					<H2>TURNO EN PC</H2>
				</div>
				<div class="card-body">
					<h5 class="card-title text-danger">Ingrese el turno</h5>
					<p class="card-text	">
						<form method="post" action="" id="form1" runat="server">
							<div class="form-group">
								<input type="number" class="form-control" placeholder="Turno" name="turnoW" required MIN="1">
								<small id="emailHelp" class="form-text text-muted">La lista de turnos es de 1 - 50.</small>
							</div>
							<div class="form-group">
								<input type="hidden" class="form-control" placeholder="Modulo" name="moduloW" value="<?php echo $_SESSION['rol']; ?>" min="1" max="2" required>
							</div>
							<div class="d-flex" style="justify-content: flex-end;">
								<p class="mr-auto text-white"><?php
																$registrar = new TurnosC();
																$registrar->RegistrarTurnoC(); ?>
								</p>
								<button href="index.php?ruta=turnoTV" onclick="window.opener.location.reload(this.href);"  type="submit" class="btn btn-danger">Registrar</button>
								
							</div>
							
						</form>


					</p>
				</div>
				<div class="card-footer">
					<!-- <a href="" target="_blank"> -->
					<a href="index.php?ruta=turnoTV" class="btn btn-warning" role="button" aria-pressed="true" onclick="window.open(this.href, this.target, 'width=900,height=600'); return false;">TELEVISOR</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 ">
			<div class="card">
				<div class="card-header text-white d-flex justify-content-center text-center">
					<H2>TURNOS EN TV</H2>
				</div>
				<div class="card-body d-flex flex-wrap align-content-center justify-content-center">


					<table id="t1" class="table table-dark table-bordered bg-info text-center">
						<thead>
							<tr class="bg-danger">
								<th scope="col">
									<h3>TURNO</h3>
								</th>
								<th scope="col">
									<h3>MODULO</h3>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$mostrar = new TurnosC();
							$mostrar->MostrarTurnosC();
							?>
						</tbody>
					</table>



				</div>
			</div>
		</div>
	</div>
</div>