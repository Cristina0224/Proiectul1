<!DOCTYPE HTML>
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
	<!-- Date Time -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

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
						<div id="fh5co-logo"><a href="index.html">Tasty<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="menu.php">Menu</a></li>
							<li class="active"><a href="reservation.php">Reservation</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	

	
	<div id="fh5co-reservation-form" class="fh5co-section">
		<div class="container">
                 
 


			<div class="row">
				<div class="col-md-8 fh5co-heading animate-box">

                                        <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
                                         <h2 style="display: flex; justify-content: center; margin-top:10px">Reservation</h2>
					<form action="#" id="form-wrap"form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Your Name</label>
								<input type="text" class="form-control" id="nume" name="nume">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="many">How Many People</label>
                                                                <input type="text" class="form-control" id="nr" name="nr">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="taskdatetime">When</label>
								<input type="text" name="data" id="data" class="form-control"/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value=" Submit" name="submit">
							</div>
						</div>

					</form>

<?php

include "conection.php";
if (isset($_POST['submit']))
{
    $sql = "INSERT INTO rezervari (nume, nr,data) VALUES ".  
    "('{$_POST['nume']}', '{$_POST['nr']}', '{$_POST['data']}')";
    $query = mysqli_query($con, $sql) or die(mysqli_error($con));
    echo "Inregistrarea a fost adaugata cu succes!";
}
?>
				</div>
				
				
			</div>
		</div>
					
				</div>
				
				
				
				
			</div>
		</div>
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

				

				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					
					<p>
						<ul class="fh5co-social-icons">
							
							<li><a href="https://www.facebook.com/"><i class="icon-facebook2"></i></a></li>
							<li><a href="https://www.instagram.com/"><i class="icon-instagram2"></i></a></li>
							<li><a href="https://www.twitter.com/"><i class="icon-twitter2"></i></a></li>
						</ul>
					</p>
				</div>
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

	<!-- Date Time -->
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

