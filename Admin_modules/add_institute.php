<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/institute.php';

if(isset($_POST['org_submit'])){

	$org_name = $_POST['org_name'];
	$org_mob = $_POST['org_contact'];
	$org_mail = $_POST['org_email'];
	$org_pass = md5($_POST['org_pass']);
	$org_website = $_POST['org_website'];
	$org_type = $_POST['org_type'];
	$file_qualify = $_FILES['org_doc'];

	
	$fileName = $_FILES['org_doc']['name'];
	$fileTmpName = $_FILES['org_doc']['tmp_name'];
	$fileError = $_FILES['org_doc']['error'];
	$fileSize = $_FILES['org_doc']['size'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed  = array("jpg", "jpeg", "png");


	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNewName = uniqid('', true).".".$fileActualExt;
				$tempName = explode('.', $fileNewName);
				$newImgName = $tempName[0].".".end($tempName);
				$fileDestination = "../admin/images/institute_images/".$newImgName;
				move_uploaded_file($fileTmpName, $fileDestination);
				
				$result = INSTITUTE_ADD($org_name,$org_mob,$org_mail,$org_pass,$org_website,$org_type,$newImgName);
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