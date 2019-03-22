<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/login.php';

if(isset($_POST['submit']))
{

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$result = VALIDATE($username,$password);

	if(!empty($result))
	{
		session_start();
		$_SESSION=$result;
		header('Location: ../views/home.php');
	}else {
		echo '<script type="text/javascript">alert ("User does not exist");';
		echo 'window.location.href = "../views/index.php?wrong_credentials";';
		echo '</script>';
	}

}

?>