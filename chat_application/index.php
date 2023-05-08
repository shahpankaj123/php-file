<?php 
include 'connect.php';
$error1=0;

  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
  $file_name="";

  if(isset($_FILES['fileToUpload']))
{
    $error=array();

    $file_name=$_FILES['fileToUpload']['name'];
    $file_size=$_FILES['fileToUpload']['size'];
    $file_tmp=$_FILES['fileToUpload']['tmp_name'];
    $file_type=$_FILES['fileToUpload']['type'];
    $file_ext=end(explode('.',$file_name));

    $extensions = array("jpeg","png","jpg");

    if(in_array($file_ext,$extensions) === false)
    {
        $error[]="this extensions file not allowed,please choose jpeg or jpg";

    }

    if($file_size > 1024*1024*2)
    {
        $error[]="FILE SIZES MUST BE LESS THEN 2MB";
    }

    if(empty($error) == true)
    {
           move_uploaded_file($file_tmp,"upload/".$file_name);
    }else{
        print_r($error);
        die();
    }
}
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $fuser=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $id2=rand(10,1000);
    $img_name=$file_name;

    $sql="INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`) VALUES (NULL, '$id2','$fuser', '$lname', '$email', '$pass', '$img_name')";
    $result=mysqli_query($conn,$sql);
    if($result){
      header("location: login.php");
    }
    else{
      header("location: index.php");

    }
  
  
}
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <?php if ($error1==1){
        echo "<b>username already present</b>";
      }
        ?>
      
      <form action="\aryan\chat_application\index.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" >
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" >
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password">
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="fileToUpload"  required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="continue to chat" />
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  

</body>
</html>
