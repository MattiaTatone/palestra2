<?php

session_start();



$link = mysqli_connect('localhost', 'root', '', "my_tatonevia2018");
if (!$link) {
	die ('Non riesco a connettermi: ' . mysqli_error());
}

$db_selected = mysqli_select_db($link, 'my_tatonevia2018' );
if (!$db_selected) {
	die ("Errore nella selezione del database: " . mysqli_error());
}


$username=$_SESSION['username'];
$newusername=$_POST['newusername'];



$query="SELECT username,password,email FROM login";

$query1 = mysqli_query($link, $query)
or die("Query non valida");



while ($stampa= mysqli_fetch_array($query1))  
 
   {
 
   	if( $username == $stampa["username"])
   		
   		{ 
   			
   			$trovato=1;
            $query2="UPDATE login SET username='$newusername' WHERE username = '$username' ";
            $query3=mysqli_query($link, $query2)
            	or die("Query non valida");

   		 
    	}
   
   }


$_SESSION["username"]='$newusername';





header("location: configurazione.php");

 
mysqli_close($link);




?>