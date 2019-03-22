<?php 

error_reporting(0);

function INSTITUTE_ADD($org_name,$org_mob,$org_mail,$org_pass,$org_website,$org_type,$newImgName){
	include '../Admin_config/connection.php';

	$desc="SELECT (MAX(inist_id)) AS `last_id` FROM `institution_reg`";
	$desc_res=mysqli_query($conn,$desc);
	$row = mysqli_fetch_assoc($desc_res);
	$temp = explode('-', $row['last_id']);
	$getId = end($temp);
	$incId = $getId + 1;
	$newId = "IDF-".$incId;

	$sql= "INSERT INTO `institution_reg`(`inist_id`, `name`, `mobile_no`, `email`, `website`, `documents`, `institution_type`) VALUES ('$newId','$org_name','$org_mob','$org_mail','$org_website','$newImgName','$org_type')";

	$result=mysqli_query($conn,$sql);

	if ($result) 
	{
		$login_sql= "INSERT INTO `login_org`(`inist_id`, `pwd`) VALUES ('$newId','$org_pass')";
		$login_result=mysqli_query($conn,$login_sql);
		if ($login_result) 
		{
			echo '<script type="text/javascript">alert ("Successfully Registered. Your Username is '.$newId.'");';
			echo 'window.location.href = "../index.php?institution_registered";';
			echo '</script>';
		}
	}
}

?>