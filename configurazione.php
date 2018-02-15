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

			<h1 id="fh5co-logo"><a href="pagina.php"> <?php echo " <img src='$immagine' alt='Nessuna immagine'> "; ?> </a></h1>
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
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Modifica il tuo account</span></h2>
				<div class="row animate-box" data-animate-effect="fadeInLeft">
					
					


<center>
<br><br><br><br><br><br><br>
<?php echo "<center><img src=$immagine ></center><br><br> ";  ?>
<form action="cambiaimmagine.php" method="POST">
<b>Modifica la tua immagine</b>

<br>

<input type="text" name="newimage" placeholder="link immagine (.img, .jpg ecc. ...)"  style="width: 60%"><br><br>
<input type="submit" class="btn btn-primary btn-md"  value="Cambia immagine"  style="width: 60%">
</form>
<br><br><br>


<form action="cambiapassword.php" method="POST">
<b>Modifica la tua password</b>

<br>

<input type="password" name="newpassword" placeholder="nuova password"  style="width: 60%"><br><br>
<input type="submit" class="btn btn-primary btn-md"  value="Cambia password"  style="width: 60%">
</form>
<br><br><br>

<form action="cambiausername.php" method="POST">
<b>Modifica il tuo username</b>

<br>


<input type="text" name="newusername" placeholder="nuovo username"  style="width: 60%" ><br><br>
<input type="submit" class="btn btn-primary btn-md"  value="Cambia nome"  style="width: 60%">

</form>
<br><br><br>
<form action="cambiaemail.php" method="POST">
<b>Modifica la tua mail </b>

<br>


<input type="text" name="newemail" placeholder="nuova email"  style="width: 60%"><br><br>
<input type="submit" class="btn btn-primary btn-md"  value="Cambia e-mail"  style="width: 60%">
</form>
<br><br><br>


</center>
</form>









</div>
</div>
</div>
</span>
</small>
</p>
</div>
</aside>
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

