<?php


$con=mysqli_connect("localhost","root","","icoder");



if ($_SERVER['REQUEST_METHOD']=='POST') {
  $us=$_POST['username'];
  $ps=$_POST['Password'];
  $cps=$_POST['cpassword'];

  $sqi="SELECT * FROM `data` WHERE username='$us'";
  $result=mysqli_query($con,$sqi);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    session_start();
    $_SESSION['error1']=1;
    header("location:index.php");
  }
  else{

  if($ps==$cps)
  {
  	$sql="INSERT INTO `data` (`username`, `password`, `Time`) VALUES ('$us', '$ps', current_timestamp())";
  	$result=mysqli_query($con,$sql);
     session_start();
    $_SESSION['error2']=1;
    header("location:index.php");
  }
  else{
     session_start();
     $_SESSION['error3']=1;
    header("location:index.php");
  }
 }

}


?>