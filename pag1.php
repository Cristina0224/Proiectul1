
<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tasty &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	

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

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	   <!--JS -->
        <script src="js/script1.js"></script>
        <script src="js/script2.js"></script>
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.php">Tasty<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="menu.php">Menu</a></li>
                                                        
                                                        <?php 
                                                        if(isset($_SESSION['user_admin']))
                                                        { 
                                                            if($_SESSION['user_admin']==1){
                                                                
                                                        
                                                        ?>
							<li><a href="reservation.php">Reservation</a></li>
                                                        <?php }}?>
							<li><a href="about.php">About</a></li>
                                                        <li><a href="contact.php">Contact</a></li>
                                                        <li><a href='logout.php'>Logout</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>The Best Coffee <em>&amp;</em> Restaurant <em>in</em> Iasi</h1>
							</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="fh5co-section" >
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
					<img src="images/hero_1.jpeg" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
				</div>
				<div class="col-md-5 col-md-push-1 animate-box" >
                                    <h1 style="color:white;"> Bine ai venit!!! </h1>
                                    
                                    


				</div>
			</div>
		</div>
	</div>

	
	
		
	</div>

	
	
	
	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
	
	</div>

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Menu</a></li>
						
					</ul>
				</div>

				

				
                            <div class="col-md-2 col-md-push-1 fh5co-widget">
					 <div class="row copyright">
				<div class="col-md-12 text-center">
					 <div class="center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5424.31441104068!2d27.567126603026217!3d47.174358566532206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea%20%E2%80%9EAlexandru%20Ioan%20Cuza%E2%80%9D%20din%20Ia%C8%99i!5e0!3m2!1sro!2sro!4v1677825565085!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                         </div></div>
					
					

		</div>
				</div>
                            <div class="col-md-4 col-md-push-6 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li> „Universitatea „Alexandru Ioan Cuza” <br> , Bulevardul Carol I 11, Iași 700506 </li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						
					</ul>
                                                    
				</div>

			</div>
                       
			<div class="row copyright">
				<div class="col-md-12 text-center">
					
					<p>
						<ul class="fh5co-social-icons">
                                 <div class="fb-like" data-href="http://www.uaic.ro" data-width="" data-layout="" data-action="" data-size="" data-share="true" data-colorscheme="dark"></div>
<br/><br/>

							<li><a href="https://www.facebook.com/"><i class="icon-facebook2"></i></a></li>
							<li><a href="https://www.instagram.com/"><i class="icon-instagram2"></i></a></li>
							<li><a href="https://www.twitter.com/"><i class="icon-twitter2"></i></a></li>
						</ul>
					</p>
                                 
     
				</div>
               
			</div>
                   
            
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

