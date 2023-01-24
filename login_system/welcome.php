<?php
session_start();
 
 if(!isset($_SESSION['logined']))
 {
	header("location:signup.php");
 	exit();
 }
include "nav.php";
echo $_SESSION['username'];
?>