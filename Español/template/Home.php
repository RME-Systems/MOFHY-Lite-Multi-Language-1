<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-lg-3">
				<a href="myaccounts.php" class="d-block nolink">
				<div class="text-center rounded card m-20 bg-matrix-1 text-white">
					<h1 class="mb-0"><i class="fa fa-shopping-cart"></i></h1>
					<?php 
						$sql = mysqli_query($connect,"SELECT * FROM `hosting_account` WHERE `account_for`='".$ClientInfo['hosting_client_key']."' AND `account_status`=1");
					?>
					<h5 class="mt-0"><?php echo mysqli_num_rows($sql);?> Cuentas</h5>
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
					<h5 class="mt-0"><?php echo mysqli_num_rows($sql);?> SSL</h5>
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
					<h5 class="mt-0"><?php echo mysqli_num_rows($sql);?> Tickets</h5>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-3">
			<div class="text-center rounded card m-20 bg-matrix-4 text-white">
				<h1 class="mb-0"><i class="fa fa-server"></i></h1>
				<h5 class="mt-0">2 Servidores</h5>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card m-20">
			  <h2 class="card-title">
			    ¡Bienvenido al Hosting Gratuito!
			  </h2>
			  <p>
			    Aquí puede crear cuentas de hosting sin costo y crear sitios web ilimitados sin costo en los servidores más rápidos del mundo.
			  </p>
			  <div class="text-right">
			    <a href="myaccounts.php" class="btn btn-sm">Empezar</a>
			  </div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card m-20">
			  <h2 class="card-title">
			    ¡SSL Gratuito Disponible!
			  </h2>
			  <p>
			    Ahora se ha permitido la Generacion de SSL para dar rápido acceso a su sitio web y aumentar la protección de la seguridad.
			  </p>
			  <div class="text-right">
			    <a href="myssl.php" class="btn btn-sm">Ver Ahora</a>
			  </div>
			</div>
		</div>
	</div>
</div>
