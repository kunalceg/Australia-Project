<!DOCTYPE html>
<html lang="en">
<head>
<title>Barista Course Calendar Sydney | Trans-Plant training</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Trans-Plant training project">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="icon" href="favicon.png" sizes="32x32" />
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo $url; ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>plugins/OwlCarousel2-2.2.1/animate.css">
<link href="<?php echo $url; ?>plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/about.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>styles/mystyle.css">

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
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo $url; ?>images/about.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Barista Course Calendar</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="<?php echo $url; ?>./">Home</a></li>																		<li><a href="<?php echo $url; ?>all-courses">Courses</a></li>																		<li><a href="<?php echo $url; ?>barista-course">Barista Course</a></li>
									<li>Barista Course Calendar</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


		<!-- calendar -->

	<div class="calendar-wrap">
		<div class="container">
			<div class="">
				<div name="COURSE_LIST" data-org="2126265328226235" data-campus="" data-host="booking.trans-planttraining.com.au">
				<iframe style="width: 100%; border: 0px; outline: 0px; padding: 0px; margin: 0px; height: 1660px;" data-src="" class=" lazyloaded" src="" loading="lazy"></iframe>
				</div>

			</div>

		</div>
	</div>
	<!-- Footer -->
	<?php include('components/footer.php'); ?>	
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