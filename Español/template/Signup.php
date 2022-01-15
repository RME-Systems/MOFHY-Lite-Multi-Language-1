<div class="container-fluid" id='signup'>	
	<div class="row">
		<div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
			<div class="card mx-30" style="opacity: 80%">
				<form action="function/Signup.php" method="post" onsubmit="
					var password = document.getElementById('password').value;
					var cpassword = document.getElementById('cpassword').value;
					if(password != cpassword){
						alert('Password not match');
						return false;
					}
					return true;
				">
					<h5 class="m-0 text-center">Registro</h5><hr>
					<div class="row">
						<div class="col-6 px-5 mb-10">
							<label class="form-label required">Primer Nombre</label>
							<input type="text" name="first" class="form-control" placeholder="Primer Nombre...">
						</div>
						<div class="col-6 px-5 mb-10">
							<label class="form-label required">Apellido</label>
							<input type="text" name="last" class="form-control" placeholder="Apellido...">
						</div>
						<div class="col-md-12 px-5 mb-10">
							<label class="form-label required">Dirección Email</label>
							<input type="email" name="email" class="form-control" placeholder="Dirección de Email...">
						</div>
						<div class="col-md-12 px-5 mb-10">
							<label class="form-label required">Contraseña</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña...">
						</div>
						<div class="col-md-12 px-5 mb-10">
							<label class="form-label required">Confirmar Contraseña</label>
							<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirmar Contraseña...">
						</div>
	  					<div class="col-md-12 px-5 mb-10 d-grid">
							<button class="btn btn-primary btn-block" name="signup">Registrarse</button>
						</div>
					</div>
				</form>
				<div class="px-5 nav-links">
					<a href="<?php echo $AreaInfo['area_url'];?>login.php">Entrar</a> o <a href="<?php echo $AreaInfo['area_url'];?>forgetpassword.php">Recuperar Contraseña</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
</script>
