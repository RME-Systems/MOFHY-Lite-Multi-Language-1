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
					<h5 class="m-0 text-center"><?php echo $text['recover_pass'];?></h5><hr>
					<div class="mb-10">
						<label class="form-label required"><?php echo $text['recover_token'];?></label>
						<input type="text" name="token" class="form-control" placeholder="<?php echo $text['recover_token_place'];?>">
					</div>
					<div class="mb-10">
						<label class="form-label required"><?php echo $text['register_pass'];?></label>
						<input type="password" name="password" id="password" class="form-control" placeholder="<?php echo $text['register_pass_place'];?>">
					</div>
					<div class="col-md-12 px-5 mb-10">
							<label class="form-label required"><?php echo $text['confirm_pass'];?></label>
							<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder=<?php echo $text['confirm_pass_place'];?>">
						</div>
  					<div class="mb-10 d-grid">
						<button class="btn btn-primary btn-block" name="reset"><?php echo $text['change_pass'];?></button>
					</div>
				</form>
				<div class="nav-links">
					<a href="<?php echo $AreaInfo['area_url'];?>signup.php"><?php echo $text['register'];?></a> o <a href="<?php echo $AreaInfo['area_url'];?>forgetpassword.php"><?php echo $text['recover_pass_nav'];?></a>
				</div>
			</div>
		</div>
	</div>
</div>
