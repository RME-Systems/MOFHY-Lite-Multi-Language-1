<?php
require __DIR__.'/Connect.php';
require __DIR__.'/../handler/CookieHandler.php';
if(isset($_POST['submit'])){
	$FormData = array(
    'fname' => htmlentities(mysqli_real_escape_string($connect,$_POST['fname'])),
    'lname' => htmlentities(mysqli_real_escape_string($connect,$_POST['lname'])),
    'phone' => htmlentities(mysqli_real_escape_string($connect,$_POST['phone'])),
    'company' => htmlentities(mysqli_real_escape_string($connect,$_POST['company'])),
    'address' => htmlentities(mysqli_real_escape_string($connect,$_POST['address'])),
    'country' => htmlentities(mysqli_real_escape_string($connect,$_POST['country'])),
    'city' => htmlentities(mysqli_real_escape_string($connect,$_POST['city'])),
    'postal' => htmlentities(mysqli_real_escape_string($connect,$_POST['postal'])),
    'key' => $ClientInfo['hosting_client_key']
	);
	$sql = mysqli_query($connect,"UPDATE `hosting_clients` SET `hosting_client_fname`='".$FormData['fname']."',`hosting_client_lname`='".$FormData['lname']."',`hosting_client_phone`='".$FormData['phone']."',`hosting_client_address`='".$FormData['address']."',`hosting_client_country`='".$FormData['country']."',`hosting_client_city`='".$FormData['city']."',`hosting_client_pcode`='".$FormData['postal']."',`hosting_client_company`='".$FormData['company']."' WHERE `hosting_client_key`='".$FormData['key']."'");
	if($sql){
		$_SESSION['message'] = '<div class="alert alert-success" role="alert">
									  <button class="close" data-dismiss="alert" type="button" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									  Profile updated <b>successfully!</b>
									</div>';
		header('location: ../mysettings.php');
	}
	else{
		$_SESSION['message'] = '<div class="alert alert-danger" role="alert">
									  <button class="close" data-dismiss="alert" type="button" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									  Something went'."'".'s <b>wrong!</b>
									</div>';
		header('location: ../mysettings.php');
	}
}
else{
	header('location: ../');
}
?>