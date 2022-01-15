<div class="container-fluid" id='login'>	
	<div class="row">
		<div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
			<div class="card mx-30" style="opacity: 80%">
				<form action="function/Login.php" method="post">
					<h5 class="m-0 text-center"><?php echo $text['login_title'];?></h5><hr>
					<div class="mb-10">
						<label class="form-label required"><?php echo $text['login_email'];?></label>
						<input type="email" name="email" class="form-control" placeholder="<?php echo $text['login_email_place'];?>">
					</div>
					<div class="mb-10">
						<label class="form-label required"><?php echo $text['login_pass'];?></label>
						<input type="password" name="password" class="form-control" placeholder="<?php echo $text['login_pass_place'];?>">
					</div>
					  <div class="form-group">
					    <div class="custom-switch">
					      <input type="checkbox" name="remember" value="1" id="remember-my-information">
					      <label for="remember-my-information"><?php echo $text['remember'];?></label>
					    </div>
					  </div>
  					<div class="mb-10 d-grid">
						<button class="btn btn-primary btn-block" name="login"><?php echo $text['login'];?></button>
					</div>
				</form>
				<div class="nav-links">
					<a href="<?php echo $AreaInfo['area_url'];?>signup.php"><?php echo $text['register'];?></a> o <a href="<?php echo $AreaInfo['area_url'];?>forgetpassword.php"><?php echo $text['recover_pass_nav'];?></a>
				</div>
				<div class="nav-links">
					<a href="?lang=en">English</a> <a href="?lang=es">Español</a>
				</div>
			</div>
		</div>
	</div>
</div>
