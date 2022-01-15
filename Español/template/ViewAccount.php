<<div class="container-fluid">
	<div class="card py-0">
		<div class="d-flex justify-content-between align-items-center pt-15">
			<h5 class="m-0">Viendo la Cuenta (<?php echo $_GET['account_id']?>)</h5>
			<a href="<?php echo $AreaInfo['area_url'];?>myaccounts.php" class="btn btn-sm btn-danger"><i class="fa fa-backward"></i> Volver</a>
		</div><hr>
		<?php $AccountInfo = mysqli_fetch_assoc($sql);
			if($AccountInfo['account_status']==1){
		?>
			<div class="row pb-10">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4 px-5 text-center py-15">
						<i class="fa fa-laptop fa-10x"></i>
					</div>
					<div class="col-md-4 offset-md-4 px-20 py-5 text-center text-md-right">
						<a href="cplogin.php?account_id=<?php echo $AccountInfo['account_username']?>" target="_blank" class="btn btn-success text-white btn-block my-5 btn-rounded">Panel de Control</a>
						<a href="https://filemanager.ai/new/#/c/ftpupload.net/<?php echo $AccountInfo['account_username'].'/'.base64_encode(json_encode(['t'=>'ftp','c'=>['v'=>1,'p'=>$AccountInfo['account_password']]]));?>" target="_blank" class="btn btn-primary text-white btn-block my-5 btn-rounded"></pre>Administrador de Archivos</a>
						<a href="settings.php?account_id=<?php echo $AccountInfo['account_username']?>" target="_blank" class="btn btn-secondary btn-block my-5 btn-rounded">Editar Ajustes</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Nombre de Usuario:</b>
					<span><?php echo $AccountInfo['account_username']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Contraseña:</b>
					<span><kbd><?php echo $AccountInfo['account_password']?></kbd></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Dominio:</b>
					<span><?php echo $AccountInfo['account_domain']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Dominio de Cpanel:</b>
					<span><?php echo $HostingApi['api_cpanel_url']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Status:</b>
					<span>
						<?php if($AccountInfo['account_status']=='0'){
								echo '<span class="badge bg-secondary">Inactiva</span>';
							} elseif($AccountInfo['account_status']=='1'){
								echo '<span class="badge bg-success">Activa</span>';
							} elseif($AccountInfo['account_status']=='2'){
								echo '<span class="badge bg-danger">Suspendida</span>';
							}?>
					</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Fecha de Ceación:</b>
					<span><?php echo $AccountInfo['account_date']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>IP del Servidor:</b>
					<span><?php echo $HostingApi['api_server_ip']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Su IP:</b>
					<span><?php echo UserInfo::get_ip()?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Nombre de Host FTP:</b>
					<span>ftpupload.net</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Puerto FTP:</b>
					<span>21</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Nombre de host MySQL:</b>
					<span><?php echo str_replace('cpanel', 'sqlxxx', $HostingApi['api_cpanel_url'])?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Puerto MySQL:</b>
					<span>3306</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Nameserver 1:</b>
					<span><?php echo $HostingApi['api_ns_1']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Nameserver 2:</b>
					<span><?php echo $HostingApi['api_ns_2']?></span>
				</div>
			</div>
		</div>
		<?php } else {?>
		<div class="row pb-10">
			<div class="col-md-12">
				<div class="row">
					<?php
					if($AccountInfo['account_status']=='0'){
							echo '<div class="alert alert-secondary col-md-12">¡Su cuenta ahora está inactiva y necesita crear un nuevo ticket para borrar este registro!</div>';
						} elseif($AccountInfo['account_status']=='2'){
							echo '<div class="alert alert-secondary col-md-12">¡Su cuenta ahora está suspendida y necesita crear un nuevo ticket para solicitar una copia de seguridad o eliminar este registro!</div>';
						}
					?>
					<div class="col-md-4 px-5 text-center py-15">
						<i class="fa fa-laptop fa-10x"></i>
					</div>
					<div class="col-md-4 offset-md-4 px-20 py-5 text-center text-md-right">
						<a href="#" target="_blank" class="btn btn-success text-white btn-block my-5 btn-rounded disabled">Panel de Control</a>
						<a href="#" target="_blank" class="btn btn-primary text-white btn-block my-5 btn-rounded disabled"></pre>Administrador de Archivos</a>
						<a href="newticket.php" target="_blank" class="btn btn-secondary btn-block my-5 btn-rounded">Abrir Ticket</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Nombre de Usuario:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Contraseña:</b>
					<span><kbd>NULL</kbd></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Dominio:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Dominio de cPanel:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Status:</b>
					<span>
						<?php if($AccountInfo['account_status']=='0'){
								echo '<span class="badge bg-secondary">Inactiva</span>';
							} elseif($AccountInfo['account_status']=='1'){
								echo '<span class="badge bg-success">Activa</span>';
							} elseif($AccountInfo['account_status']=='2'){
								echo '<span class="badge bg-danger">Suspendida</span>';;
							}?>
					</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Fecha de Creación:</b>
					<span><?php echo $AccountInfo['account_date']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>IP del Servidor:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Su IP:</b>
					<span><?php echo UserInfo::get_ip()?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Host FTP:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Puerto FTP:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Host MySQL:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Puerto Mysql:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Nameserver 1:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b>Nameserver 2:</b>
					<span>NULL</span>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
		<div class="card py-0">
			<div class="d-flex justify-content-between align-items-center pt-15">
				<h5 class="m-0">Dominios</h5>
			</div>
			<hr>
			<div class="mb-10">
				<?php 
				use \InfinityFree\MofhClient\Client;
				if($AccountInfo['account_status']==1){
					$client = Client::create();
					$request = $client->getUserDomains(['username' => $AccountInfo['account_username']]);
					$response = $request->send();
					$res = $response->getDomains();
					foreach($res as $domain){
						$key = str_replace('\/','/', json_encode(['t'=>'ftp','c'=>['v'=>1,'p'=>$AccountInfo['account_password'],'i' => "/".$domain."/htdocs/"]]));
						$link = "https://filemanager.ai/new/#/c/ftpupload.net/".$AccountInfo['account_username'].'/'.base64_encode($key);
						echo "<div class='d-flex justify-content-between align-items-center m-5'>
							<span>".$domain."</span>
							<span><a href='".$link."' class='btn btn-sm btn-square btn-secondary' target='_blank'><i class='fa fa-file-import'></i></a></span>
						</div>";
					}
				}
				else{
					echo "<p class='text-center'>No se encontraron Dominios</p>";
				}
				?>
			</div>
		</div>
</div>