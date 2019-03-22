<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['user_id'])) {
	header('Location: index.php');
}
include 'header_open.php';
include 'header_close.php';
include 'nav.php';
include 'sidebar.php';
?>

<!--Sponser ID-->
<div class="col-lg-9 col-md-8" style="overflow-y: scroll; width: 80%; margin: auto;">
	<form action="../Admin_modules/add_scholarship.php" method="post" enctype="multipart/form-data">
		<div class="wrap">
			<p class="head">Scholarship Image</p>
			<input type="file" name="sch_img" required>
		</div>
		<div class="wrap">
			<p class="head">Scholarship URL</p>
			<input type="text" name="sch_url">
		</div>
		<div class="wrap">
			<p class="head">Scholarship Title</p>
			<input type="text" name="sch_title" required>
		</div>
		<div class="wrap">
			<p class="head">Scholarship Description</p>
			<pre style="background: #ffffff; border: none;"><textarea type="text" name="sch_desc" rows="5" required></textarea></pre>
		</div>
		<div class="wrap">
			<p class="head">Scholarship Provider</p>
			<input type="text" name="sch_provider" required>
		</div>
		<div class="wrap">
			<p class="head">Provider Type</p>
			<input type="text" name="provider_type" required>
		</div>
		<div class="wrap">
			<p class="head">Scholarship Type</p>
			<input type="text" name="sch_type" required>
		</div>
		<div class="wrap">
			<p class="head">Scholarship Reward</p>
			<input type="text" name="sch_reward" required>
		</div>
		<div class="wrap">
			<button name="submit" type="submit" class="btn-custom">SUBMIT</button>
		</div>
	</form>
</div>
<!--Sponser ID-->

<?php include 'footer.php';
?>