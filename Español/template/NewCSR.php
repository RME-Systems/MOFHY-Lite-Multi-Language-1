<div class="container-fluid">
	<div class="card py-0">
		<div class="d-flex justify-content-between align-items-center pt-15">
			<h5 class="m-0">Generador CSR</h5>
			<a href="<?php echo $AreaInfo['area_url'];?>mytools.php" class="btn btn-sm btn-danger"><i class="fa fa-backward"></i> Volver</a>
		</div>
		<hr>
			<div class="row pb-20">
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Su Nombre</label>
						<input type="text" id="name" value="<?php echo $ClientInfo['hosting_client_fname'].' '.$ClientInfo['hosting_client_lname'];?>" class="form-control disabled" required readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Dirección de Email</label>
						<input type="text" id="email" value="<?php echo $ClientInfo['hosting_client_email'];?>" class="form-control disabled" required readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Su País</label>
						<input type="text" id="country" value="<?php 
						if($ClientInfo['hosting_client_country']!='NULL'){
							echo $ClientInfo['hosting_client_country'];
						}
						else{
							echo 'NULL';
						}
					?>" class="form-control disabled"  required readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Estado</label>
						<input type="text" id="state" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Ciudad</label>
						<input type="text" id="city" value="<?php echo $ClientInfo['hosting_client_city'];?>" class="form-control disabled"  required readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Compañía</label>
						<input type="text" id="company" value="<?php echo $ClientInfo['hosting_client_company'];?>" class="form-control disabled"  required readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Departamento</label>
						<input type="text" id="department" value="IT" class="form-control disabled"  required readonly>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Dominio</label>
						<input type="text" id="domain" class="form-control" required>
					</div>
				</div>
				<div class="col-md-12">
					<div class="mb-5 px-10">
						<button name="submit" class="btn btn-sm btn-primary" id="request">Solicitar CSR</button>
					</div>
				</div>
<div id="result" class="col-12 mb-10 px-10"></div>
			</div>
	</div>
</div>
<script src="assets/js/jquery.js"></script>
<script>
$(document).ready(function(){
	$("#request").click(function(){
	var email = $("#email").val();
	var country = $("#country").val();
	var company = $("#company").val();
	var state = $("#state").val();
	var city = $("#city").val();
	var department = $("#department").val();
	var domain = $("#domain").val();
		$.post("function/NewCSR.php", {domain: domain,email: email,company: company, country: country,state: state,city: city,department: department,submit: ""}, function(data){
			$('#hidden-area').html('<div class="alert alert-success" role="alert"><button class="close" data-dismiss="alert" type="button" aria-label="Close"><span aria-hidden="true">&times;</span></button>Results fetched <b>successfully!</b></div>');
			$("#result").html(data);
		});
	});
});
</script>
