<div class="container-fluid">
	<div class="card py-0">
		<div class="d-flex justify-content-between align-items-center pt-15">
			<h5 class="m-0"><?php echo $text['my_accounts_title'];?></h5>
			<a href="<?php echo $AreaInfo['area_url'];?>newaccount.php" class="btn text-white btn-success btn-sm"><?php echo $text['new_account'];?></a>
		</div>
		<hr>
		<div class="table-responsive">
			<table class="table table-stripped">
				<thead>
					<th><?php echo $text['id'];?></th>
					<th><?php echo $text['username'];?></th>
					<th><?php echo $text['domain'];?></th>
					<th><?php echo $text['deploy_date'];?></th>
					<th><?php echo $text['status'];?></th>
					<th><?php echo $text['action'];?></th>
				</thead>
				<tbody>
				<?php
					$sql = mysqli_query($connect,"SELECT * FROM `hosting_account` WHERE `account_for`='".$ClientInfo['hosting_client_key']."' ORDER BY `account_id` DESC");
							$Rows = mysqli_num_rows($sql);
						if($Rows>0){
							while($AccountInfo = mysqli_fetch_assoc($sql)){
				?>
					<tr>
						<td>#<?php $Count = $Count ?? 1;echo $Count;$Count += 1;?></td>
						<td><?php echo $AccountInfo['account_username'];?></td>
						<td><?php echo $AccountInfo['account_domain'];?></td>
						<td><?php echo $AccountInfo['account_date'];?></td>
						<td><?php 
							if($AccountInfo['account_status']=='0'){
								echo '<span class="badge bg-secondary badge-pill">', $text['inactive'],'</span>';
							} elseif($AccountInfo['account_status']=='1'){
								echo '<span class="badge bg-success badge-pill">', $text['active'], '</span>';
							} elseif($AccountInfo['account_status']=='2'){
								echo '<span class="badge bg-danger badge-pill">', $text['suspended'], '</span>';
							}
						?></td>
						<td><a href="<?php echo $AreaInfo['area_url'];?>viewaccount.php?account_id=<?php echo $AccountInfo['account_username'];?>" class="btn btn-sm btn-secondary btn-rounded"><?php echo $text['manage'];?></a></td>
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
		<?php if($Rows>2){
			echo '<div class="alert alert-secondary"><i class="fa fa-info-circle mr-5"></i>', $text['account_limit_alert'], '</div>';
		};?>
		<p class="pb-10"><?php echo $Rows;?><?php echo $text['accounts_limit'];?></p>
	</div>
</div>
