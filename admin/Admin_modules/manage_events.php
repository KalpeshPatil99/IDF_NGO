<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/event.php';

$event_fetch = FETCH_EVENT();

if (isset($_POST["submit"])) 
{
	$id = $_POST["ev_id"];

	$update_status = COMPLETE_EVENT($id);
}

?>