<?php 
error_reporting(0); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Indian Development Foundation</title>

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="js/bootstrap.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>
	<style type="text/css">
		
ul{display:block}

li{display:inline-block}
	</style>
</head>
<body>
	<div class="container">
		<div class="card">
			<form action="../Admin_modules/login_validate.php" method="post">
				<div class="col-lg-12 form">
					<h3 class="title text-center">LOGIN</h3>
					<div class="wrap">
						<p class="head">Username</p>
						<span class="ico fa fa-user"></span>
						<input type="text" id="username" name="username" required>
					</div>
					<div class="wrap">
						<p class="head">Password</p>
						<span class="ico fa fa-lock"></span>
						<input type="password" id="password" name="password">
					</div>
					<div class="wrap text-center">
						<button type="submit" id="submit" name="submit" class="btn-submit">SUBMIT</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>