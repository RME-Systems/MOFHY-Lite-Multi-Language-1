<div class="container-fluid">
	<div class="card py-0">
		<div class="d-flex justify-content-between align-items-center pt-15">
			<h5 class="m-0"><?php echo $text['viewticket_title'];?> #<?php echo $_GET['ticket_id']?></h5>
			<a href="<?php echo $AreaInfo['area_url'];?>mytickets.php" class="btn btn-sm btn-danger"><i class="fa fa-backward"></i> <?php echo $text['return'];?></a>
		</div><hr>
		<?php $TicketInfo = mysqli_fetch_assoc($sql);?>
		<div class="mb-20">
			<div class="row">
				<div class="col-md-6">
					<div class="d-flex justify-content-between align-items-center mx-10 my-5">
						<b><?php echo $text['ticket_subjet'];?>:</b>
						<span><?php echo str_rot13($TicketInfo['ticket_subject']);?></span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="d-flex justify-content-between align-items-center mx-10 my-5">
						<b><?php echo $text['status'];?>:</b>
						<span><?php 
							if($TicketInfo['ticket_status']=='0'){
								echo '<span class="badge bg-success">', $text['open'], '</span>';
							} elseif($TicketInfo['ticket_status']=='1'){
								echo '<span class="badge bg-success text-white">', $text['support_reply'], '</span>';
							} elseif($TicketInfo['ticket_status']=='2'){
								echo '<span class="badge bg-success">', $text['client_reply'], '</span>';
							} elseif($TicketInfo['ticket_status']=='3'){
								echo '<span class="badge bg-danger">', $text['closed'], '</span>';
							}
						?></span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="d-flex justify-content-between align-items-center mx-10 my-5">
						<b><?php echo $text['departament'];?>:</b>
						<span><?php 
							if($TicketInfo['ticket_department']=='hosting'){
								echo $text['departament_hosting'];
							} elseif($TicketInfo['ticket_department']=='ssl'){
								echo $text['departament_ssl'];
							} elseif($TicketInfo['ticket_department']=='tech'){
								echo $text['departament_tech'];
							} elseif($TicketInfo['ticket_department']=='client'){
								echo $text['departament_client'];
							}
						?></span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="d-flex justify-content-between align-items-center mx-10 my-5">
						<b><?php echo $text['date'];?>:</b>
						<span><?php echo $TicketInfo['ticket_date'];?></span>
					</div>
				</div>
				<div class="col-md-12">
					<div class="mx-10 my-5">
						<b><?php echo $text['ticket_content'];?>:</b>
						<span><?php echo str_rot13($TicketInfo['ticket_content']);?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		$sql = mysqli_query($connect,"SELECT * FROM `hosting_ticket_replies`WHERE `reply_for`='".$TicketInfo['ticket_unique_id']."'");
		if(mysqli_num_rows($sql)>0){
			while($ReplyInfo = mysqli_fetch_assoc($sql)){
				if($ReplyInfo['reply_from'] == $ClientInfo['hosting_client_key']){
					$From = $ClientInfo['hosting_client_fname']." ".$ClientInfo['hosting_client_lname'];
				}
				else{
					$From = 'Staff Member';
				}
	?>
		<div class="card p-5">
			<div class="d-flex justify-content-between align-items-center px-5">
				<b class="py-5"><?php echo $From;?></b>
				<span><?php echo $ReplyInfo['reply_date'];?></span>
			</div><hr>
			<div class="px-10 m-5">
				<?php echo str_rot13($ReplyInfo['reply_content']);?>
			</div>
		</div>
	<?php 
			}
		} else { 
	?>
		<div class="card p-5">
			<div class="text-center">
				<p><?php echo $text['no_reply'];?></p>
			</div>
		</div>
	<?php } ?>
	<div class="card p-5" id="reply">
		<?php if($TicketInfo['ticket_status']=='3'){ ?>
			<div class="text-center">
				<p>$text['cant_reply']</p>
			</div>
		<?php } else { ?>
				<form action="function/ReplyTicket.php" method="post" class="p-10">
					<div class="form-group">
						<script src="modules/Editor/nicEdit.js"></script>
						<script type="text/javascript">
						    bkLib.onDomLoaded(function(){
						        new nicEditor({iconsPath : 'modules/Editor/nicEditorIcons.gif'}).panelInstance('editor');
						    });
						</script>
						<label class="form-label required"><?php echo $text['new_reply_content'];?></label>
						<textarea class="form-control" name="editor" id="editor" style="height: 200px"></textarea>
						<input type="hidden" name="ticket_id" value="<?php echo $TicketInfo['ticket_unique_id'];?>">
					</div>
					<div class="form-group my-0">
						<button class="btn btn-sm btn-primary" name="submit"><?php echo $text['create_reply'];?></button>
					</div>
				</form>
		<?php } ?>
	</div>
</div>
