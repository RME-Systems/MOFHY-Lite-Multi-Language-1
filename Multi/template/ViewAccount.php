<div class="container-fluid">
	<div class="card py-0">
		<div class="d-flex justify-content-between align-items-center pt-15">
			<h5 class="m-0"><?php echo $text['viewaccount_title'];?> (<?php echo $_GET['account_id']?>)</h5>
			<a href="<?php echo $AreaInfo['area_url'];?>myaccounts.php" class="btn btn-sm btn-danger"><i class="fa fa-backward"></i> <?php echo $text['return'];?></a>
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
						<a href="cplogin.php?account_id=<?php echo $AccountInfo['account_username']?>" target="_blank" class="btn btn-success text-white btn-block my-5 btn-rounded"><?php echo $text['control_panel'];?></a>
						<a href="https://filemanager.ai/new/#/c/ftpupload.net/<?php echo $AccountInfo['account_username'].'/'.base64_encode(json_encode(['t'=>'ftp','c'=>['v'=>1,'p'=>$AccountInfo['account_password']]]));?>" target="_blank" class="btn btn-primary text-white btn-block my-5 btn-rounded"></pre><?php echo $text['filemanager'];?></a>
						<a href="settings.php?account_id=<?php echo $AccountInfo['account_username']?>" target="_blank" class="btn btn-secondary btn-block my-5 btn-rounded"><?php echo $text['account_settings_buttom'];?></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['account_username'];?>:</b>
					<span><?php echo $AccountInfo['account_username']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['register_pass'];?>:</b>
					<span><kbd><?php echo $AccountInfo['account_password']?></kbd></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['domain'];?>:</b>
					<span><?php echo $AccountInfo['account_domain']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['cpanel_domain'];?>:</b>
					<span><?php echo $HostingApi['api_cpanel_url']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['status'];?>:</b>
					<span>
						<?php if($AccountInfo['account_status']=='0'){
								echo '<span class="badge bg-secondary">', $text['inactive'], '</span>';
							} elseif($AccountInfo['account_status']=='1'){
								echo '<span class="badge bg-success">', $text['active'], '</span>';
							} elseif($AccountInfo['account_status']=='2'){
								echo '<span class="badge bg-danger">', $text['suspended'], '</span>';
							}?>
					</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['deploy_date'];?>:</b>
					<span><?php echo $AccountInfo['account_date']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['server_ip'];?>:</b>
					<span><?php echo $HostingApi['api_server_ip']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['your_ip'];?>:</b>
					<span><?php echo UserInfo::get_ip()?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['ftp_host'];?>:</b>
					<span>ftpupload.net</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['ftp_port'];?>:</b>
					<span>21</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['mysql_host'];?>:</b>
					<span><?php echo str_replace('cpanel', 'sqlxxx', $HostingApi['api_cpanel_url'])?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['mysql_port'];?>:</b>
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
							echo '<div class="alert alert-secondary col-md-12">', $text['inactive_alert'], '</div>';
						} elseif($AccountInfo['account_status']=='2'){
							echo '<div class="alert alert-secondary col-md-12">', $text['suspended_text'], '</div>';
						}
					?>
					<div class="col-md-4 px-5 text-center py-15">
						<i class="fa fa-laptop fa-10x"></i>
					</div>
					<div class="col-md-4 offset-md-4 px-20 py-5 text-center text-md-right">
						<a href="#" target="_blank" class="btn btn-success text-white btn-block my-5 btn-rounded disabled"><?php echo $text['control_panel'];?></a>
						<a href="#" target="_blank" class="btn btn-primary text-white btn-block my-5 btn-rounded disabled"></pre><?php echo $text['filemanager'];?></a>
						<a href="newticket.php" target="_blank" class="btn btn-secondary btn-block my-5 btn-rounded"><?php echo $text['open_ticket'];?></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['account_username'];?>:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['account_pass'];?>:</b>
					<span><kbd>NULL</kbd></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['domain'];?>:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['cpanel_domain'];?>:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['status'];?>:</b>
					<span>
						<?php if($AccountInfo['account_status']=='0'){
								echo '<span class="badge bg-secondary">', $text['inactive'], '</span>';
							} elseif($AccountInfo['account_status']=='1'){
								echo '<span class="badge bg-success">', $text['active'], '</span>';
							} elseif($AccountInfo['account_status']=='2'){
								echo '<span class="badge bg-danger">', $text['suspended'], '</span>';;
							}?>
					</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['deploy_date'];?>:</b>
					<span><?php echo $AccountInfo['account_date']?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['server_ip'];?>:</b>
					<span>NULL</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-between align-items-center m-5">
					<b><?php echo $text['your_ip'];?>:</b>
					<span><?php echo UserInfo::get_ip()?></span>
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
		    <h5 class="m-0"><?php echo $text['domains'];?></h5>
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
					echo "<div class='d-flex justify-content-between align-items-center m-5'>						<span>".$domain."</span>
						<span><a href='".$link."' class='btn btn-sm btn-square btn-secondary' target='_blank'><i class='fa fa-file-import'></i></a></span>
					</div>";
				}
			}
			else{
				echo "<p class='text-center'>".$text['noting_found']."</p>";
			}
			?>
		</div>
	</div>
</div>
