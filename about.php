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
	$effettuato=0;
	$username=$_SESSION['username'];
    $immagine=$_SESSION['immagine'];
	
	?>
	<div id="fh5co-page">

		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border">

			<h1 id="fh5co-logo"><a href="pagina.php"><?php echo "<img src='$immagine' alt='Nessuna immagine'>"; ?></a></h1>
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
				<div class="row">
					<div class="col-md-5">
						<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">My Gym Manager <span>Semplifica la tua vita!</span></h2>
						<p class="fh5co-lead animate-box" data-animate-effect="fadeInLeft">Prenota le tue attività tramite il sito web e verifica l'affluenza del nostro centro</p>
						<p class="animate-box" data-animate-effect="fadeInLeft"> Abbiamo sviluppato un sistema di prenotazione facile ed intuitivo, alla portata di tutti.</p>
					</div>
					<div class="col-md-6 col-md-push-1 animate-box" data-animate-effect="fadeInLeft">
						<img src="images/img_1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"> 
					</div>
				</div>
				
			</div>

			<div class="fh5co-narrow-content  animate-box" data-animate-effect="fadeInLeft">
				<h2 class="fh5co-heading" >Staff</span></h2>

				<div class="row">
					<div class="col-md-4 fh5co-staff">
						<img src="images/person3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Mattia Tatone</h3>
						<h4>Sviluppatore</h4>
						<p>Al futuro o al passato, a un tempo in cui il pensiero è libero, quando gli uomini sono differenti l'uno dall'altro e non vivono soli... a un tempo in cui esiste la verità e quel che è fatto non può essere disfatto.
						Dall'età del livellamento, dall'età della solitudine, dall'età del Grande Fratello, dall'età del bispensiero... tanti saluti!</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				
					
				</div>
			</div>

			<div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
				<div class="fh5co-narrow-content animate-box">
					<div class="row" >
						<div class="col-md-4 text-center animate-box">
							<span class="fh5co-counter js-counter" data-from="0" data-to="67" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Utenti registrati</span>
						</div>
						<div class="col-md-4 text-center animate-box">
							<span class="fh5co-counter js-counter" data-from="0" data-to="130" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Prenotazioni raccolte</span>
						</div>
						<div class="col-md-4 text-center animate-box">
							<span class="fh5co-counter js-counter" data-from="0" data-to="60" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label"> Feedback positivi </span>
						</div>
					</div>
				</div>
			</div>

			</div></span></small></p></div></aside></div>

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

