<?php
include 'Admin_config/connection.php';
include 'Admin_controllers/scholarship.php';
include 'Admin_controllers/student.php';
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
		<div class="pushWrapper">
		    <!-- Header (shown on mobile only) -->
			<header class="pageHeader">
				<!-- Menu Trigger -->
				<button class="menu-trigger">
					<span class="lines"></span>
				</button>

				<!-- Logo -->
			    <a class="headerLogo smoothScroll" href="#header">
			    	<img src="images/logo.png" style="width: 18%;">
				</a>
			</header>
			
		    <!-- Sidebar -->

			<div class="sidebar">

				<nav class="mainMenu">
					<ul class="menu">
						<li>
							<a class="smoothScroll" href="#header" title="Home"><i class="step icon-home-1 size-24"></i><span class="text">Home</span></a>
						</li>
						<li>
							<a class="smoothScroll" href="#featured-part" title="About"><i class="icon-user-1 size-24"></i><span class="text">About Us</span></a>
						</li>
						<li>
							<a class="smoothScroll" href="#pricing-part" title="Scholarships"><i class="step icon-flag-1 size-24 size"></i><span class="text">Current Scholarships</span></a>
						</li>
						<li>
							<a class="smoothScroll" href="#contact-form" title="Contact"><i class="step icon-envelope-1 size-34"></i><span class="text">Contact</span></a>
						</li>
						<hr>
						<li>
							<a class="smoothScroll" data-toggle="modal" data-target="#exampleModalCenter" title="Login"><i class="icon-user-2 size-24"></i><span class="text">Login</span></a>
						</li>
					</ul>
				</nav>

				<nav class="backToTop">
					<ul class="backToTop-menu">
						<li><a class="smoothScroll" href="#header" title="to the top"><i class="fa fa-chevron-up"></i><span class="text">Back to top</span></a></li>
					</ul>
				</nav>

			</div>
		    <!-- Main -->
		    <main>


		<!--Home Landing Page-->
		<header class="header smoothScroll" id="header"><!--header-start-->
			<div class="container">
    			<figure class="logo wow fadeInUp animated" data-wow-duration="1000ms">
        			<a href="#header"><img src="images/logo.png" alt="Indian Development Foundation" style="width: 100%;"></a>	
       			</figure>	
        		<h1 class="wow fadeInUp animated" data-wow-duration="1000ms">Indian Development Foundation</h1>
        		
            	
    		</div>
		</header>


		<!-- About -->
		<section class="featured-part" id="featured-part">

			<div class="headergroup wow fadeInUp animated" data-wow-duration="1000ms">
				<h2 style="color: #0f0f0f;">
			        <span class="wow fadeInUp animated" data-wow-duration="1000ms">About Us</span>
			    </h2>
		    </div>

			<div class="content">
				<div class="container-template">
					<div class="abt-card content-template wow fadeInUp animated" data-wow-duration="1000ms">
						<div class="container">
							<p>IDF came into existence on 1st April 2005.

							Indian Development Foundation (IDF) has taken its enlarged and new responsibilities spanning health, education and development areas. These are priority health areas of the Govt. and IDF is focusing its efforts in these areas.

							Our Field Staff and volunteers are giving health awareness talks on these diseases to students in Schools, Colleges and Institutions throughout India.  Campaigns in Mass Media are taken up with all enthusiasm.

							Education to the handicapped, the poor and the marginalized children in rural areas, tribal villages and urban slums is a priority concern for IDF.  Education gives empowerment in employment areas, commercial activities, health care and in fact Total Quality of Life.  We are also focusing on Women Empowerment Programmes providing adult education and vocational training to women folks under  - Sarva Sakhi Swabhiman (Project S-3)
							</p>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<div class="relative fullwidth col-xs-12 wow fadeInUp animated" data-wow-duration="1000ms">
			                        <a href="http://www.idf.org.in/we-support.html" target="_blank"><button type="button" id="secondaymit" name="secondaymit" class="form-btn semibold">Our Projects</button></a>
			                    </div>
							</div>
							<div class="col-md-3">
								<div class="relative fullwidth col-xs-12 wow fadeInUp animated" data-wow-duration="1000ms">
			                        <a href="http://www.idf.org.in/list-of-bal-gurukuls.html" target="_blank"><button type="button" id="secondaymit" name="secondaymit" class="form-btn semibold">Bal Gurukuls</button></a>
			                    </div>	
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- About End -->

		<section class="pricing-part" id="pricing-part">

			<div class="headergroup wow fadeInUp animated" data-wow-duration="1000ms">
				<h2 style="color: #0f0f0f;">
			        <span class="wow fadeInUp animated" data-wow-duration="1000ms">Current Scholarships</span>
			    </h2>
		    </div>
			<!-- Content -->
			<div class="content">
				<div class="container-template">
					<div class="row">
					<!--Card View-->
					<?php
						include 'Admin_modules/fetch_scholarship.php';
						foreach ($scholarship_fetch as $key => $value) 
						{ ?>
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
					}
					?>
					</div>
					
                        <div class="col-md-4 col-md-offset-4">
							<div class="relative fullwidth col-xs-12 wow fadeInUp animated" data-wow-duration="1000ms">
		                        <a href="view_scholarships.php" target="_blank"><button type="button" id="secondaymit" name="secondaymit" class="form-btn semibold">View All</button></a>
		                    </div>	
						</div>
					<!--Card View-->
				</div>
			</div>

		</section>



		<!-- View Scholarships-->

				<section class="contact-form" id="contact-form " style="background: #ddd;padding: 50px 0px;">

					<div class="headergroup wow fadeInUp animated" data-wow-duration="1000ms">
						<h2>
					        <span class="wow fadeInUp animated" data-wow-duration="1000ms">Are you interested in organizing Scholarships?</span>
					    </h2>
				    </div>

		<div class="container">
			<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form wow fadeInUp animated" data-wow-duration="1000ms">
                    <!-- Form -->
                    <br />
                        <div class="col-lg-4">
                            <br>
		 					<div class="question-card content-template text-center wow fadeInUp animated" data-wow-duration="1000ms">
		 						<div class="question-card-img">
		 							<img src="images/org.png">
		 						</div>
		 						<h4>ORGANIZATION</h4>
		 						
								<div class="col-xs-12 wow fadeInUp animated" data-wow-duration="1000ms">
			                        <a data-toggle="modal" data-target="#registration_modal"><button type="submit" class="form-btn" style="padding: 10px;">SIGN UP</button></a>
			                    </div>
		 					</div>
                        </div>
                        <div class="col-lg-4">
                            <br>
		 					<div class="question-card content-template text-center wow fadeInUp animated" data-wow-duration="1000ms">
		 						<div class="question-card-img">
		 							<img src="images/cmp.png">
		 						</div>
		 						<h4>COMPANY</h4>
		 						<div class="col-xs-12 wow fadeInUp animated" data-wow-duration="1000ms">
			                        <a data-toggle="modal" data-target="#registration_modal"><button type="submit" class="form-btn" style="padding: 10px;">SIGN UP</button></a>
			                    </div>
		 					</div>
                        </div>
                        <div class="col-lg-4">
                            <br>
		 					<div class="question-card content-template text-center wow fadeInUp animated" data-wow-duration="1000ms">
		 						<div class="question-card-img">
		 							<img src="images/clg.png">
		 						</div>
		 						<h4>COLLEGE</h4>
		 						<div class="col-xs-12 wow fadeInUp animated" data-wow-duration="1000ms">
			                        <a data-toggle="modal" data-target="#registration_modal"><button type="submit" class="form-btn" style="padding: 10px;">SIGN UP</button></a>
			                    </div>
		 					</div>
                        </div>
                        
                        <div class="clear"></div>

                    
                    </div>
                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->

        <br />

		</section>
		

		<!-- CONTACT US -->


		<section class="contact-form" id="contact-form">

					<div class="headergroup wow fadeInUp animated" data-wow-duration="1000ms">
						<h2>
					        <span class="wow fadeInUp animated" data-wow-duration="1000ms">Contact Us</span>
					    </h2>
				    </div>

		<div class="container">
			<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form wow fadeInUp animated" data-wow-duration="1000ms">
                    <!-- Form -->
                    <br />
                        <div class="col-lg-4">
                            <br>
		 					<div class="card content-template wow fadeInUp animated" data-wow-duration="1000ms">
		 						<p><u>IDF (Head Office) MUMBAI</u><br>
		 							L 10 / 3&4 Jal Ratan Deep,
									Bangur Nagar, Goregaon (West),
									Mumbai 400 104.<br><br>
		 							Tel. 022 - 28762008 / 28763008
									Cell. +91 - 9819131388 <br>
		 						Email: idfindia@gmail.com/ info@idf.org.in</p>
		 					</div>
                        </div>
                        <div class="col-lg-4">
                            <br>
		 					<div class="card content-template wow fadeInUp animated" data-wow-duration="1000ms">
		 						<p><u>IDF (Southern Region) CHENNAI</u><br>
		 							6/PP1, School Street,
									Mogappair West,
									Chennai 600 037.<br><br>
		 							Tel. 044 - 26531168
									Cel. +91 - 9840040191<br>
		 						Email: idftamilnadu@gmail.com</p>
		 					</div>
                        </div>
                        <div class="col-lg-4">
                            <br>
		 					<div class="card content-template wow fadeInUp animated" data-wow-duration="1000ms">
		 						<p><u>IDF (Karnataka) BANGALORE</u><br>
		 							# 294, 8th Cross, 7th Main,
									Balaj Layout, Kanakapura Main Road,
									Thalaghattapura Post, Bangalore - 560109<br><br>
		 							Tel. 080 - 29753626
									Cell.  +91 - 9449074443 <br>
		 						Email: idfsouthindia@gmail.com</p>
		 					</div>
                        </div>
                        <div class="col-lg-4">
                            <br>
		 					<div class="card content-template wow fadeInUp animated" data-wow-duration="1000ms">
		 						<p><u>IDF (Northern Region) JAIPUR </u><br>
		 							Sarthak Manav Kushthashram
									3-Dha-1 Jawahar Nagar
									Jaipur 302 004.<br><br>
		 							Cell.   +91 - 8003514069
									Tel. + 91 - 0141 -2655406 <br>
		 						Email: idfjaipur@gmail.com</p>
		 					</div>
                        </div>
                        <div class="col-lg-4">
                            <br>
		 					<div class="card content-template wow fadeInUp animated" data-wow-duration="1000ms">
		 						<p><u>IDF (TS/AP) HYDERABAD</u><br>
		 							Plot No. 432, (Old No. 1-1-742/A)
									Near Narmada Hospital, Gandhi Nagar 
									HYDERABAD 500 080<br><br>
		 							Cell.  +91 -  8978993222<br>
		 						Email: idftsap@gmail.com</p>
		 					</div>
                        </div>
                        <div class="col-lg-4">
                            <br>
		 					<div class="card content-template wow fadeInUp animated" data-wow-duration="1000ms">
		 						<p><u>IDF GOA</u><br>
		 							# 88, Dr. Miranda Road
									Margoa
									GOA  403 601<br><br>
		 							Cell.  +91 -  9823396178   <br>
		 						Email: idfmario@gmail.com </p>
		 					</div>
                        </div>
                        <div class="col-lg-4">
                            <br>
		 					<div class="card content-template wow fadeInUp animated" data-wow-duration="1000ms">
		 						<p><u>IDF DELHI  </u><br>
		 							9A/1, Office No.-09,L.G.F. W.E.A.Channa Market, Karol Bagh
									New Delhi 110 005<br><br>
		 							Cell : +91 - 9910002689 <br>
		 					</div>
                        </div>
                        <div class="col-lg-4">
                        	<br>
		 					<div class="card content-template wow fadeInUp animated" data-wow-duration="1000ms">
		 						<p><u>
                            info@idf.org.in</u><br>
		 					</div>
                        </div>
                        <div class="col-lg-4">
                            <br>
		 					<div class="card content-template wow fadeInUp animated" data-wow-duration="1000ms">
		 						<p><u>IDF PUNE</u><br>
		 							306,  Fire Station Building, Third floor,
									Amanora Park Town, Hadapsar,
									Pune 411028​<br><br>
		 							Cell : 9819536945 <br>
		 					</div>
                        </div>
                        <div class="clear"></div>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>
                    </div>
                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->

        <br />

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

<!--Modal Student-->
	<div class="modal fade" id="exampleModalCenter" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4" style="font-size: 25px; margin: 15px 0;">Login if you are a Student</h5>
                        <form action="Admin_modules/add_quotation" method="post">
                            <div class="form-group">

                                <div class="wrap">
                                  <label class="mb-2">Username</label>
                                  <input type="text" class="form-control" name="username" id="name" required>
                                </div>
                                
                                <div class="wrap">
                                  <label class="mb-2">Password</label>
                                  <input type="password" class="form-control" name="pwd" id="pwd" required>
                                </div>

                            </div>
                            <button type="submit" name="submit" class="form-btn mb-4">Send&nbsp;&nbsp;<i class="fa fa-send"></i></button>
                            <a data-toggle="modal" data-target="#student_reg_modal" title="StudentReg" style="color: #0000ff;">Not a User? Signup.</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal Student-->

	<!--Modal Student Reg-->
	<div class="modal fade" id="student_reg_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4" style="font-size: 25px; margin: 15px 0;">Student Registration</h5>
                        <form action="Admin_modules/add_student.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">

                                <div class="wrap">
                                  <label class="mb-2">Name</label>
                                  <input type="text" class="form-control" name="std_name" id="std_name" required>
                                </div>
                                
                                <div class="wrap">
                                  <label class="mb-2">Mobile Number</label>
                                  <input type="text" class="form-control" name="std_mobile_no" id="std_mobile_no" maxlength="10" required>
                                </div>
								
                                <div class="wrap">
                                  <label class="mb-2">Email</label>
                                  <input type="text" class="form-control" name="std_email" id="std_email" required>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Institution</label>
                                  <input type="text" class="form-control" name="std_institution" id="std_institution" required>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Age</label>
                                  <input type="text" class="form-control" name="std_age" id="std_age" required>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Family Income</label>
                                  <input type="text" class="form-control" name="family_income" id="family_income" required>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Highest Qualification</label>
                                  <input type="text" class="form-control" name="highest_q" id="highest_q" required>
                                </div>
								
								<div class="wrap">
                                  <label class="mb-2">Highest Qualification Proof</label>
                                  <input type="file" class="form-control" name="highest_q_proof" id="highest_q_proof" required>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Set Password</label>
                                  <input type="password" class="form-control" name="stud_pass" id="stud_pass" required>
                                </div>


                            </div>
                            <button type="submit" name="student_reg" class="form-btn mb-4">Register&nbsp;&nbsp;<i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal Student-->

    <!-- Modal Org Reg -->
    <div class="modal fade" id="registration_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4" style="font-size: 25px; margin: 15px 0;">Institution Registration</h5>
                        <form action="Admin_modules/add_institute.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">

                                <div class="wrap">
                                  <label class="mb-2">Name</label>
                                  <input type="text" class="form-control" name="org_name" id="org_name" required>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Institution Type</label>
                                  <select name="org_type" id="org_type" class="form-control mb-2">
                                    <option value="Organisation">Organisation</option>
                                    <option value="Company">Company</option>
                                    <option value="College">College</option>
                                  </select>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Email</label>
                                  <input type="text" class="form-control" name="org_email" id="org_email" required>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Website</label>
                                  <input type="text" class="form-control" name="org_website" id="org_website" required>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Contact</label>
                                  <input type="text" class="form-control" name="org_contact" maxlength="10" id="org_contact" required>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Document</label>
                                  <input type="file" class="form-control" name="org_doc" id="org_doc" required>
                                </div>

                                <div class="wrap">
                                  <label class="mb-2">Set Password</label>
                                  <input type="password" class="form-control" name="org_pass" id="org_pass" required>
                                </div>

                            </div>
                            <button type="submit" name="org_submit" class="form-btn mb-4">Register&nbsp;&nbsp;<i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Org Reg -->

 <!--Chatbot-->
	<div class="chatbot" id="chatbot">
    <!--Chatbot Header-->
		<div class="bot-header">
			<a onclick="expand()">Chat Now<i id="icon" class="fa fa-chevron-up" style="float: right; color: #00ff00;"></i></a>
		</div>
    <!--Chatbot Header-->

    <!--Chatbot Main Screen-->
		<div class="bot-screen">
			<form class="startup-form text-center" id="form">
        <p>Please enter the following details to continue</p>
        <input type="text" name="fname" id="fname" placeholder="Enter your Name">  
        <input type="text" name="mob" id="mob" placeholder="Enter your Mobile No.">
        <input type="text" name="mail" id="mail" placeholder="Enter your E-Mail"><br>
        <input type="button" name="submit" id="submit" value="Submit"> 
      </form>

      <!--Chatbot First Message-->
      <div class="first" id="first">
        Hello! <span id="apn_name"></span>. How may we help you?<span class="right-msg"></span><br><br>
      </div>

      <div class="cards col-lg-12 col-md-12 col-sm-8" id="cards">
        <div class="row">
          <div class="help-card col-lg-5 col-md-5 col-sm-2">
            <input type="radio" name="1-help" id="Merit-Based Scholarship">
            <label for="Merit-Based Scholarship">Merit<br>Scholarship</label>
          </div>
          <div class="help-card col-lg-5 col-lg-offset-2 col-md-5 col-md-offset-2 col-sm-2">
            <input type="radio" name="1-help" id="Income-Based Scholarship">
            <label for="Income-Based Scholarship">Income-based<br>Scholarship</label>
          </div>
          <div class="help-card col-lg-5 col-md-5 col-sm-2">
            <input type="radio" name="1-help" id="Exam-Based Scholarship">
            <label for="Exam-Based Scholarship">Exam<br>Scholarship</label>
          </div>
        </div>
      </div>

      		
    <!--Chatbot First Message-->

    <!--Chatbot User Message-->
      <div class="user" id="user">
        <span class="left-msg"></span><span id="card_name"></span>
      </div>

      <img class="fake" src="images/loading_dots.gif" id="fake"><span class="right-msg"></span>
      
    <!--Chatbot User Message-->

    </div>
    <!--Chatbot Main Screen-->

    <!--Chatbot Message Send-->
    <div class="bot-field">
      <div class="row col-md-12 wrap">
        <div class="col-md-8">
          <input type="text" name="message" id="message" placeholder="Enter Your Message">
        </div>
        <div class="col-md-4">
          <input type="submit" name="send" id="send" value="Send">
        </div>
      </div>
    </div>
    <!--Chatbot Message Send-->

  </div>
   <!--Chatbot-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			</main>


		</div>

		<script type='text/javascript' src='js/jquery.min.js'></script>
		<script type='text/javascript' src='js/chatbot.js'></script>
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
