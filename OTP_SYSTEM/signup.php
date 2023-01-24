<?php
include "config.php";
include "nav.php";
session_start();
if(isset($_SESSION['username']))
{
    header("location:/aryan/OTP_SYSTEM/welcome.php");
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $uss=$_POST['username'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    $sql="SELECT * FROM `ptable` WHERE username='$uss'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
    if($row==1)
    {
        echo "<h1 style='color:red; text-align:center;'>Username already exist!</h1>";
    }
    else{
        if($pass==$cpass)
        {
        $sql="INSERT INTO `ptable` (`user_id`, `username`, `password`, `Time`) VALUES (NULL, '$uss', '$pass', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
        session_start();
        $_SESSION['login']=1;
        $_SESSION['username']=$uss;
        header("location:/aryan/OTP_SYSTEM/welcome.php");
        }

        }
        else{
            echo "<h1 style='color:red; text-align:center;'>Password donot match!</h1>";
        }
    }
}   
?>
<html>
    <body>
	<div class="container">
		<hr><h2>Signup</h2><hr>
        <form action="/aryan/OTP_SYSTEM/signup.php" method="POST">
		<div class="item1">
		<label for="name">Enter your Name</label><br>
		<input type="text" placeholder="Enter your Full Name" name="username"><br>
		<label for="name">Enter Password</label><br>
		<input type="Password" name="pass"><br>
		<label for="name">Confirm Password</label><br>
		<input type="Password" name="cpass">
		<div class="btn1">
		<input type="submit"></div>
    </form>
	</div>
	</div>

</body>
</html>