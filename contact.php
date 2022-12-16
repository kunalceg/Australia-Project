<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact | Trans-Plant training</title>
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
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/contact_responsive.css">
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
		<div class="home_background parallax_background parallax-window hidden-xs" data-parallax="scroll" data-image-src="<?php echo $url; ?>images/contact-desk4.jpg" data-speed="0.8"></div>
		<div class="home_background parallax_background parallax-window hidden-xl hidden-lg hidden-sm hidden-md" data-parallax="scroll" data-image-src="<?php echo $url; ?>images/contact-mob1.jpg" data-speed="0.8"></div>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="<?php echo $url; ?>./">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<!-- contact -->
<div class="contact">
		<div class="container">
			<div class="row about_row row-lg-eq-height">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="row">
						<div class="col-lg-12">
							<br><div class="logo_text">Get In Touch</div>
						</div>
						<!--<div class="col-lg-6 col-md-6 col-sm-6">						
						</div>-->
						</div>
						<div class="contact_text">
							<p><p>Trans-Plant Training is recognised for high standards in training, assessment, professional development programs, record management processes and the policies & procedures that govern the operations Trans-Plant Training Pty Ltd.</p></p>




						<div class="col-xl-12">
								<div class="contact_info_container">
									<div class="contact_info_main_title">Contact Us</div>
									<div class="contact_info">
										<div class="contact_info_item">
											<div class="contact_info_title">Address:</div>
											<div class="contact_info_line">PO Box 212 Burwood NSW 1805</div>
										</div>
										<div class="contact_info_item">
											<div class="contact_info_title">Phone:</div>
											<div class="contact_info_line"><a href="tel:1800577301">1800 577 301</a></div>
										</div>
										<div class="contact_info_item">
											<div class="contact_info_title">Email:</div>
											<div class="contact_info_line"><a href="mailto:info@tptraining.edu.au">info@tptraining.edu.au</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>

				<!-- Contact Map -->
				<div class="col-xl-6">
					<div class="contact_form_container">
							<form action="" id="contact_form" class="contact_form" method="post">
								<div>
									<div class="row">
										<div class="col-lg-6 contact_name_col">
											<input type="text" class="contact_input" placeholder="Name" name="cname" id="cname" maxlength="120" tabindex="1" />
										</div>
										<div class="col-lg-6">
											<input type="text" class="contact_input" placeholder="E-mail" name="cemail" id="cemail" maxlength="120" tabindex="2" />
										</div>
									</div>
								</div>
								<div><input type="text" class="contact_input" placeholder="Subject" name="subject" id="subject" maxlength="150" tabindex="3"></div>
								<div><textarea class="contact_input contact_textarea" placeholder="Message" name="cmsg" id="cmsg" tabindex="4"></textarea></div>
                                <div>
									<div class="row">
										<div class="col-lg-6" align="right">
											<img src="captcha.php" />
										</div>
										<div class="col-lg-6">
											<input type="text" class="contact_input" placeholder="Security code" id="scode" name="scode" maxlength="6" tabindex="5">
										</div>
									</div>
								</div>
								<button class="contact_button" id="btnsubmit" tabindex="6"><span id="btn-container">send message</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
							</form>
						</div>
				</div>
			</div>
			<hr/>
			<div class="mb-20  text-center">
				<div class="section_title text-center"><h2>Locations</h2></div>
				</div>
			<div class="row location_row">
				
				<!-- location -->
				<div class="col-lg-4 col-md-6">
					<div class="locationwrap">
						<div class="location_body text-center">
							<div class="button mt-20 mb-20 text-center"><a href="parramatta.php">Parramatta<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
							<p style="text-align: center;">Unit 102, 30 Cowper St.<br>Parramatta, NSW 2150</p>
							<div class="teacher_social">
								<ul>
									<li><a href="https://g.page/trans-plant-training-parramatta?share" target="_blank">View on google map</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- location -->
				<!--<div class="col-lg-4 col-md-6">
					<div class="locationwrap">
						<div class="location_body text-center">
							<div class="button mt-20 mb-20 text-center"><a href="<?php echo $url; ?>liverpool">Liverpool<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
							<p style="text-align: center;">Suite 1 Level 2 224-238 George Street, Liverpool, NSW 2170</p>
							<div class="teacher_social">
								<ul>
									<li><a href="https://goo.gl/maps/rZuxNeZtE4hLMtMX6" target="_blank">View on google map</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->

				<!-- location -->
				<div class="col-lg-4 col-md-6">
					<div class="locationwrap">
						<div class="location_body text-center">
							<div class="button mt-20 mb-20 text-center"><a href="<?php echo $url; ?>burwood">Burwood<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
							<p style="text-align: center;">Shop 9 1-17 Elsie Street Burwood, NSW 2134</p>
							<div class="teacher_social">
								<ul>
									<li><a href="https://g.page/trans-plant-training-burwood?share" target="_blank">View on google map</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- location -->
				<div class="col-lg-4 col-md-6">
					<div class="locationwrap">
						<div class="location_body text-center">
							<div class="button mt-20 mb-20 text-center"><a href="<?php echo $url; ?>penrith">Penrith<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
							<p style="text-align: center;">Suite 1E 458-470 High Street Penrith, NSW 2750</p>
							<div class="teacher_social">
								<ul>
									<li><a href="https://g.page/Trans-Plant-Training?share" target="_blank">View on google map</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- location -->
				<!--<div class="col-lg-4 col-md-6">
					<div class="locationwrap">
						<div class="location_body text-center">
							<div class="button mt-20 mb-20 text-center"><a href="seven-hills.php">Seven Hills<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
							<p style="text-align: center;">5/165 Prospect Hwy Seven Hills, NSW 2147</p>
							<div class="teacher_social">
								<ul>
									<li><a href="https://goo.gl/maps/VHyHcGAv5nwPtH4c8" target="_blank">View on google map</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->

				<!-- location -->
				<div class="col-lg-4 col-md-6">
					<div class="locationwrap">
						<div class="location_body text-center">
							<div class="button mt-20 mb-20 text-center"><a href="<?php echo $url; ?>phillip">Phillip<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
							<p style="text-align: center;">66 Townshend St Phillip, ACT 2606</p>
							<div class="teacher_social">
								<ul>
									<li><a href="https://goo.gl/maps/oz1HdK7vskdTjTK86" target="_blank">View on google map</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- location -->
				<div class="col-lg-4 col-md-6">
					<div class="locationwrap">
						<div class="location_body text-center">
							<div class="button mt-20 mb-20 text-center"><a href="<?php echo $url; ?>sydney_cbd.php">Sydney CBD<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
							<p style="text-align: center;">Level 7, 263 Clarence Street Sydney, NSW 2000</p>
							<div class="teacher_social">
								<ul>
									<li><a href="https://goo.gl/maps/xLW1s1oqRLCj7edc8" target="_blank">View on google map</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>

				
		</div>
	</div>
	
	<div class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3>Call Us Now</h3>
              <h4><a href="tel:1800577301">1800 577 301</a></h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Working Hours</h4>
                <p class="text-white">Feel free to call us</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <ul class="text-white">
					<li>Mon-Fri: 7am-6pm</li>
				</ul>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</div>

<!-- Footer -->
<?php include('components/footer.php'); ?>
	<!-- footer fixed button mobile-->
<div class="d-block d-lg-none hidden-sm hidden-md hidden-lg">
</div>
<!-- footer fixed button mobile end-->
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
		
		$(document).on('click','#btnsubmit',function() {
			if($('#cname').val() == '')
			{
				alert("Please enter your name.");
				$('#cname').focus();
				return false;
			}
			else if($('#cemail').val() == '')
			{
				alert("Please enter your email.");
				$('#cemail').focus();
				return false;
			}
			else if($('#subject').val() == '')
			{
				alert("Please enter your subject.");
				$('#subject').focus();
				return false;
			}
			else if($('#cmsg').val() == '')
			{
				alert("Please enter your message.");
				$('#cmsg').focus();
				return false;
			}
			else if($('#scode').val() == '')
			{
				alert("Please enter security code.");
				$('#scode').focus();
				return false;
			}
			else
			{
				$('#btn-container').html('please wait..');
				$.ajax({
					type: "POST",
					url: 'contact-process.php',
					data: $('#contact_form').serializeArray(),
					dataType: "json",
					success: function(data) {				
						alert(data.msg);
						if(data.e == 1)
						{
							document.location.href = "contact.php";
						}
						$('#btn-container').html('send message');						
					},
					error: function() {
						$('#btn-container').html('send message');
				   }
			   });
				return false;
			}
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