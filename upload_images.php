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
	   <!--JS -->
        <script src="js/script1.js"></script>
        <script src="js/script2.js"></script>	
	<div class="fh5co-loader"></div>
	
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
							<li class="active"><a href="menu.php">Menu</a></li>
							
							<li><a href="reservation.php">Reservation</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
                                                        <li><a href="logout.php">LOGOUT</a></li>
                                                        
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	

	<div id="fh5co-featured-menu" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					
                                         <div class="center1">
<canvas id="myCanvas" width='350' height='50' style="border:1px solid #000000;"></canvas>

<script>
  const canvas = document.getElementById("myCanvas");
  const ctx = canvas.getContext("2d");

  const svgString = "<svg height='100' width='400' xmlns='http://www.w3.org/2000/svg'><defs><filter id='f1' x='0' y='0'><feGaussianBlur in='SourceGraphic' stdDeviation='15' /></filter></defs><rect width='350' height='50' stroke='green' stroke-width='3' fill='red' filter='url(#f1)' /><text fill='#ffffff' font-size='25' font-family='Verdana' x='50' y='35' position='center' style='z-index: 1;'>Our Delicious Menu</text></svg>";

  const DOMURL = window.URL || window.webkitURL || window;
  const img = new Image();
  const svg = new Blob([svgString], {type: 'image/svg+xml'});
  const url = DOMURL.createObjectURL(svg);

  img.onload = function() {
    ctx.drawImage(img, 0, 0);
    DOMURL.revokeObjectURL(url);
  }
  img.src = url;
</script>

					<div class="row row-pb-md" style="display: flex;">
  <div style="flex: 1;">
    <iframe width="420" height="315" src="https://www.youtube.com/embed/xytuDEbSSeQ"></iframe>
  </div>
  <div style="flex: 1;">
    <iframe width="420" height="315" src="multimedia/papa.mp4"></iframe>
  </div>
  <div style="flex: 1;">
    <iframe width="420" height="315" src="multimedia/bon.mp3"></iframe>
  </div>
</div
					
                                        </div></div>
  		
            <form method="post" action="save.php" enctype="multipart/form-data">
                <input style="margin-bottom:20px;" class="btn btn-primary btn-outline btn-lg" type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" value="200" name="image">
                </div>
                <div style="margin-bottom:20px;">
                    <textarea class="form-control" name="title" cols="40" rows="4" placeholder="bla bla"></textarea>
                </div>
                <div style="margin-bottom:20px;">
                    <textarea class="form-control" name="pret" cols="40" rows="4" placeholder="Pret"></textarea>
                </div>
                <div style="margin-bottom:20px;">
                    <textarea class="form-control" name="descriere" cols="40" rows="4" placeholder="Descriere"></textarea>
                </div>
               
                <div>
                    <input class="btn btn-primary btn-outline btn-lg" type="submit" name="upload" value="Upload Image">
                </div>
            </form>

				
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
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


