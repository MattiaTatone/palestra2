<?php

$link = mysqli_connect('localhost', 'root', '', "my_tatonevia2018");
if (!$link) {
   die ('Non riesco a connettermi: ' . mysqli_error());
}

$db_selected = mysqli_select_db($link, 'my_tatonevia2018' );
if (!$db_selected) {
   die ("Errore nella selezione del database: " . mysqli_error());
}




$username=$_POST["username"];
$password=$_POST["password"];
$trovato=0;


$query="SELECT username,password,email,immagine FROM login";

$query1 = mysqli_query($link, $query)
or die("Query non valida");



while ($stampa= mysqli_fetch_array($query1))  
 
   {
 
   	if( $username == $stampa["username"]  && $password == $stampa["password"])
   		
   		{ 
   		
   			$trovato=1;
            $email=$stampa["email"];
            
            $_SESSION["username"] = $stampa["username"];
            $_SESSION["email"] = $stampa["email"];
            $_SESSION["immagine"] = $stampa["immagine"];
   		 
    	}

   	

   
   }


   if($trovato==1)
   {	    

         echo "<form action='redirect.php' name='redirect.php' method='POST'>";

   		echo "<div style='left-padding:30%; text-align:center; padding-top:10%'>";

         echo "<input type='text' value='$username' name='username' style='opacity:0'>";
         echo "<input type='text' value='$email' name='email' style='opacity:0'>";
         echo "<input type='text' value='$password' name='password' style='opacity:0'>";

         echo "<h2>Hai effettuato il login correttamente.</h2><br><br><br><a href='pagina.php'><button type='submit' style='background-color: red; color: white; width: 100%;height:5%'> Visita il sito </button> </a>";
		 echo "</div>";
         echo "</form>";
         
         
         
         
   }

   if($trovato==0)
   {	
   		echo "<div style='left-padding:30%; text-align:center; padding-top:10%'>";
   		
      echo "<h2>Si è verificato un errore.</h2><br><br><br><a href='index.html'><button type='submit' style='background-color: red; color: white; width: 100%; height: 5%'> Torna indietro </button> </a>";
	echo "</form>";
 }

mysqli_close($link);
?>