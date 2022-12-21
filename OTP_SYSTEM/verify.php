<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {

	$us=$_POST['username'];


	$con=mysqli_connect("localhost","root","","login");

	$sql="SELECT * FROM `ptable` WHERE username='$us'";
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
	if($num>0)
	{
		$otp=rand(1111,9999);
		$sql="UPDATE `ptable` SET `OTP` = '$otp' WHERE `ptable`.`username` = '$us'";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			ini_set('display_errors', 1);
			error_reporting(E_ALL);

         $to_email = $us;
         $subject ="Simple Email Test via PHP";
         $body = "Hi, This is test email send by PHP Script";
         $headers = "From: pshah9360@gmail.com";
         $res=mail($to_email, $subject, $body,$headers);
         if ($res) {
         	echo "string";
         }

          

		}
	}
}
?>