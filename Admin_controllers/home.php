<?php 

error_reporting(0);

function HOME_CALL(){
	include '../Admin_config/connection.php';
	
	$home = array();

	$clients_sql= "SELECT COUNT(*) AS `tot_cl` FROM `sm_clients`";
	$cl_result=mysqli_query($conn,$clients_sql);
	$fetch=mysqli_fetch_assoc($cl_result);
	array_push($home, $fetch);

	$services_sql= "SELECT COUNT(*) AS `tot_service` FROM `sm_solutions`";
	$ser_result=mysqli_query($conn,$services_sql);
	$fetch=mysqli_fetch_assoc($ser_result);
	array_push($home, $fetch);

	$tech_sql= "SELECT COUNT(*) AS `tot_partners` FROM `sm_tech`";
	$tech_result=mysqli_query($conn,$tech_sql);
	$fetch=mysqli_fetch_assoc($tech_result);
	array_push($home, $fetch);

	return($home);
}
 ?>