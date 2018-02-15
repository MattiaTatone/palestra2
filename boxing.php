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
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="pagina.php"><?php echo "<img src='$immagine' alt='Nessuna immagine'>"; ?></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>

					<?php echo "<li><a style='color:black'> $username </a></li>"; ?>
					<li class="fh5co-active"><a href="pagina.php">Attività</a></li>
					<li><a href="portfolio.php">Prenota</a></li>
					<li><a href="about.php">Info</a></li>
					<li><a href="contact.php">Contatti</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; My Gym Manager. All Rights Reserved.</span> <span>
			</div>

		</aside>

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<div class="row">

					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
						<figure class="text-center">
							<img src="images/boxing.png" alt="Free HTML5 Bootstrap" class="img-responsive">
						</figure>
					</div>
					
					<div class="col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">
						
						<div class="col-md-9 col-md-push-3">
							<h1>Boxing/Pugilato</h1>
							<p> E' uno dei più antichi e noti sport da combattimento.
								A livello competitivo esso si svolge all'interno di uno spazio quadrato chiamato ring, tra due atleti che si affrontano colpendosi con i pugni chiusi (protetti da appositi guantoni), allo scopo di indebolire e atterrare l'avversario. Questo sport è conosciuto, a partire dal XVIII secolo, anche come "la nobile arte", richiedendo ai suoi praticanti caratteristiche come coraggio, forza, intelligenza e velocità.
								La parola "pugilato" deriva dal latino pugilatus, la quale trae origine da pugil, che indica l'atleta che lotta con il pugnus, ovvero con il "pugno".<br>

							<i>Costo </i> <b>7 EUR/SETT</b></p>
						</div>


					</div>
				</div>

				<div class="row work-pagination animate-box" data-animate-effect="fadeInLeft">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">

						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
							<a href="bodybuilding.php"><i class="icon-long-arrow-left"></i> <span>Precedente</span></a>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
							<a href="#"><i class="icon-th-large"></i></a>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4 text-center">
							<a href="karate.php"><span>Prossimo</span> <i class="icon-long-arrow-right"></i></a>
						</div>
					</div>
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

