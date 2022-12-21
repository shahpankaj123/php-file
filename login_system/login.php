<?php
include "nav.php";
include "connect_sql.php";
$sucess=0;
$nomatch=0;
if($_SERVER['REQUEST_METHOD']=='POST')
    {

        $us = $_POST['Username'];
        $pass = $_POST['password']; 

        $sql="SELECT * FROM `ltable` WHERE username='$us' AND password='$pass'";
        $result=mysqli_query($con,$sql);
        $num_rows=mysqli_num_rows($result);
        if($num_rows==1)
        {
           $sucess=1;
           session_start();
           $_SESSION['logined']=0;
           $_SESSION['Username']=$us;
           header("location: welcome.php");

        }
        else{
          $nomatch=1;
        }
       
    }

        
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
	<style type="text/css">
		.container{
			margin-top:20px;
		}
		.hd1{
			margin-bottom:10px ;
		}
	</style>
</head>
<body>
	<?php
	if ($sucess==1) {
		echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>successfully!</strong> login.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
	}
	if ($nomatch==1) {
		echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> Password donot match.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
	}
	
	?>
<div class="container">
	<div class="hd1"><h2>Login Your Account</h2></div>
<form action="/aryan/login_system/login.php" method='POST'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Username">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>