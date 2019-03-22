<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/scholarship.php';

$sch_fetch = FETCH_SCHOLARSHIP();

$sch_fetch_ongoing = FETCH_SCHOLARSHIP_OG();

if (isset($_POST["submit"])) 
{
	$id = $_POST["sch_id"];

	$update_status = APPROVE_SCHOLARSHIP($id);
}

if (isset($_POST["ongoing_chk"])) 
{
	$id = $_POST["sch_id"];

	$complete = COMPLETE_SCHOLARSHIP($id);
}
?>