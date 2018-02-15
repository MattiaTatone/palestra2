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
$elimina=$_POST["elimina"];





$query="DELETE FROM prenotazioni WHERE cod_pren = '$elimina' ";

$query1 = mysqli_query($link, $query)
or die("Query non valida");




header("location: portfolio.php");

 
mysqli_close($link);




?>