<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/team.php';

if(isset($_POST['submit'])){

	$name = $_POST['st_name']; 
	$post = $_POST['st_post'];
	$file = $_FILES['st_img'];
	$quote = $_POST['st_quote'];

	$fileName = $_FILES['st_img']['name'];
	$fileType = $_FILES['st_img']['type'];
	$fileTmpName = $_FILES['st_img']['tmp_name'];
	$fileError = $_FILES['st_img']['error'];
	$fileSize = $_FILES['st_img']['size'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed  = array("jpg", "jpeg", "png");


	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNewName = uniqid('', true).".".$fileActualExt;
				$tempName = explode('.', $fileNewName);
				$newImgName = $tempName[0].".".end($tempName);
				$fileDestination = "../images/members_images/".$newImgName;
				move_uploaded_file($fileTmpName, $fileDestination);
				
				$result = MEMBER_ADD($name,$post,$quote,$newImgName);
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