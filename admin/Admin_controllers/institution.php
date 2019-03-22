<?php 
error_reporting(0);

function FETCH_INST()
{
	include '../Admin_config/connection.php';
	$sql= "SELECT * FROM `institution_reg` LIMIT 1,8000";

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if ($count > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			$inst_data[] = $row;
		}
	}
	return($inst_data);
}

?>