<div class="container-fluid">
	<div class="card py-0">
		<div class="d-flex justify-content-between align-items-center pt-15">
			<h5 class="m-0">Nuevo Ticket</h5>
			<a href="<?php echo $AreaInfo['area_url'];?>mytickets.php" class="btn btn-sm btn-danger"><i class="fa fa-backward"></i> Volver</a>
		</div>
		<hr>
		<form action="function/NewTicket.php" method="post">
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
						<label class="form-label required">Asunto del Ticket</label>
						<input type="text" name="subject" class="form-control" placeholder="Ingrese el asunto del ticket..." required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10 px-10">
						<label class="form-label required">Departmento del Ticket</label>
						<select name="department" class="form-control" required>
					      <option value="" selected="selected" disabled="disabled">Seleccione el Departmento</option>
					      <option value="hosting">Problema de Hosting</option>
					      <option value="ssl">Problema de SSL</option>
					      <option value="tech">Problema Tecnico</option>
					      <option value="client">Problema del Cliente</option>
						</select>
					</div>
				</div>
				<div class="col-md-12">
					<div class="mb-10 px-10">
						<script src="modules/Editor/nicEdit.js"></script>
						<script type="text/javascript">
						    bkLib.onDomLoaded(function(){
						        new nicEditor({iconsPath : 'modules/Editor/nicEditorIcons.gif'}).panelInstance('editor');
						    });
						</script>
						<label class="form-label required">Contenido del Ticket</label>
						<textarea name="editor" id="editor" placeholder="Enter ticket content..." class="form-control" style="height: 200px;"></textarea> 
					</div>
				</div>
				<div class="col-md-12">
					<div class="mb-10 px-10">
						<button name="submit" class="btn btn-sm btn-primary">Crear Ticket</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
