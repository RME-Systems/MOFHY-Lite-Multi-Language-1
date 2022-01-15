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
					<h5 class="m-0 text-center"><?php echo $text['register'];?></h5><hr>
					<div class="row">
						<div class="col-6 px-5 mb-10">
							<label class="form-label required"><?php echo $text['first_name'];?></label>
							<input type="text" name="first" class="form-control" placeholder="<?php echo $text['first_name'];?>...">
						</div>
						<div class="col-6 px-5 mb-10">
							<label class="form-label required"><?php echo $text['last_name'];?></label>
							<input type="text" name="last" class="form-control" placeholder="<?php echo $text['last_name'];?>...">
						</div>
						<div class="col-md-12 px-5 mb-10">
							<label class="form-label required"><?php echo $text['email_address'];?></label>
							<input type="email" name="email" class="form-control" placeholder="<?php echo $text['email_address'];?>...">
						</div>
						<div class="col-md-12 px-5 mb-10">
							<label class="form-label required"><?php echo $text['register_pass'];?></label>
							<input type="password" name="password" id="password" class="form-control" placeholder="<?php echo $text['register_pass_place'];?>">
						</div>
						<div class="col-md-12 px-5 mb-10">
							<label class="form-label required"><?php echo $text['confirm_pass'];?></label>
							<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="<?php echo $text['confirm_pass_place'];?>">
						</div>
	  					<div class="col-md-12 px-5 mb-10 d-grid">
							<button class="btn btn-primary btn-block" name="signup"><?php echo $text['register_buttom'];?></button>
						</div>
					</div>
				</form>
				<div class="px-5 nav-links">
					<a href="<?php echo $AreaInfo['area_url'];?>login.php"><?php echo $text['login_nav'];?></a> o <a href="<?php echo $AreaInfo['area_url'];?>forgetpassword.php"><?php echo $text['recover_pass_nav'];?></a>
				</div>
				<div class="px-5 nav-links">
					<a href="?lang=en">English</a> <a href="?lang=es">Español</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
</script>
