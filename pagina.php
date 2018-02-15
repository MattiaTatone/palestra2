<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Gym Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
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

	<?php

	session_start();
	$username=$_SESSION['username'];
    $immagine=$_SESSION['immagine'];

	?>

	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="pagina.php"><?php echo "<img src='$immagine' alt='Nessuna immagine'>"; ?> </a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<?php echo "<li><a style='color:black' href='configurazione.php'> $username </a></li>"; ?>

					<li class="fh5co-active"><a href="pagina.php">Attività</a></li>
					<li><a href="portfolio.php">Prenota</a></li>
					<li><a href="about.php">Info</a></li>
					<li><a href="contact.php">Contatti</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small> <a href="index.html">Logout </a> </small></p>
				<p><small>&copy; My Gym Manager. All Rights Reserved.</span> <span>
			</div>

		</aside>

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">I nostri <span>corsi</span></h2>
				<div class="row animate-box" data-animate-effect="fadeInLeft">
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="bodybuilding.php">
							<img src="images/bodybuilding.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Bodybuilding</h3>
							<p></p>
						</a>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="boxing.php">
							<img src="images/boxing.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Boxing</h3>
							<p></p>
						</a>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="karate.php">
							<img src="images/karate.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Karate</h3>
							<p></p>
						</a>
					</div>
					<div class="clearfix visible-md-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="pilates.php">
							<img src="images/pilates.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Pilates</h3>
							<p></p>
						</a>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="cardio.php">
							<img src="images/cardio.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Cardio fitness</h3>
							<p></p>
						</a>
					</div>

					
					
				</div>
			</div>
				<br><br><br><br><br>
			
			<div class="fh5co-testimonial" >
				<div class="fh5co-narrow-content">
					<div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
		            <div class="item">
		            	<figure>
		            		<img src="images/testimonial_person2.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;Per ogni individuo, lo sport è una possibile fonte di miglioramento interiore. &rdquo; <cite class="author">&mdash; Pierre De Coubertin</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
		            		<img src="images/testimonial_person3.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;Praticare uno sport non deve fondarsi sull'idea del successo, bensì sull'idea di dare il meglio di sé. &rdquo;<cite class="author">&mdash; Gabriella Dorio</cite></p>
		            </div>
		            <div class="item">
		            	<figure>
		            		<img src="images/testimonial_person4.jpg" alt="Free HTML5 Bootstrap Template">
		            	</figure>
		              	<p class="text-center quote">&ldquo;Ci si può drogare di cose buone e una di queste è certamente lo sport. &rdquo;<cite class="author">&mdash; Alex Zanardi</cite></p>
		            </div>
		          </div>
				</div>
			</div>





	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

