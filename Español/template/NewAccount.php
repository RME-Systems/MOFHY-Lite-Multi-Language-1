<div class="container-fluid">
	<div class="card py-0">
		<div class="d-flex justify-content-between align-items-center pt-15">
			<h5 class="m-0">Nueva Cuenta</h5>
			<a href="<?php echo $AreaInfo['area_url'];?>myaccounts.php" class="btn btn-sm btn-danger"><i class="fa fa-backward"></i> Volver</a>
		</div>
		<hr>
		<div class="row mb-10">
			<div class="col-md-6">
				<div class="mb-10 px-10">
					<label class="form-label required">Su Nombre</label>
					<input type="text" name="name" value="<?php echo $ClientInfo['hosting_client_fname'].' '.$ClientInfo['hosting_client_lname'];?>" class="form-control disabled" readonly>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-10 px-10">
					<label class="form-label required">Su Email</label>
					<input type="text" name="email" value="<?php echo $ClientInfo['hosting_client_email'];?>" class="form-control disabled" readonly>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-10 px-10">
					<label class="form-label required">Numero de Telefono</label>
					<input type="text" name="email" value="<?php echo $ClientInfo['hosting_client_phone'];?>" class="form-control disabled" readonly>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-10 px-10">
					<label class="form-label required">Dirección de Domicilio</label>
					<input type="text" name="email" value="<?php echo $ClientInfo['hosting_client_address'];?>" class="form-control disabled" readonly>
				</div>
			</div>
		</div>
		<hr>
		<div class="col-md-12 mb-10">
			<div class="mb-10 px-10">
				<div class="tabs">
			        <button class="tab-item btn btn-sm" data-tab="SubDomain" id="DefaultClicked">Subdominio</button>
			        <button class="tab-item btn btn-sm" data-tab="CustomDomain">Dominio Personalizado</button>
		        </div>
		        <div id="CustomDomain" class="tab-content">
						<div class="alert alert-secondary my-5">Necesita configurar los nombres de servidores dados para poder alojar el dominio con nosotros<br>
							<ul class="mb-0">
								<li class="mb-0"><?php echo $HostingApi['api_ns_1']?></li>
								<li class="mb-0"><?php echo $HostingApi['api_ns_2']?></li>
							</ul>
						</div>
		        <label class="form-label required">Dominio Personalizado</label>
					<div class="input-group">
					  <input type="text" id="cudomain" class="form-control" placeholder="Buscar dominio aquí...">
					  <div class="input-group-append">
					  	<button name="submit" id="validate2" class="btn btn-primary">Validar</button>
					  </div>
					</div>		        
				</div>
			      <div id="SubDomain" class="tab-content">
					<label class="form-label required">Nombre de Subdiminio</label>
					<div class="input-group">
					  <input type="text" id="sudomain" class="form-control" placeholder="Buscar subdominio aquí...">
					  <div class="input-group-append">
					    <select class="form-control" style="border-radius: 0" id="extension" name="extension">
					    	<?php
					    		$sql = mysqli_query($connect,"SELECT * FROM `hosting_domain_extensions` ORDER BY 'extension_id'");
								if(mysqli_num_rows($sql)>0){
									while($Extension = mysqli_fetch_Assoc($sql)){
										echo "<option>".$Extension['extension_value']."</option>";
									}
								}
								else{
									echo('<option>.html-5.me</option>');
								}
					    	?>
					    </select>
					  </div>
					  <div class="input-group-append">
					  	<button name="submit" id="validate1" class="btn btn-primary">Validar</button>
					  </div>
					</div>
	      		  </div>
			</div>
		</div>
		<hr>
		<div class="col-md-12 mb-15">
			<form action="function/NewAccount.php" method="post">
				<div class="row">
					<div class="col-md-6">
						<div class="mb-10 px-10">
							<label class="form-label required">Paquete de Hosting</label>
							<input type="text" name="package" value="<?php echo $HostingApi['api_package'];?>" class="form-control disabled" readonly>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-10 px-10">
							<label class="form-label required">Nombre de Dominio</label>
							<input type="text" name="domain" id="validomain" placeholder="El dominio se mostrará aquí..." class="form-control disabled" readonly required="true">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-10 px-10">
							<label class="form-label required">Nombre de Usuario</label>
							<input type="text" name="username" placeholder="Se auto implementa" class="form-control disabled" readonly>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-10 px-10">
							<label class="form-label required">Contraseña</label>
							<input type="password" name="password" placeholder="Ingrese su contraseña aquí..." class="form-control" required="true">
						</div>
					</div>
					<div class="col-md-6">
						<div class="mb-10 px-10">
							<button class="btn btn-primary btn-sm" name="submit">Solicitar Cuenta</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#validate1').click(function(){
			var domain = $('#sudomain').val();
			var extensions = $('#extension').val();
			var validomain = domain + extensions;
			$.post('function/ValidateDomain.php', {domain : validomain, submit: ""}, function(data){
				if(validomain != data){
					$('#hidden-area').html('<div class="alert alert-danger" role="alert"><button class="close" data-dismiss="alert" type="button" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+data+'</div>');
				}
				else{
					$('#hidden-area').html('<div class="alert alert-success" role="alert"><button class="close" data-dismiss="alert" type="button" aria-label="Close"><span aria-hidden="true">&times;</span></button>Domain is available and selected  <b>successfully!</b></div>');
					$('#validomain').val(data);
				}
			});
		});
		$('#validate2').click(function(){
			var domain = $('#cudomain').val();
			$.post('function/ValidateDomain.php', {domain : domain, submit: ""}, function(data){
				if(domain != data){
					$('#hidden-area').html('<div class="alert alert-danger" role="alert"><button class="close" data-dismiss="alert" type="button" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+data+'</div>');
				}
				else{
					$('#hidden-area').html('<div class="alert alert-success" role="alert"><button class="close" data-dismiss="alert" type="button" aria-label="Close"><span aria-hidden="true">&times;</span></button>Domain is available and selected  <b>successfully!</b></div>');
					$('#validomain').val(data);
				}
			});
		});
	});
</script>
