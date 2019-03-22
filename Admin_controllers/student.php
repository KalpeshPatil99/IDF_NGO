<?php 

error_reporting(0);

function STUDENT_ADD($name,$mob,$mail,$inst,$age,$income,$highq,$newImgName,$pwd){
	include '../Admin_config/connection.php';

	$desc="SELECT (MAX(stud_id)) AS `last_id` FROM `student_reg`";
	$desc_res=mysqli_query($conn,$desc);
	$row = mysqli_fetch_assoc($desc_res);
	$temp = explode('-', $row['last_id']);
	$getId = end($temp);
	$incId = $getId + 1;
	$newId = "STUD-".$incId;

	$sql= "INSERT INTO `student_reg`(`stud_id`, `name`, `mobile_no`, `email`, `institution`, `age`, `income`, `high_q`, `high_q_proof`) VALUES ('$newId','$name','$mob','$mail','$inst','$age','$income','$highq','$newImgName')";

	$result=mysqli_query($conn,$sql);

	if ($result) 
	{
		$login_sql= "INSERT INTO `login_student`(`stud_id`,`email`, `stud_pass`) VALUES ('$newId','$mail','$pwd')";
		$login_result=mysqli_query($conn,$login_sql);
		if ($login_result) 
		{
			echo '<script type="text/javascript">alert ("Successfully Registered");';
			echo 'window.location.href = "../index.php?student_registered";';
			echo '</script>';
		}
	}
}

?>