<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/event.php';

if(isset($_POST['submit'])){

	$name = $_POST['ev_name']; 
	$file = $_FILES['ev_img'];
	$desc = $desc = str_replace("'","\'",nl2br($_POST['ev_desc']));

	$fileName = $_FILES['ev_img']['name'];
	$fileType = $_FILES['ev_img']['type'];
	$fileTmpName = $_FILES['ev_img']['tmp_name'];
	$fileError = $_FILES['ev_img']['error'];
	$fileSize = $_FILES['ev_img']['size'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed  = array("jpg", "jpeg", "png");


	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNewName = uniqid('', true).".".$fileActualExt;
				$tempName = explode('.', $fileNewName);
				$newImgName = $tempName[0].".".end($tempName);
				$fileDestination = "../images/event_images/".$newImgName;
				move_uploaded_file($fileTmpName, $fileDestination);
				
				$result = EVENT_ADD($name,$desc,$newImgName);
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