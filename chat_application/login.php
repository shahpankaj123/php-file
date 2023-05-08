<?php 
  session_start();
  include 'connect.php';
  if(isset($_SESSION['login'])){
    header("location: users.php");
  }
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $sql="SELECT * FROM `users` WHERE email='$email' AND password='$pass'";
        $result=mysqli_query($conn,$sql);
        $num_rows=mysqli_num_rows($result);
        if($num_rows==1){
          $row=mysqli_fetch_assoc($result);
          session_start();
          $_SESSION['login']=1;
          $_SESSION['uniq_id']=$row['unique_id'];
          $_SESSION['email']=$email;
           header("location: users.php");

        }
        else{
          header("location: login.php");

        }
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="\aryan\chat_application\login.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" >
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  

</body>
</html>
