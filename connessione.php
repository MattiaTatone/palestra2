<?php
$link = mysqli_connect('localhost', 'root', '', "my_palestra");
if (!$link) {
	die ('Non riesco a connettermi: ' . mysqli_error());
}

$db_selected = mysqli_select_db($link, 'my_palestra' );
if (!$db_selected) {
	die ("Errore nella selezione del database: " . mysqli_error());
}

echo 'connesso con successo';


?>

