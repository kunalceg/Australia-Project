<!DOCTYPE html>
<html lang="en">
<head>
<title>All Courses | Trans-Plant training  Sydney</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Trans-Plant training project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.png" sizes="32x32" />
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo $url; ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>plugins/OwlCarousel2-2.2.1/animate.css">
<link href="<?php echo $url; ?>plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/courses.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/courses_responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/mystyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/hiddenclass.css">

<!-- Fontawesome kit's code here -->
<script src="https://kit.fontawesome.com/bec8fd6a45.js"></script>

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<?php include('components/top-header.php'); ?>
		<!-- Header Content -->
		<?php include('components/menu.php'); ?>			
	</header>
		<?php include('components/mob-menu.php'); ?>
	<!-- Breadcrumb banner -->
	<div class="home breadcrumb-banner">
		<!-- Background image artist https://unsplash.com/@thepootphotographer -->
		<div class="home_background parallax_background parallax-window hidden-xs" data-parallax="scroll" data-image-src="<?php echo $url; ?>images/allcourses-desk3.jpg" data-speed="0.8"></div>
              <div class="home_background parallax_background parallax-window hidden-xl hidden-lg hidden-sm hidden-md" data-parallax="scroll" data-image-src="<?php echo $url; ?>images/allcourses-mob2.jpg" data-speed="0.8"></div>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">All Courses</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="<?php echo $url; ?>./">Home</a></li>
									<li>All Courses</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


		<!-- Courses -->

	<div class="courses">
		<div class="container">

			<!-- Course Search -->
			<div class="row">
				<div class="col-lg-12 milestone_col">					
										<div class="milestone text-centerx">						
										<div class="milestone_text">Search courses by category</div>					
										</div>					
										<form action="#" class="course_search_form search-cat-inner">							
											<div class="course-search-div">								
												<div class="dd">									
													<div class="dd-a"><span>All Courses</span> 
													<div class="droparrow"><i class="fa fa-caret-down"></i></div>
													</div>									
													<input type="checkbox">									
													<div class="dd-c">									  
														<ul>										
															<li><a href="<?php echo $url; ?>short-courses"><span>Short Courses</span></a></li>																				
															<li><a href="<?php echo $url; ?>traffic-control"><span>Traffic Control Courses</span></a></li>																				
															<li><a href="<?php echo $url; ?>construction-courses"><span>Construction Courses</span></a></li>																				
															<li><a href="<?php echo $url; ?>hospitality"><span>Hospitality Courses</span></a></li>																				
															<li><a href="<?php echo $url; ?>first-aid-courses"><span>First Aid Courses</span></a></li>										
															<li><a href="<?php echo $url; ?>full-qualification-courses"><span>Full Qualification Courses</span></a></li>										
															<li><a href="<?php echo $url; ?>government-funded-courses"><span>Government Funded Courses</span></a></li>										
															<li><a href="<?php echo $url; ?>all-courses"><span>All Courses</span></a></li>									  
														</ul>									
													</div>								
												</div>							
											</div>						
										</form>				
									</div>
				<!--<div class="col-lg-6 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/location.png" alt=""></div>
						<div class="milestone_text">Course by</div>
						<div class="milestone_heading">LOCATION</div>
					</div>
					<form action="#" class="course_search_form search-loc">
						<div class="course-search-div">
								<div class="dd">
									<div class="dd-a"><span>Locations</span> <div class="droparrow"><i class="fa fa-caret-down"></i></div></div>
									<input type="checkbox">
									<div class="dd-c">
									  <ul>
										<li><a href="parramatta.php"><span>Parramatta</span></a></li>										<li><a href="liverpool.php"><span>Liverpool</span></a></li>										<li><a href="burwood.php"><span>Burwood</span></a></li>										<li><a href="penrith.php"><span>Penrith</span></a></li>										<li><a href="seven-hills.php"><span>Seven Hills</span></a></li>										<li><a href="phillip.php"><span>Phillip</span></a></li>										<li><a href="contact.php"><span>All Locations</span></a></li>
									  </ul>
									</div>
								</div>
							</div>
					</form>
				</div>-->

			</div>


			<div class="row courses_row">
				
				

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="traffic-control">
									<div class="course_image"><img src="<?php echo $url; ?>images/course_2.jpg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>traffic-control">Traffic Control</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>1</span> Day</div>
											<div class="course_price ml-auto">Price: <del>$300</del> <span>$210</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>traffic-controller-course">Traffic Controller Course <br/> (Blue Card)</a></h1></div>
										<div class="course_text">Trans-Plant Training is a SafeWork NSW approved training provider for Traffic control training. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>traffic-controller-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>traffic-controller-course-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>


				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="traffic-control">
									<div class="course_image"><img src="<?php echo $url; ?>images/course_3.jpg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>traffic-control">Traffic Control</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>1</span> day</div>
											<div class="course_price ml-auto">Price: <del>$300</del> <span>$210</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>traffic-management-implementer-course">Traffic Management Implementer Course <br/> (Yellow Card)</a></h1></div>
										<div class="course_text">Traffic Management Implementer course addresses the skills and knowledge for personnel responsible for traffic management on a site to implement a work zone traffic management plan in the immediate vicinity of a workplace. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>traffic-management-implementer-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>traffic-management-implementer-course-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="traffic-control">
									<div class="course_image"><img src="<?php echo $url; ?>images/course_4.jpg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>traffic-control">Traffic Control</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>2</span> Days</div>
											<div class="course_price ml-auto">Price: <del>$1170</del> <span>$700</span></div>
										</div>
										<div class="course_title"><h1>										<a href="<?php echo $url; ?>prepare-work-zone-traffic-management-plan-course">Prepare Work Zone Traffic Management Plan Course  <br/> (Red Card)</a></h1></div>
										<div class="course_text">Traffic Management Designer course provides the skills and knowledge required for individuals responsible for developing traffic management plans and traffic guidance schemes.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>prepare-work-zone-traffic-management-plan-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>prepare-work-zone-traffic-management-plan-course-calendar.php">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="traffic-control">
									<div class="course_image"><img src="<?php echo $url; ?>images/AdobeStock_49929441-1-scaled-e1648533198403-768x511.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>traffic-control">Traffic Control</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>3</span> Days</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$420</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>traffic-control-combo">Traffic Control Combo</a></h1></div>
										<div class="course_text">Trans-Plant Training is a SafeWork NSW approved training provider for Traffic control training.</div>	<div class="course_text">Traffic Control Combo course is a combination of the Traffic Controller and Traffic Management Implementer course allowing you to set up and prepare a site & use a stop / slow bat.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>traffic-control-combo">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>traffic-control-combo-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="hopitality">
									<div class="course_image"><img src="<?php echo $url; ?>images/Portrait-of-smiling-cafe-manager-standing-in-coffee-shop-with-employee-in-background.webp" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>hospitality">Hopitality</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>8</span> Hours</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$150</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>food-safety-supervisor-course">Food Safety Supervisor Course</a></h1></div>
										<div class="course_text">Food Safety Supervisor course (also known as FSS course) is designed to provide you with all the skills and knowledge needed to be a successful Food Safety Supervisor. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>food-safety-supervisor-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>food-safety-supervisor-course-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="hopitality">
									<div class="course_image"><img src="<?php echo $url; ?>images/food-hygiene-course-scaled-e1645416143221.webp" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>hospitality">Hopitality</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>4</span> Hours</div>
											<div class="course_price ml-auto">Price: <del></del> <span>Coming Soon</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>barista-course">Barista Course</a></h1></div>
										<div class="course_text">This course is designed to give you the necessary skills and knowledge required to serve espresso coffee beverages using commercial espresso machines and grinders.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>barista-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="hopitality">
									<div class="course_image"><img src="<?php echo $url; ?>images/Service-Serving-Pouring-Wine-in-shiny-glasses-in-bar-restaurant.webp" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>hospitality">Hopitality</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>6</span> Hours</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$150</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>provide-responsible-service-of-alcohol-rsa-course">RSA Course</a></h1></div>
										<div class="course_text">Responsible Service of Alcohol training is designed to provide participants with the skills and knowledge necessary to contribute to a safe, enjoyable environment in licensed premises where alcohol is served and sold. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>provide-responsible-service-of-alcohol-rsa-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>provide-responsible-service-of-alcohol-rsa-course-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="hopitality">
									<div class="course_image"><img src="<?php echo $url; ?>images/The-croupier-holds-a-roulette-ball-in-a-casino-in-his-hand.webp" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>hospitality">Hopitality</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>6</span> Hours</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$150</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>rcg-course">RCG  Course</a></h1></div>
										<div class="course_text">Responsible Service of Gambling training is designed to quality gambling industry employees to promote safety in an establishment where gambling occurs. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>rcg-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>rcg-course-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="hopitality">
									<div class="course_image"><img src="<?php echo $url; ?>images/food-hygiene-course-scaled-e1645416143221.webp" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>hospitality">Hopitality</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>4</span> Hours</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$100</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>food-hygiene-course">Food Hygiene Course</a></h1></div>
										<div class="course_text">This entry level Food Hygiene course will allow staff gain understanding of food hygiene practices.  It is an excellent entry level course for all staff handling food.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>food-hygiene-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/white-card-course-scaled-e1645406728961.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>7</span> Hours</div>
											<div class="course_price ml-auto">Price: <del>$110</del> <span>$90</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>white-card">White Card</a></h1></div>
										<div class="course_text">Trans-Plant Training is a SafeWork NSW approved training provider for White Card training.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>white-card">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>white-card-course-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/elevating-work-yellow-card-scaled-e1645406887597.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>1</span> Day</div>
											<div class="course_price ml-auto">Price: <del>$300</del> <span>$250</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>riihan301e-operate-elevate-work-platform-yellow-card-under-11m">RIIHAN301E - Operate Elevate Work Platform (Yellow Card – Under 11m)</a></h1></div>
										<div class="course_text">This course is designed to meet the requirements for earning an EWPA Yellow Card.  It follows the RIIHAN301E – Operate Elevating Work Platform unit of competency. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>riihan301e-operate-elevate-work-platform-yellow-card-under-11m">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/truck-mounted-attenuator-course-01-scaled.jpg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>8</span> Hours</div>
											<div class="course_price ml-auto">Price: <del>$650</del> <span>$485</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>riirtm301e-operate-truck-or-trailer-mounted-attenuators-tma">RIIRTM301E - Operate Truck or Trailer Mounted Attenuators</a></h1></div>
										<div class="course_text">This course is customised to your needs and equips you with the skills and knowledge required to operate a truck or trailer mounted attenuator when carrying out traffic management activities in civil construction.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>riirtm301e-operate-truck-or-trailer-mounted-attenuators-tma">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/dangerous-goods-scaled-e1645406021874.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>2</span> Day</div>
											<div class="course_price ml-auto">Price: <del>$430</del> <span>$380</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>dangerous-goods-course">Dangerous Goods Course</a></h1></div>
										<div class="course_text">This course is Mandatory for a person who is required by law to apply for or renew a Dangerous Goods Driver’s License.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>dangerous-goods-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>dangerous-goods-course-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="first-aid">
									<div class="course_image"><img src="<?php echo $url; ?>images/first-aid-training-course-scaled.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>first-aid-courses">First Aid</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>1</span> Day</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$90</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>first-aid-course">First Aid Course</a></h1></div>
										<div class="course_text">This course describes skills and knowledge required to provide a first aid response to a casualty in line with first aid guidelines determined by the Australian Resuscitation Council and other Australian national peak clinical bodies. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>first-aid-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>first-aid-course-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="first-aid">
									<div class="course_image"><img src="<?php echo $url; ?>images/childcare-first-aid-course-scaled-e1645412701922.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>first-aid-courses">First Aid</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>1</span> Day</div>
											<div class="course_price ml-auto">Price: <del>$170</del> <span>$140</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>childcare-first-aid-course">Childcare First Aid Course</a></h1></div>
										<div class="course_text">This Childcare First Aid course has been designed for the early childhood education industry.  It covers the training requirements for first aid, asthma, anaphylaxis and legislation surrounding the early education industry. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>childcare-first-aid-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>childcare-first-aid-course-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="first-aid">
									<div class="course_image"><img src="<?php echo $url; ?>images/cpr-training-course-scaled-e1645413499550.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>first-aid-courses">First Aid</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>4</span> Hours</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$75</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>cpr-course">CPR Course</a></h1></div>
										<div class="course_text">This course describes the skills and knowledge required to provide Cardio Pulmonary Resuscitation. It is suitable for people who need to conduct annual refresher training, maintain workplace skills or those who simply want to be equipped with a critical lifesaving skill.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>cpr-course">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>cpr-course-calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="full-qualification">
									<div class="course_image"><img src="<?php echo $url; ?>images/cert-two-civil-construction-scaled-e1645419425396.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>full-qualification-courses">Full qualification</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>26</span> Weeks</div>
											<div class="course_price ml-auto">Price: <del></del> <span>Coming Soon</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>rii20720-certificate-ii-civil-construction">RII20720 - Certificate II in Civil Construction </a></h1></div>
										<div class="course_text">The Civil Construction program provides existing building and construction workers with training that focuses on the safety requirements of the industry.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>rii20720-certificate-ii-civil-construction">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="full-qualification">
									<div class="course_image"><img src="<?php echo $url; ?>images/cert-three-civil-construction-1-scaled-e1645420796706.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>full-qualification-courses">Full qualification</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>52</span> Weeks</div>
											<div class="course_price ml-auto">Price: <del></del> <span>Coming Soon</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>rii30820-certificate-iii-in-civil-construction-plant-operations">RII30820 - Certificate III in Civil Construction Plant Operations </a></h1></div>
										<div class="course_text">This qualification reflects the role of a skilled operator working with civil construction plant.  The individual may provide theoretical advice and support a team. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>rii30820-certificate-iii-in-civil-construction-plant-operations">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>contact">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="govt-funded">
									<div class="course_image"><img src="<?php echo $url; ?>images/nsw_course-01-1-scaled.jpg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>government-funded-courses">Government Funded Courses</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>7</span> Hours</div>
											<div class="course_price ml-auto">Price: <del>$110</del> <span>$90</span></div>
										</div>
										<div class="course_title"><h1><a href="https://www.trans-planttraining.com.au/government-funded-courses">NSW Smart and Skilled Courses</a></h1></div>
										<div class="course_text">Trans-Plant Training is an approved provider for Smart and Skilled Training subsidised by the NSW Government. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="https://www.trans-planttraining.com.au/government-funded-courses">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>contact">Contact Us</a></div>
										</div>
									</div>
								</div>
				</div>



				


			</div>
			
			<div class="row mb-20">
				<div class="col-lg-10 offset-lg-1">
					<div class="section_title text-center"><h2>Group Training course</h2></div>
				</div>
			</div>


			<div class="row courses_row">
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/boom-type-work-platform-1-scaled-e1645406600309.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>3</span> Day</div>
											<div class="course_price ml-auto">Price: <del>$600</del> <span>$539</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>tlilic0005-licence-to-operate-a-boom-type-elevating-work-platform-boom-length-11-meters">TLILIC0005 - Licence to Operate a Boom-Type Elevating Work Platform</a></h1></div>
										<div class="course_text">This course provides all the necessary skills and knowledge required to safely operate a boom-type elevating platform EWP where the boom’s length is 11 meters or more, following all relevant legislative requirements. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>tlilic0005-licence-to-operate-a-boom-type-elevating-work-platform-boom-length-11-meters">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>contact">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/forklift-course-scaled-e1645410844699.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>3</span> Day</div>
											<div class="course_price ml-auto">Price: <del>$400</del> <span>$379</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>forklift-course">Forklift Course</a></h1></div>
										<div class="course_text">This course leads to the LF Class High-Risk Work (HRW) Forklift Licence as defined in the National Standards for “Licensing Persons Performing High-Risk Work. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>forklift-course">Read More</a></div><div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>contact">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/conduct-roller-operations-scaled-e1645406174263.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>3</span> Day</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$700</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>riimpo317f-conduct-roller-operations">RIIMPO317F - Conduct Roller Operations</a></h1></div>
										<div class="course_text">This course is designed for unqualified skilled workers who require the Conduct roller operations.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>riimpo317f-conduct-roller-operations">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<!--<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/tip-truck-operations-scaled-e1645406241769.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>3</span> Day</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$600</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>riiveh104e-conduct-tip-truck-operations">RIIVEh104E - Conduct Tip Truck Operations</a></h1></div>
										<div class="course_text">This course describes the skills and knowledge required to conduct tip truck operations in the resources and infrastructure industries. </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>riiveh104e-conduct-tip-truck-operations">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>-->
				
				<!-- Course -->
				<!--<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/tractor-operations-scaled-e1645406148505.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>3</span> Day</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$600</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>riimpo315e-conduct-tractor-operations">RIIMPO315E - Conduct Tractor Operations</a></h1></div>
										<div class="course_text">This course describes the skills and knowledge required to operate tractors and use attachments.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>riimpo315e-conduct-tractor-operations">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>-->
				
				<!-- Course -->
				<!--<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/skid-steer-loader-operations-scaled-e1645406303502.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>3</span> Day</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$900</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>riimpo318f-conduct-civil-construction-skid-steer-loader-operations">RIIMPO318F - Conduct Civil Construction Skid Steer Loader Operations</a></h1></div>
										<div class="course_text">Skid Steer (Bobcat) Operations course is suitable for those who wish to operate a skid steer within the Resources, Construction and Infrastructure industries.  </div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>riimpo318f-conduct-civil-construction-skid-steer-loader-operations">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>-->
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/excavator-operations-scaled-e1645406275185.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>3</span> Day</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$1200</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>riimpo320f-conduct-civil-construction-excavator-operations">RIIMPO320F - Conduct Civil Construction Excavator Operations</a></h1></div>
										<div class="course_text">This course is designed to provide participants with the skills and knowledge to conduct excavator operations safely.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>riimpo320f-conduct-civil-construction-excavator-operations">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course" id="construction">
									<div class="course_image"><img src="<?php echo $url; ?>images/front-end-loader-operations-scaled-e1645423233865.jpeg" alt=""></div>
									<div class="course_body">
										<div class="course_header d-flex flex-row align-items-center justify-content-start">
											<div class="course_tag"><a href="<?php echo $url; ?>construction-courses">Construction</a></div>
										</div>
										<div class="mt-20 d-flex align-items-center justify-content-start">
											<div class="featured_sales ml-autox"><i class="fa fa-hourglass-half"></i> <span>3</span> Day</div>
											<div class="course_price ml-auto">Price: <del></del> <span>$1200</span></div>
										</div>
										<div class="course_title"><h1><a href="<?php echo $url; ?>riimpo321f-conduct-civil-construction-wheeled-front-end-loader-operations">RIIMPO321F - Conduct Civil Construction Wheeled Front End Loader Operations</a></h1></div>
										<div class="course_text">This course is designed for those who wish to operate a wheeled front end loader.</div>
										<div class="courses-buttons-wrap">
										<div class="button readmore_button text-center mt-20"><a href="<?php echo $url; ?>riimpo321f-conduct-civil-construction-wheeled-front-end-loader-operations">Read More</a></div>
										<div class="button bookcourse_button text-center mt-20"><a href="<?php echo $url; ?>calendar">Book Now</a></div>
										</div>
									</div>
								</div>
				</div>
				
			</div>


		</div>
	</div>
	<!-- Footer -->
	<?php include('components/footer.php'); ?>
	<!-- footer fixed button mobile-->
<div class="d-block d-lg-none hidden-sm hidden-md hidden-lg">
<div class="fixed-b">
    <a href="<?php echo $url; ?>calendar" class="btn btn-dark booknow-mob">Book Now</a>
</div>
</div>
</div>
<script src="<?php echo $url; ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo $url; ?>styles/bootstrap4/popper.js"></script>
<script src="<?php echo $url; ?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo $url; ?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo $url; ?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo $url; ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo $url; ?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo $url; ?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo $url; ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo $url; ?>plugins/easing/easing.js"></script>
<script src="<?php echo $url; ?>plugins/video-js/video.min.js"></script>
<script src="<?php echo $url; ?>plugins/video-js/Youtube.min.js"></script>
<script src="<?php echo $url; ?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo $url; ?>js/custom.js"></script>
<script>
(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);

</script>
<script type="text/javascript">
jQuery(function() {

	jQuery("ul.main_nav li a").filter(function(){		

		return this.href == location.href.replace(/#.*/, "");

	}).closest('li').addClass("active");

});
</script>
</body>
</html>