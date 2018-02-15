

<?php

$link = mysqli_connect('localhost', 'root', '', "my_palestra");
if (!$link) {
	die ('Non riesco a connettermi: ' . mysqli_error());
}

$db_selected = mysqli_select_db($link, 'my_palestra' );
if (!$db_selected) {
	die ("Errore nella selezione del database: " . mysqli_error());
}




$username=$_POST["username"];
$password=$_POST["password"];
$trovato=0;


$query="SELECT username,password FROM login";

$query1 = mysqli_query($link, $query)
or die("Query non valida");



while ($stampa= mysqli_fetch_array($query1))  
 
   {
 
   	if( $username == $stampa["username"]  && $password == $stampa["password"])
   		
   		{ 
   		
   			$trovato=1;
   		 
    	}

   	else
   		{ 
   			
 		}

   
   }


   if($trovato==1)
   {	
   		echo "<br><br><br><br>";
		echo "<center>Ti sei autenticato correttamente.</center>";
   }

   if($trovato==0)
   {
   		echo "C'è stato un errore nell'autenticazione.";
   }
 

mysqli_close($link);
?>