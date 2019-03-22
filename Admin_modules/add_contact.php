<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/contact.php';

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$mob = $_POST['mob'];
	$msg = $_POST['msg'];

	$result = ADD_CONTACT_INFO($name,$mail,$mob,$msg);
}

?>