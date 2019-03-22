<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/scholarship.php';

if(isset($_POST['submit'])){

	$title = $_POST['sch_title'];
	$url = $_POST['sch_url'];
	$desc = str_replace("'","\'",nl2br($_POST['sch_desc']));
	$file = $_FILES['sch_img'];
	$prv = $_POST['sch_provider']; 
	$prv_type = $_POST['provider_type'];
	$sch_type = $_POST['sch_type'];
	$reward = $_POST['sch_reward'];


	$fileName = $_FILES['sch_img']['name'];
	$fileType = $_FILES['sch_img']['type'];
	$fileTmpName = $_FILES['sch_img']['tmp_name'];
	$fileError = $_FILES['sch_img']['error'];
	$fileSize = $_FILES['sch_img']['size'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed  = array("jpg", "jpeg", "png");


	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNewName = uniqid('', true).".".$fileActualExt;
				$tempName = explode('.', $fileNewName);
				$newImgName = $tempName[0].".".end($tempName);
				$fileDestination = "../images/scholarship_images/".$newImgName;
				move_uploaded_file($fileTmpName, $fileDestination);
				
				$result = SCHOLARSHIP_ADD($title,$desc,$newImgName,$prv,$prv_type,$sch_type,$reward,$url);
			}else{
				echo "Your File is too big";
			}
		}else{
			echo "There was an error uploading your file";
		}
	}else{
		echo "Invalid File Type";
	}


}

?>