<?php 
    //Include constants.php for SITEURL
    include('connect.php');
    session_start();
    //1. Destory the Session
    session_unset();
    session_destroy(); //Unsets $_SESSION['user']

    //2. REdirect to Login Page
    header('location: login.php');

?>