<!DOCTYPE HTML>
<?php session_start(); ?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tasty &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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
						<ul><li><a href="index.php">Home</a></li>
							<li ><a href="menu.php">Menu</a></li>
							 <?php 
                                                        if(isset($_SESSION['user_admin']))
                                                        { 
                                                            if($_SESSION['user_admin']==1){
                                                                
                                                        
                                                        ?>
							<li><a href="reservation.php">Reservation</a></li>
                                                        <?php }}?>
							<li><a href="about.php">About</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
                                                         <?php 
                                                        if(isset($_SESSION['user_name']))
                                                        {?>
                                                        <li><a href='logout.php'>Logout</a></li> <?php }?>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	
<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
	
	</div>
	
	<div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
			<div class="row animate-box">
				
			
			
			
		
                
			<div class="row">
				<div class="col-md-8 fh5co-heading animate-box">
		  <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
      <h2 style="display: flex; justify-content: center; margin-top:10px">Staff</h2>
        <?php

class angajat
{
    public $nume;
    public $prenume;
    public $show;
   public $nr;
   public function set_nr($var)
    {
        $this->nr = $var;
    }
    public function set_nume($var)
    {
        $this->nume = $var;
    }

    public function set_prenume($var)
    {
        $this->prenume = $var;
    }

    public function get_nume()
    {
        $this->show = $this->nume." ".$this->prenume." : ".$this->nr;
    }

    public function show()
    {
        return $this->show;
    }
}
class bucatar extends  angajat{
    public $vechime;
    public function set_vechime($var)
    {
        $this->vechime = $var;
    }
    public function show()
    {
        return $this->show." (".$this->vechime.")";
    }

}

$a1 = new angajat();
$a2 = new angajat();
$b2 = new bucatar();
$a1->set_nume("Popescu");
$a1->set_prenume("Bogdan");
$a1->set_nr("0765261436");
$a1->get_nume();
echo $a1->show()."</br>";
$a2->set_nume("Popescu");
$a2->set_prenume("Maria");
$a2->set_nr("0765261436");
$a2->get_nume();
echo $a2->show()."<br/>";
$b2->set_nume("Georgescu");
$b2->set_prenume("Ioana");
$b2->set_nr("0765265436");
$b2->set_vechime("(bucatar de peste 10 ani");
$b2->get_nume();
echo $b2->show()."<br/>";

?>
                  </div>	
                                </div>
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

