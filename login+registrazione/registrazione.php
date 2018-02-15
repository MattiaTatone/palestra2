

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
$email=$_POST["email"];
$trovato=0;


$query="SELECT username,email FROM login";

$query1 = mysqli_query($link, $query)
or die("Query non valida");



while ($stampa= mysqli_fetch_array($query1))  
 
   {
 
   	if( $username == $stampa["username"] or $email==$stampa["email"] )
   		
   		{ 
   		
   			$trovato=1;
   		 
    	}

   	else
   		{ 
   			
 		   }

   
   }


   if($trovato==1)
   {	
   		echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
		echo "<h2><center>L'account è già esistente.<br><br><br><a href='index.html'><button style='width: 30%; background-color: red; height: 4%; color:white;border:0px'> Torna indietro </button> </a></center></h2>";
   }



if($trovato==0)
{

   $query=" INSERT INTO login (username, email, password)
            VALUES ('$username', '$email', '$password')";

$query1 = mysqli_query($link, $query)
or die("Query non valida");


echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<h2><center>L'account è stato correttamente registrato.<br><br><br><a href='index.html'><button style='width: 30%; background-color: red; height: 4%; color:white;border:0px'> Torna indietro ed effettua il Login </button> </a></center></h2>";

}







 

mysqli_close($link);
?>