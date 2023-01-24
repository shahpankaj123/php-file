<?php
include "config.php";
session_start();
if(isset($_SESSION['username']))
{
    header("location:/aryan/OTP_SYSTEM/welcome.php");
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $uss=$_POST['username'];
    $pass=$_POST['password'];

    $sql="SELECT * FROM `ptable` WHERE username='$uss' AND password='$pass'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
    if($row==1)
    {
        session_start();
        $_SESSION['login']=1;
        $_SESSION['username']=$uss;
        header("location:/aryan/OTP_SYSTEM/welcome.php");
    }
    else{
        echo "<h1 style='color:red; text-align:center;'>Username or password donot match</h1>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Facebook</title>
	<link rel="stylesheet" type="text/css" href="facebook_style.css">
</head>
<body>
	<div class="container">
		<div class="box1">
			<p class="p1"><strong>Facebook</strong><p>
			<p class="p2">connect with friends and the world around you on facbook</p>
			
			
		</div>
		<div class="box2">
            <form action="/aryan/OTP_SYSTEM/login.php" method="POST">
			<div class="text">
				<input type="text" name="username" placeholder="Email or phone number">
			</div>
			<div class="text">
				<input type="text" name="password" placeholder="Password">
			</div>
			<div class="btn1">
				<input type="submit" name="Log In" value="Log In">
			</div>
            </form>
			<div class="ft">
				<p><a href="#">Forgot password?</a></p>
			</div>
			<hr>
			<div class="fot">
			<a href="signup.php"><button>Create new account</button></a>
		    </div>
		    <div class="boxfot"><p><a href="#"><b>Create a Page</b></a> for a celebrity, brand or business</p></div>
			
		</div>
		
		
		
	</div>

</body>
</html>