<?php 

error_reporting(0);

function EVENT_ADD($name,$report,$file){
	include '../Admin_config/connection.php';

	$validate = "SELECT `evt_id` FROM `blog_events` WHERE `evt_status`='Ongoing'";
	$validate_res=mysqli_query($conn,$validate);

	if (mysqli_num_rows($validate_res) == 0)
	{
		$desc="SELECT (MAX(evt_id)) AS `last_id` FROM `blog_events`";
		$desc_res=mysqli_query($conn,$desc);
		$row = mysqli_fetch_assoc($desc_res);
		$temp = explode('_', $row['last_id']);
		$getId = end($temp);
		$incId = $getId + 1;
		$newId = "ev_".$incId;

		$sql= "INSERT INTO `blog_events`(`evt_id`, `evt_name`, `evt_img`, `evt_report`, `evt_status`) VALUES ('$newId','$name','$file','$report','Ongoing')";

		$result=mysqli_query($conn,$sql);

		if ($result) 
		{
			echo '<script type="text/javascript">alert ("Event added Successfully");';
			echo 'window.location.href = "../views/event.php?event_added";';
			echo '</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert ("There is already an Ongoing Event. Please Complete it first");';
		echo 'window.location.href = "../views/view_events.php?complete_an_event";';
		echo '</script>';
	}
}

function FETCH_EVENT(){
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

function COMPLETE_EVENT($id){
	include '../Admin_config/connection.php';
	$sql= "UPDATE `blog_events` SET `evt_status`='Completed' WHERE `evt_id`='$id'";

	$result=mysqli_query($conn,$sql);

	if ($result) 
	{
		echo '<script type="text/javascript">alert ("Event Completed Successfully");';
		echo 'window.location.href = "../views/view_events.php?event_completed";';
		echo '</script>';
	}
}
?>