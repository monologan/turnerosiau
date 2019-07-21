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

<<<<<<< HEAD
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

								<form method="POST" action="">
=======


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
						<form method="post" action="" >
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
								<button type="submit" class="btn btn-danger">Registrar</button>



							</div>

						</form>
						

					</p>
				</div>
				<div class="card-footer">

					<input type='button' id='btnOpen' value='Open Child'>
					<input type='button' id='btnClose' value='Close Child'>
					<input type='button' id='btnRefresh' value='Refresh Child'>


				</div>
			</div>
		</div>
		<div class="col-sm-6 ">
			<div class="card">
				<div class="card-header text-white d-flex justify-content-center text-center">
					<H2>TURNOS EN TV</H2>
				</div>
				<div class="card-body d-flex flex-wrap align-content-center justify-content-center">
>>>>>>> b5be3e5b13928f07388c6a9520313438cb3fefee

									<div class="form-group">
										<input type="number" class="form-control" id="turnoW" placeholder="Turno" name="turnoW" required MIN="1">
										<small id="emailHelp" class="form-text text-muted">La lista de turnos es de 1 - 50.</small>
									</div>
									<div class="form-group">
										<input type="hidden" class="form-control" id="moduloW" placeholder="Modulo" name="moduloW" value="<?php echo $_SESSION['rol']; ?>" min="1" max="2" required>
									</div>
									<div id="login" class="d-flex" style="justify-content: flex-end;">
										<p class="mr-auto text-white">
											<?php
											$registrar = new TurnosC();
											$registrar->RegistrarTurnoC();  ?>
										</p>
										<button type="submit" class="btn btn-danger">Registrar</button>
									</div>
								</form>

								

							</p>
						</div>
						<div class="card-footer">
							<div class="container">

							
						<div class="row d-flex justify-content-between">
							<input type="submit" class="btn btn-warning" value="Televisor" onclick="window.open('index.php?ruta=turnoTV','location=0,status=0,scrollbars=0,width=499,height=380')">

							<?php
								$dbc = mysqli_connect('localhost', 'root', '', 'crud') or die('Error connecting to MySQL server.');
								if (isset($_POST['submit_button'])) {
									mysqli_query($dbc, 'TRUNCATE TABLE `turnos`');
									header("Location: " . $_SERVER['PHP_SELF']);
									exit();
								}

								?>
								<form method="post" action="">
									<input name="submit_button" class ="btn btn-info" type="submit" value=" Reiniciar Turnos " />
								</form>
								
								</div>
						</div>
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
<<<<<<< HEAD
		</div>
=======
		</div>
	</div>
</div>

<script>
  

(function() {
  var childWindow;

  document.getElementById('btnOpen').onclick = openChildWindow;
  document.getElementById('btnClose').onclick = closeChildWindow;
  document.getElementById('btnRefresh').onclick = refreshChildWindow;

  function openChildWindow() {
    if (childWindow) {
      alert("We already have one open.");
    }
    else {
      childWindow = window.open("index.php?ruta=turnoTV");
    }
  }

  function closeChildWindow() {
    if (!childWindow) {
      alert("There is no child window open.");
    }
    else {
      childWindow.close();
      childWindow = undefined;
    }
  }

  function refreshChildWindow() {
    if (!childWindow) {
		alert("There is no child window open.");
		
    }
    else {
		
		childWindow.location.reload();
    }
  }
})();

</script>
>>>>>>> b5be3e5b13928f07388c6a9520313438cb3fefee
