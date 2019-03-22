<?php 

error_reporting(0);

function MEMBER_ADD($name,$post,$quote,$file){
	include '../Admin_config/connection.php';

	$desc="SELECT (MAX(staff_id)) AS `last_id` FROM `blog_about`";
	$desc_res=mysqli_query($conn,$desc);
	$row = mysqli_fetch_assoc($desc_res);
	$temp = explode('_', $row['last_id']);
	$getId = end($temp);
	$incId = $getId + 1;
	$newId = "st_".$incId;

	$sql= "INSERT INTO `blog_about`(`staff_id`, `staff_name`, `staff_img`, `staff_post`, `staff_quote`, `staff_status`) VALUES ('$newId','$name','$file','$post','$quote', 'Active')";

	$result=mysqli_query($conn,$sql);

	if ($result) 
	{
		echo '<script type="text/javascript">alert ("Member added Successfully");';
		echo 'window.location.href = "../views/team.php?member_added";';
		echo '</script>';
	}
}

function FETCH_TEAM(){
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

function REMOVE_MEMBER($id){
	include '../Admin_config/connection.php';

	$sql= "UPDATE `blog_about` SET `staff_status`='Inactive' WHERE `staff_id`='$id'";

	$result=mysqli_query($conn,$sql);

	if ($result) 
	{
		echo '<script type="text/javascript">alert ("Status Changed Successfully");';
		echo 'window.location.href = "../views/view_team.php?member_removed";';
		echo '</script>';
	}
}
?>