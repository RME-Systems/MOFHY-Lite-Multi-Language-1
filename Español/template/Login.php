<div class="container-fluid" id='login'>	
	<div class="row">
		<div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
			<div class="card mx-30" style="opacity: 80%">
				<form action="function/Login.php" method="post">
					<h5 class="m-0 text-center">Inicio de Sesión</h5><hr>
					<div class="mb-10">
						<label class="form-label required">Dirección de Email</label>
						<input type="email" name="email" class="form-control" placeholder="Dirección de Email...">
					</div>
					<div class="mb-10">
						<label class="form-label required">Contraseña</label>
						<input type="password" name="password" class="form-control" placeholder="Contraseña...">
					</div>
					  <div class="form-group">
					    <div class="custom-switch">
					      <input type="checkbox" name="remember" value="1" id="remember-my-information">
					      <label for="remember-my-information">Recordarme</label>
					    </div>
					  </div>
  					<div class="mb-10 d-grid">
						<button class="btn btn-primary btn-block" name="login">Iniciar Sesión</button>
					</div>
				</form>
				<div class="nav-links">
					<a href="<?php echo $AreaInfo['area_url'];?>signup.php">Registro</a> o <a href="<?php echo $AreaInfo['area_url'];?>forgetpassword.php">Recuperar Contraseña</a>
				</div>
			</div>
		</div>
	</div>
</div>
