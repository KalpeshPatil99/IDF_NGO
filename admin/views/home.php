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
include '../Admin_modules/home_call.php';
?>

<div class="col-lg-12 col-md-12" style="overflow-x:hidden; width: 80%; margin: auto;">

		<div class="col-lg-4 col-lg-offset-1 stats_card" style="margin-top: 5%;">
			<h4>Total Scholarships</h4>
			<span class="fa fa-calendar" style="font-size: 50px; margin-top: 20px; color: #002066;"></span>
			<div class="count">
				<span><?php echo $home_fetch[0];?></span>
			</div>
		</div>

		<div class="col-lg-4 col-lg-offset-1 stats_card" style="margin-top: 5%;">
			<h4>Total Organizations</h4>
			<span class="fa fa-file-text-o" style="font-size: 50px; margin-top: 20px; color: #002066;"></span>
			<div class="count">
				<span><?php echo $home_fetch[1];?></span>
			</div>
		</div>

		<div class="col-lg-4 col-lg-offset-1 stats_card" style="margin-top: 5%;">
			<h4>Total Students</h4>
			<span class="fa fa-picture-o" style="font-size: 50px; margin-top: 20px; color: #002066;"></span>
			<div class="count">
				<span><?php echo $home_fetch[2];?></span>
			</div>
		</div>
</div>

		
<?php include 'footer.php';
?>