<?php 

error_reporting(0);

function EVENT_FETCH_ONGOING($conn){
	include '../Admin_config/connection.php';
	$sql= "SELECT * FROM `blog_events` WHERE `evt_status`='Ongoing'";

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if ($count > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			$event_data[] = $row;
		}
	}
	return($event_data);
}

function EVENT_FETCH($conn){
	include '../Admin_config/connection.php';
	$sql= "SELECT * FROM `blog_events` LIMIT 1,8000";

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if ($count > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			$event_data[] = $row;
		}
	}
	return($event_data);
}

function FETCH_EVENT($conn,$id){
	include '../Admin_config/connection.php';
	$sql= "SELECT * FROM `blog_events` WHERE `evt_id`='$id'";

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if ($count == 1) {
		while($row = mysqli_fetch_assoc($result))
		{
			$event_data = $row;
		}
	}
	return($event_data);
}

?>