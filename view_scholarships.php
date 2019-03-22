<?php
include 'Admin_config/connection.php';
include 'Admin_controllers/scholarship.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="description" content=""/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Indian Development Foundation. </title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/lsb.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.css"/>
	<link rel="stylesheet" href="css/picto-foundry-emotions.css" />
	<link rel="stylesheet" href="css/picto-foundry-household.css" />
	<link rel="stylesheet" href="css/picto-foundry-shopping-finance.css" />
	<link rel="stylesheet" href="css/picto-foundry-general.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/slit-slider.css" />
	<link href="css/font-awesome.min.css" rel="stylesheet"/>

</head>
	<body>
		    <main style="background: #f8f8f8;">

		    	<a href="index.php" class="card-btn btn" style="background: #0f0f0f;color: #ffffff; margin: 10px; padding: 0px;"><i class="fa fa-home" style="margin: 10px; font-size: 25px;" data-aos="fade-right"></i></a>

		<section class="pricing-part" id="pricing-part">

			<div class="headergroup wow fadeInUp animated" data-wow-duration="1000ms">
				<h2 style="color: #0f0f0f;">
			        <span class="wow fadeInUp animated" data-wow-duration="1000ms">Current Scholarships</span>
			    </h2>
		    </div>
			<!-- Content -->
			<div class="content">
				<div class="container-template">
					<!--Card View-->
					<?php
						include 'Admin_modules/fetch_scholarship.php';
						$i = 0;
						foreach ($scholarship_fetch_all as $key => $value) 
						{ 
							$i += 1;
							?>
							
							<div class="col-lg-3">
			 					<div class="sch-card content-template wow fadeInUp animated" data-wow-duration="1000ms">
			 						<div class="sch-card-img">
			 							<img src="admin/images/scholarship_images/<?php echo $value['sch_img'];?>">
			 						</div>
			 						<h4 class="sch-title"><?php echo $value['name'];?></h4>
			 						
									<p class="sch-desc">
									<?php

										$string = $value['description'];

										if (strlen($string) > 80) 
										{

										    $stringCut = substr($string, 0, 80);
										    $endPoint = strrpos($stringCut, ' ');

										    $string = substr($stringCut, 0, $endPoint);

										    $string .= '... <a style="color: #0000ff" href="'.$value['sch_url'].'" target="_blank">Read More</a>';
										    echo $string;
										}
										else 
										{
											echo $string;
										}

									?>	
										
											
									</p>
			                        <a href="<?php echo $value['sch_url'];?>" target="_blank"><button type="submit" class="card-btn" style="padding: 8px; width: 100%;">APPLY NOW</button></a>
			 					</div>
		                	</div>
						<?php 
						if ($i%4==0) 
						{ ?>
							<div class="clearfix"></div>
						<?php }
					}
					?>
				</div>
			</div>

		</section>


	<footer id="myFooter">
        <div class="second-bar wow fadeInUp text-center animated" data-wow-duration="1000ms">
           <div class="container">
                <div class="col-sm-12 bot">
                    <h2 class="logo"><a href="#header" class="smoothScroll"><img src="images/logo.png"> Indian Development Foundation </a></h2>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			</main>

		</div>
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.js'></script>
		<script type='text/javascript' src='js/jquery.form.js'></script>
		<script type='text/javascript' src='js/jquery.mobile.custom.js'></script>
		<script type='text/javascript' src='js/modernizr.js'></script>
		<script type='text/javascript' src='js/response.js'></script>
		<script type='text/javascript' src='js/swiper.js'></script>
		<script type='text/javascript' src='js/waypoints.js'></script>
		<script type='text/javascript' src='js/jquery.stellar.js'></script>
		<script type='text/javascript' src='js/module.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script src="js/lsb.js"></script>
		<script src="js/jquery.slitslider.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
              new WOW().init();
        </script>
	</body>
</html>