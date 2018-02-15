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
$c_att=$_POST["c_att"];

$data_inizio=$_POST["data_inizio"];

$timestampdata_inizio = strtotime($_POST['data_inizio']);
$data_inizio=date("Y-m-d", $timestampdata_inizio);


$data_fine=$_POST["data_fine"];
$timestampdata_fine = strtotime($_POST['data_fine']);
$data_fine=date("Y-m-d", $timestampdata_fine);





$costo_tot=0;
$id;

$trovato=0;


$query="SELECT id,username FROM login";

$query1 = mysqli_query($link, $query)
or die("Query non valida");



while ($stampa= mysqli_fetch_array($query1))  
 
   {
 
   	if( $username == $stampa["username"])
   		
   		{ 
   		
   			$trovato=1;
            $id=$stampa["id"];
   		 
    	}   
   }



$query=" INSERT INTO prenotazioni (c_utente, c_att, data_inizio, data_fine, costo_tot)
            VALUES ('$id', '$c_att', '$data_inizio', '$data_fine', '$costo_tot')";

$query1 = mysqli_query($link, $query)
or die("Query non valida");





header("location: portfolio.php");

 
mysqli_close($link);




?>