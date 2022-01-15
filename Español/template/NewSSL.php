<div class="container-fluid">
	<div class="card py-0">
		<div class="d-flex justify-content-between align-items-center pt-15">
			<h5 class="m-0">Nuevo SSL</h5>
			<a href="<?php echo $AreaInfo['area_url'];?>myssl.php" class="btn btn-sm btn-danger"><i class="fa fa-backward"></i> Volver</a>
		</div>
		<hr>
		<form action="function/NewSSL.php" method="post">
			<div class="row pb-20">
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Su Nombre</label>
						<input type="text" name="name" value="<?php echo $ClientInfo['hosting_client_fname'].' '.$ClientInfo['hosting_client_lname'];?>" class="form-control disabled" required readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Dirección de Email</label>
						<input type="text" name="email" value="<?php echo $ClientInfo['hosting_client_email'];?>" class="form-control disabled" required readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Nombre de Compañía</label>
						<input type="text" name="company" value="<?php echo $ClientInfo['hosting_client_company'];?>" class="form-control disabled"  required readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Dirección de Domicilio</label>
						<input type="text" name="address" value="<?php echo $ClientInfo['hosting_client_address'];?>" class="form-control disabled"  required readonly>
					</div>
				</div>
				<div class="col-md-12">
					<div class="mb-10 px-10">
						<label class="form-label required">Dominio</label>
						<input type="text" name="domain" placeholder="Ingrese el Dominio..." class="form-control" required>
					</div>
				</div>
				<div class="col-md-12">
					<div class="mb-10 px-10">
						<button name="submit" class="btn btn-sm btn-primary">Solicitar SSL</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
