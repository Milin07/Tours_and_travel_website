<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tour Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="style 1.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<!-- header section start -->
	<!-- navbar section start -->
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">Travel.com</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul style="font-size:25px">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="package.php">Packages</a></li>
								<li class="active"><a href="book.php">Book now</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

        <!-- navbar section ends -->

        <aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(img/book.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   					<h1>Book Now</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

        <section class="booking">
    
            <h1 class="heading-title">book your trip</h1>
        
            <form action="book_form.php" method="post" class="book-form">
                
                <div class="flex">
                    <div class="inputBox">
                        <span>name:</span>
                        <input type="text" placeholder="Enter your name" name="name">
                    </div>
        
                     <div class="inputBox">
                        <span>email:</span>
                        <input type="email" placeholder="Enter your email" name="email">
                    </div>
        
                     <div class="inputBox">
                        <span>phone:</span>
                        <input type="number" placeholder="Enter your number" name="number">
                    </div>
        
                     <div class="inputBox">
                        <span>Address:</span>
                        <input type="text" placeholder="Enter your address" name="address">
                    </div>
        
                     <div class="inputBox">
                        <span>Where to:</span>
                        <input type="text" placeholder="Enter place you want to vist" name="location">
                    </div>
        
                     <div class="inputBox">
                        <span>number of passengers:</span>
                        <input type="number" placeholder="Enter the number of passengers" name="guests">
                    </div>
        
                     <div class="inputBox">
                        <span>arrivals:</span>
                        <input type="date" name="arrivals">
                    </div>
        
                    <div class="inputBox">
                        <span>departure:</span>
                        <input type="date" name="leaving">
                    </div>
                </div>
        
                <input type="submit" value="Submit" class="btn" name="send" >
        
            </form>
        
        </section>


        
		<!-- footer ssection starts -->

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Tour Agency</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Quick links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="packages.php">Packages</a></li>
								<li><a href="book.php">Book Now</a></li>
								<li><a href="blog.php">Blog</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Extra links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact Us</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="#">Privacy POlicy</a></li>
								<li><a href="#">Terms of use</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2">
						<h4>Blog Post</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.php">The Ultimate Packing List For Female Travelers</a></li>
							<li><a href="blog.php">How These 5 People Found The Path to Their Dream Trip</a></li>
							<li><a href="blog.php">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li><i class="icon-map"></i>IITE, Indus University<br> Racharda, Ahmedabad 10016</li>
							<li><i class="icon-phone"></i><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><i class="icon-mail5"></i><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><i class="icon-globe"></i><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<span style="color:yellow;font-size: 20px;">| Created by Milin, Prem</span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>blog.php
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- footer section ends -->
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="script 1.js"></script>

	</body>
</html>