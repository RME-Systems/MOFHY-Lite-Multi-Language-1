<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-lg-3">
				<a href="myaccounts.php" class="d-block nolink">
				<div class="text-center rounded card m-20 bg-matrix-1 text-white">
					<h1 class="mb-0"><i class="fa fa-shopping-cart"></i></h1>
					<?php 
						$sql = mysqli_query($connect,"SELECT * FROM `hosting_account` WHERE `account_for`='".$ClientInfo['hosting_client_key']."' AND `account_status`=1");
					?>
					<h5 class="mt-0"><?php echo mysqli_num_rows($sql);?> <?php echo $text['accounts_count'];?></h5>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-3">
				<a href="myssl.php" class="d-block nolink">
				<div class="text-center rounded card m-20 bg-matrix-2 text-white">
					<h1 class="mb-0"><i class="fa fa-shield-alt"></i></h1>
					<?php 
						$sql = mysqli_query($connect,"SELECT * FROM `hosting_ssl` WHERE `ssl_for`='".$ClientInfo['hosting_client_key']."'");
					?>
					<h5 class="mt-0"><?php echo mysqli_num_rows($sql);?> <?php echo $text['ssl_count'];?></h5>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-3">
				<a href="mytickets.php" class="d-block nolink">
				<div class="text-center rounded card m-20 bg-matrix-3 text-white">
					<h1 class="mb-0"><i class="fa fa-bullhorn"></i></h1>
					<?php 
						$sql = mysqli_query($connect,"SELECT * FROM `hosting_tickets` WHERE `ticket_for`='".$ClientInfo['hosting_client_key']."' AND `ticket_status`=0 OR `ticket_for`='".$ClientInfo['hosting_client_key']."' AND `ticket_status`=1");
					?>
					<h5 class="mt-0"><?php echo mysqli_num_rows($sql);?> <?php echo $text['ticket_count'];?></h5>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-3">
			<div class="text-center rounded card m-20 bg-matrix-4 text-white">
				<h1 class="mb-0"><i class="fa fa-server"></i></h1>
				<h5 class="mt-0"><?php echo $text['server_count'];?></h5>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card m-20">
			  <h2 class="card-title">
			    <?php echo $text['accounts_advice_title'];?>
			  </h2>
			  <p>
			    <?php echo $text['accounts_advice_text'];?>
			  </p>
			  <div class="text-right">
			    <a href="myaccounts.php" class="btn btn-sm"><?php echo $text['accounts_action'];?></a>
			  </div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card m-20">
			  <h2 class="card-title">
			    <?php echo $text['ssl_advice_title'];?>
			  </h2>
			  <p>
			    <?php echo $text['ssl_advice_text'];?>
			  </p>
			  <div class="text-right">
			    <a href="myssl.php" class="btn btn-sm"><?php echo $text['ssl_action'];?></a>
			  </div>
			</div>
		</div>
	</div>
</div>
