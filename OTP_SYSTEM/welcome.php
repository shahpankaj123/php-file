<?php

session_start();
include "nav.php";
if(isset($_SESSION['username']))
{

$user=$_SESSION['username'];
echo "<h1 style='text-align:center; color:green; padding:5px; font-size:50px;'> welcome {$user} to my websites </h1>";
echo "<a href=logout.php><button style='color:green; padding:5px; width:130px; height:60px; margin:5% 45%; font-size:30px;'>logout</button></a>";
}
else{
    header("location:/aryan/OTP_SYSTEM/login.php");
}

?>