<?php 
include '../Admin_config/connection.php';
include '../Admin_controllers/student.php';

if(isset($_POST['student_reg'])){

	$name = $_POST['std_name'];
	$mob = $_POST['std_mobile_no'];
	$mail = $_POST['std_email'];
	$std_pass = md5($_POST['stud_pass']);
	$inst = $_POST['std_institution'];
	$age = $_POST['std_age'];
	$income = $_POST['family_income'];
	$highq = $_POST['highest_q'];
	$file_qualify = $_FILES['highest_q_proof'];

	
	$fileName = $_FILES['highest_q_proof']['name'];
	$fileTmpName = $_FILES['highest_q_proof']['tmp_name'];
	$fileError = $_FILES['highest_q_proof']['error'];
	$fileSize = $_FILES['highest_q_proof']['size'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed  = array("jpg", "jpeg", "png");


	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNewName = uniqid('', true).".".$fileActualExt;
				$tempName = explode('.', $fileNewName);
				$newImgName = $tempName[0].".".end($tempName);
				$fileDestination = "../admin/images/student_images/".$newImgName;
				move_uploaded_file($fileTmpName, $fileDestination);
				
				$result = STUDENT_ADD($name,$mob,$mail,$inst,$age,$income,$highq,$newImgName,$std_pass);
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