<div class="container-fluid">
	<div class="card py-0">
		<div class="d-flex justify-content-between align-items-center pt-15">
			<h5 class="m-0"><?php echo $text['myssl'];?></h5>
			<a href="<?php echo $AreaInfo['area_url'];?>newssl.php" class="btn text-white btn-success btn-sm"><?php echo $text['newssl_title'];?></a>
		</div>
		<hr>
		<div class="table-responsive pb-20">
			<table class="table table-stripped">
				<thead>
					<th><?php echo $text['id'];?></th>
					<th><?php echo $text['order_id'];?></th>
					<th><?php echo $text['domain'];?></th>
					<th><?php echo $text['metod'];?></th>
					<th><?php echo $text['status'];?></th>
					<th><?php echo $text['action'];?></th>
				</thead>
				<tbody>
				<?php
					$sql = mysqli_query($connect,"SELECT * FROM `hosting_ssl` WHERE `ssl_for`='".$ClientInfo['hosting_client_key']."' ORDER BY `ssl_id` DESC");
						if(mysqli_num_rows($sql)>0){
							while($SSLToken = mysqli_fetch_assoc($sql)){
								    $apiClient = new GoGetSSLApi();
								    $token = $apiClient->auth($SSLApi['api_username'], $SSLApi['api_password']);
								    $SSLInfo = $apiClient->getOrderStatus($SSLToken['ssl_key']);

				?> 
					<tr>
						<td>#<?php $Count = $Count ?? 1;echo $Count;$Count += 1;?></td>
						<td><?php echo $SSLInfo['order_id'];?></td>
						<td><?php echo $SSLInfo['domain'];?></td>
						<td>DNS</td>
						<td><?php 
							if($SSLInfo['status']=='processing'){
								echo '<span class="badge bg-primary badge-pill">', $text['processing'], '</span>';
							} elseif($SSLInfo['status']=='active'){
								echo '<span class="badge bg-success badge-pill">', $text['active'], '</span>';
							} elseif($SSLInfo['status']=='cancelled'){
								echo '<span class="badge bg-danger badge-pill">', $text['cancelled'], '</span>';
							} elseif($SSLInfo['status']=='expired'){
								echo '<span class="badge bg-danger badge-pill">', $text['expired'], '</span>';
							}
						?></td>
						<td><a href="<?php echo $AreaInfo['area_url'];?>viewssl.php?ssl_id=<?php echo $SSLInfo['order_id'];?>" class="btn btn-rounded btn-sm btn-secondary"><?php echo $text['manage'];?></a></td>
					</tr>
					<?php
							}
						} else {
					?>
					<tr>
						<td colspan="6" class="text-center"><?php echo $text['noting_find'];?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
