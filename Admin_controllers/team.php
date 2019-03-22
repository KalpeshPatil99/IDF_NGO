<?php 

error_reporting(0);

function TEAM_FETCH($conn){
	include '../Admin_config/connection.php';

	$sql= "SELECT * FROM `blog_about` WHERE `staff_status`='Active' LIMIT 1,8000";

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);


	if ($count > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			$team_data[] = $row;
		}
	}
	return($team_data);
}

?>