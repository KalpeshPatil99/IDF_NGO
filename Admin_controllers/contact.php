<?php 

error_reporting(0);

function ADD_CONTACT_INFO($name,$mail,$mob,$msg){
	include '../Admin_config/connection.php';
	
	$sql= "INSERT INTO `blog_contact`(`ct_name`, `ct_email`, `ct_mob`, `ct_msg`) VALUES ('$name','$mail','$mob','$msg')";
	$result=mysqli_query($conn,$sql);

	if ($result) {
		echo '<script type="text/javascript">alert ("Thank You! for contacting us. We will get in touch with you soon");';
		echo 'window.location.href = "../contact.php?message_sent";';
		echo '</script>';
	} 
}
 ?>