<?php 

error_reporting(0);

function SCHOLARSHIP_ADD($title,$dc,$newImgName,$prv,$prv_type,$sch_type,$reward,$url){
	include '../Admin_config/connection.php';

	$desc="SELECT (MAX(sch_id)) AS `last_id` FROM `add_scholarship`";
	$desc_res=mysqli_query($conn,$desc);
	$row = mysqli_fetch_assoc($desc_res);
	$temp = explode('-', $row['last_id']);
	$getId = end($temp);
	$incId = $getId + 1;
	$newId = "SCH-".$incId;

	$sql= "INSERT INTO `add_scholarship`(`sch_id`, `name`, `sch_img`,`provider`, `provider_type`, `scholarship_type`, `reward`, `description`, `sch_url`) VALUES ('$newId','$title','$newImgName','$prv','$prv_type','$sch_type','$reward','$dc','$url')";

	$result=mysqli_query($conn,$sql);

	if ($result) 
	{
		echo '<script type="text/javascript">alert ("Scholarship added Successfully");';
		echo 'window.location.href = "../views/scholarship.php?scholarship_added";';
		echo '</script>';
	}
}

function FETCH_SCHOLARSHIP(){
	include '../Admin_config/connection.php';
	$sql= "SELECT * FROM `add_scholarship` WHERE `scholarship_status`='Inactive' AND `apr_status`='Not Approved' LIMIT 1,8000";

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if ($count > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			$sch_data[] = $row;
		}
	}
	return($sch_data);
}

function APPROVE_SCHOLARSHIP($id){
	include '../Admin_config/connection.php';
	$sql= "UPDATE `add_scholarship` SET `scholarship_status`='Active', `apr_status`='Approved' WHERE `sch_id`='$id'";

	$result=mysqli_query($conn,$sql);

	if ($result) 
	{
		echo '<script type="text/javascript">alert ("Scholarship Approved Successfully");';
		echo 'window.location.href = "../views/view_scholarship.php?scholarship_approved";';
		echo '</script>';
	}
}

function FETCH_SCHOLARSHIP_OG(){
	include '../Admin_config/connection.php';
	$sql= "SELECT * FROM `add_scholarship` WHERE `scholarship_status`='Active' AND `apr_status`='Approved'";

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if ($count > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			$sch_data[] = $row;
		}
	}
	return($sch_data);
}

function COMPLETE_SCHOLARSHIP($id){
	include '../Admin_config/connection.php';
	$sql= "UPDATE `add_scholarship` SET `scholarship_status`='Complete', `apr_status`='Complete' WHERE `sch_id`='$id'";

	$result=mysqli_query($conn,$sql);

	if ($result) 
	{
		echo '<script type="text/javascript">alert ("Scholarship Completed");';
		echo 'window.location.href = "../views/view_scholarship.php?scholarship_completed";';
		echo '</script>';
	}
}
?>