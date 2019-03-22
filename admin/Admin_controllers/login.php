<?php 

error_reporting(0);

function VALIDATE($username,$password){
	include '../Admin_config/connection.php';
	$sql= "SELECT * FROM `login_admin` WHERE `user_id` = '$username' AND `pwd` = '$password'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if ($count==1) {
		$admin_data=mysqli_fetch_assoc($result);
	    $res = $admin_data;
	} 

	return($res);
}

 ?>