<div class="container-fluid">
	<div class="card py-0">
		<div class="d-flex justify-content-between align-items-center pt-15">
			<h5 class="m-0">Mis Tickets</h5>
			<a href="<?php echo $AreaInfo['area_url'];?>newticket.php" class="btn text-white btn-success btn-sm">Nuevo Ticket</a>
		</div>
		<hr>
		<div class="table-responsive pb-20">
			<table class="table table-stripped">
				<thead>
					<th>ID</th>
					<th>Asunto</th>
					<th>Departamento</th>
					<th>Status</th>
					<th>Acción</th>
				</thead>
				<tbody>
				<?php
					$sql = mysqli_query($connect,"SELECT * FROM `hosting_tickets` WHERE `ticket_for`='".$ClientInfo['hosting_client_key']."' ORDER BY `ticket_id` DESC");
						if(mysqli_num_rows($sql)>0){
							while($TicketInfo = mysqli_fetch_assoc($sql)){
				?>
					<tr>
						<td>#<?php echo $TicketInfo['ticket_unique_id'];?></td>
						<td><?php echo str_rot13($TicketInfo['ticket_subject']);?></td>
						<td><?php 
							if($TicketInfo['ticket_department']=='hosting'){
								echo 'Problema de Hosting';
							} elseif($TicketInfo['ticket_department']=='ssl'){
								echo 'Problema SSL';
							} elseif($TicketInfo['ticket_department']=='tech'){
								echo 'Problema Técnico';
							} elseif($TicketInfo['ticket_department']=='client'){
								echo 'Problema del Cliente';
							}
						?></td>
						<td><?php 
							if($TicketInfo['ticket_status']=='0'){
								echo '<span class="badge bg-success badge-pill">Abierto</span>';
							} elseif($TicketInfo['ticket_status']=='1'){
								echo '<span class="badge bg-success badge-pill">Respuesta de Soporte</span>';
							} elseif($TicketInfo['ticket_status']=='2'){
								echo '<span class="badge bg-success badge-pill">Respuesta del Cliente</span>';
							} elseif($TicketInfo['ticket_status']=='3'){
								echo '<span class="badge bg-danger badge-pill">Cerrado</span>';
							}
						?></td>
						<td><a href="<?php echo $AreaInfo['area_url'];?>viewticket.php?ticket_id=<?php echo $TicketInfo['ticket_unique_id'];?>#reply" class="btn btn-sm btn-secondary btn-rounded">Administrar</a></td>
					</tr>
					<?php
							}
						} else {
					?>
					<tr>
						<td colspan="5" class="text-center">Nada Encontrado</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
