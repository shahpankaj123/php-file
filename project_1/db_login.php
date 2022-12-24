<?php
$con=mysqli_connect("localhost","root","","icoder");
echo "string";
/*if ($_SERVER['REQUEST_METHOD']=='POST') {

  $us=$_POST['username'];
  $pass=$_POST['Password'];


  $sql="SELECT * FROM `data` WHERE username='$us' AND password='$pass'";
  $result=mysqli_query($con,$sql);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    session_start();
    $_SESSION['login']=1;
    header("location:nav.php");
  }
}*/
?>