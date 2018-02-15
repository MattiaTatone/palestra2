<?php

session_start();

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['email']=$email;


header("location: pagina.php");


?>