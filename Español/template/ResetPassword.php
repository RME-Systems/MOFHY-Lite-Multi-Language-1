<div class="container-fluid" id='login'>	
	<div class="row">
		<div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
			<div class="card mx-30" style="opacity: 80%">
				<form action="function/ResetPassword.php" method="post" onsubmit="
					var password = document.getElementById('password').value;
					var cpassword = document.getElementById('cpassword').value;
					if(password != cpassword){
						alert('Password not match');
						return false;
					}
					return true;
				">
					<h5 class="m-0 text-center">Recuperar Contraseña</h5><hr>
					<div class="mb-10">
						<label class="form-label required">Token de Recuperación</label>
						<input type="text" name="token" class="form-control" placeholder="Token de recuperación aquí...">
					</div>
					<div class="mb-10">
						<label class="form-label required">Contraseña</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña...">
					</div>
					<div class="col-md-12 px-5 mb-10">
							<label class="form-label required">Confirmar Contraseña</label>
							<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirmar Contraseña...">
						</div>
  					<div class="mb-10 d-grid">
						<button class="btn btn-primary btn-block" name="reset">Cambiar Contrseña</button>
					</div>
				</form>
				<div class="nav-links">
					<a href="<?php echo $AreaInfo['area_url'];?>signup.php">Registro</a> o <a href="<?php echo $AreaInfo['area_url'];?>forgetpassword.php">Recuperar Contraseña</a>
				</div>
			</div>
		</div>
	</div>
</div>
