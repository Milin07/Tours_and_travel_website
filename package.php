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
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
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
                                <li class="active"><a href="package.php">Packages</a></li>
                                <li><a href="book.php">Book now</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(img/pack.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">

                                        <h1>Packages</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <!-- package section start -->

    <section class="packages">

        <h1 class="heading-title">top destination</h1>

        <!-- button -->
        <label for="redirect" class="centered">
            <h2>Select state to travel:</h2>
        </label>

        <select id="redirect" class="centered">
            <option value="default">Select an option</option>
            <option value="andhra.php">Andhra Pradesh</option>
            <option value="arunachal.php">Arunachal Pradesh</option>
            <option value="assam.php">Assam</option>
            <option value="bihar.php">Bihar</option>
            <option value="chattisgarh.php">Chattisgarh</option>
            <option value="goa.php">Goa</option>
            <option value="gujarat.php">Gujarat</option>
            <option value="haryana.php">Haryana</option>
            <option value="himachal.php">Himachal Pradesh</option>
            <option value="jharkhand.php">Jharkhand</option>
            <option value="karnataka.php">Karnataka</option>
            <option value="kerala.php">kerela</option>
            <option value="madhaya.php">Madhaya Pradesh</option>
            <option value="maharashtra.php">Maharashtra</option>
            <option value="manipur.php">Manipur</option>
            <option value="meghalaya.php">Meghalaya</option>
            <option value="mizoram.php">Mizoram</option>
            <option value="nagaland.php">Nagaland</option>
            <option value="odisha.php">Odisha</option>
            <option value="punjab.php">Punjab</option>
            <option value="rajasthan.php">Rajasthan</option>
            <option value="sikkim.php">Sikkim</option>
            <option value="tamilnadu.php">Tamil Nadu</option>
            <option value="telangana.php">Telangana</option>
            <option value="tripura.php">Tripura</option>
            <option value="uttarakhand.php">Uttarakhand</option>
            <option value="uttarpradesh.php">Uttar Pradesh</option>
            <option value="westbengal.php">West Bengal</option>
        </select>
        <!-- button ends -->
        
        <div class="cartstart">
            <div class="headercart">
                <p class="logo">Packages Cart</p>
                <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
                
            </div>
              <div class="containercart">
                <div id="root"></div>
                  <div class="sidebar">
                    <div class="headcart"><p>My Cart</p></div>
                      
                      <ul id="cartItemsList">
                    <!-- This list will display the items in the cart -->
                </ul>
                
                        <div class="footcart">
                          <h3>Total</h3>
                          <h2 id="total"> Rs 0.00</h2>
                        </div>
                        
            
                    </div>
              </div>
              <button id="checkout-button" class="btncart-check" onclick="book.php">Checkout</button>
            </div>
            
            
            <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="img/pack 1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kerala</h3>
                    <p class="price">Rs. 7000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="7000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/pack 2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Jammu & kashmir</h3>
                    <p class="price">Rs. 10000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="10000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/redfort.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Delhi</h3>
                    <p class="price">Rs. 5000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="5000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/goi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Mumbai</h3>
                    <p class="price">Rs. 4000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="4000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/tajmahal.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Agra</h3>
                    <p class="price">Rs. 8000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="8000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/goa.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Goa</h3>
                    <p class="price">Rs. 6000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="6000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/hawamahal.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Jaipur</h3>
                    <p class="price">Rs. 4500</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="4500">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/jaisalmer.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Jaisalmer</h3>
                    <p class="price">Rs. 6500</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="6500">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/maldives.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Maldives</h3>
                    <p class="price">Rs. 150000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="150000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/manali.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Manali</h3>
                    <p class="price">Rs. 12000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="12000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/thailand.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Thailand</h3>
                    <p class="price">Rs. 20000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="200000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/ooty.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ooty</h3>
                    <p class="price">Rs. 15000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="15000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/ladak.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ladak</h3>
                    <p class="price">Rs. 20000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="20000">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/kutch.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kutch</h3>
                    <p class="price">Rs. 8500</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="book.php" class="btn">Book now</a>
                        <a href="#" class="btn" data-price="8500">add to cart</a>
                </div>
            </div>

        </div>

        <div class="load-more"><span class="btn">Load more</span></div>

    </section>

    <!-- package section ends -->


    <!-- footer ssection starts -->

    <footer id="colorlib-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 colorlib-widget">
                    <h4>Tour Agency</h4>
                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta
                        adipisci architecto culpa amet.</p>
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
                        <li><a href="blog.php">A Definitive Guide to the Best Dining and Drinking Venues in the
                                City</a></li>
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
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved<span
                            style="color:yellow;font-size: 20px;">| Created by Milin, Prem</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </div>



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