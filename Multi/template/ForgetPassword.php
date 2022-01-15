<div class="container-fluid" id='login'>	
	<div class="row">
		<div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
			<div class="card mx-30" style="opacity: 80%">
				<form action="function/ForgetPassword.php" method="post">
					<h5 class="m-0 text-center"><?php echo $text['forget_title'];?></h5><hr>
					<div class="mb-10">
						<label class="form-label required"><?php echo $text['email_address'];?></label>
						<input type="email" name="email" class="form-control" placeholder="<?php echo $text['email_address_place'];?>">
					</div>
  					<div class="mb-10 d-grid">
						<button class="btn btn-primary btn-block" name="reset"><?php echo $text['recover_pass'];?></button>
					</div>
				</form>
				<div class="nav-links">
					<a href="<?php echo $AreaInfo['area_url'];?>signup.php"><?php echo $text['register'];?></a> o <a href="<?php echo $AreaInfo['area_url'];?>login.php"><?php echo $text['login_nav'];?></a>
				</div>
				<div class="nav-links">
					<a href="?lang=en">English</a> <a href="?lang=es">Español</a>
				</div>
			</div>
		</div>
	</div>
</div>
