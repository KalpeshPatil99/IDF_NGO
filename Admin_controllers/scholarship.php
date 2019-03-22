<?php 

error_reporting(0);

function SCHOLARSHIP_FETCH($conn){
	include '../Admin_config/connection.php';

	$for_count = "SELECT * FROM `add_scholarship`";
	$run=mysqli_query($conn,$for_count);
	$var_count=mysqli_num_rows($run);
	$new_count = $var_count - 1;

	$sql= "SELECT * FROM `add_scholarship` WHERE `scholarship_status`='Active' AND `apr_status`='Approved' ORDER BY `sr_id` DESC LIMIT 0,".$new_count;

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);


	if ($count > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			$scholarship_data[] = $row;
		}
	}

	shuffle($scholarship_data);
	$random_pick = array_slice($scholarship_data,0,4);
	shuffle($random_pick);

	return($random_pick);
}

function SCHOLARSHIP_FETCH_ALL($conn)
{
	include '../Admin_config/connection.php';

	$for_count = "SELECT * FROM `add_scholarship`";
	$run=mysqli_query($conn,$for_count);
	$var_count=mysqli_num_rows($run);
	$new_count = $var_count - 1;

	$sql= "SELECT * FROM `add_scholarship` WHERE `scholarship_status`='Active' AND `apr_status`='Approved' ORDER BY `sr_id` DESC LIMIT 0,".$new_count;

	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);


	if ($count > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			$scholarship_data[] = $row;
		}
	}
	return($scholarship_data);
}

// function RANDOM_ARTICLES($conn,$id){
// 	include '../Admin_config/connection.php';
// 	$sql= "SELECT * FROM `blog_article` WHERE NOT `at_id`='$id' LIMIT 1,8000";

// 	$result=mysqli_query($conn,$sql);
// 	$count=mysqli_num_rows($result);

// 	if ($count > 0) {
// 		while($row = mysqli_fetch_assoc($result))
// 		{
// 			$article_data[] = $row;
// 		}
// 	}

// 	shuffle($article_data);
// 	$random_pick = array_slice($article_data,0,5);
// 	shuffle($random_pick);

// 	return($random_pick);
// }


?>