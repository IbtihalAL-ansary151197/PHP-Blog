<?php


include 'db.php';

session_start();

if(!isset($_SESSION['Email'])){
	echo "<script> location.replace('login.php')</script>";
	exit();

}


?>