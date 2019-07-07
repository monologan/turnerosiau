
<div class="container my-5 py-5">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>						
						<input type="text" placeholder="Usuario" class="form-control" name="usuarioI" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>						
						<input type="password" placeholder="Contraseña" class="form-control" name="claveI" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Recordar Usuario
					</div>
					<div class="form-group">
						<input type="submit" value="Ingresar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					No tiene Cuenta?<a href="#">Registrese</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Olvido su Password?</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

$ingreso = new AdminC();
$ingreso->IngresoC();


?>