<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/team.php';

$team_fetch = FETCH_TEAM();

if (isset($_POST["submit"])) 
{
	$id = $_POST["staff_id"];

	$update_status = REMOVE_MEMBER($id);
}

?>