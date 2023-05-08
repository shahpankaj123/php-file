<?php 
  session_start();
  include "connect.php";
  if(!isset($_SESSION['login'])){
    header("location: login.php");
  }
  
if($_SERVER['REQUEST_METHOD']=='GET'){
  
  $_SESSION['ide']= $_GET['id'];}
  
  
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $idto=$_POST['outgoing_id'];
  $idfrom=$_POST['incoming_id'];
  $mess=$_POST['message'];

  $sql="INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES (NULL, '$idfrom', '$idto', '$mess')";
  $result=mysqli_query($conn,$sql);
}
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
         $email=$_SESSION['email'];
         $sql="SELECT * FROM `users` WHERE `users`.`email`= '$email'";
         $result = mysqli_query($conn,$sql);
         $row=mysqli_fetch_assoc($result);
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="\aryan\chat_application\upload\<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php// echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box" style="background-color:gray;">
        <?php
        $idem=$_SESSION['ide'];
        $mg=$row['unique_id'];
        $sql1="SELECT * FROM `messages` WHERE `messages`.`incoming_msg_id`='$idem' AND `messages`.`outgoing_msg_id`='$mg'";
        $sql2="SELECT * FROM `messages` WHERE `messages`.`incoming_msg_id`='$mg' AND `messages`.`outgoing_msg_id`='$idem'";
        $sql3="SELECT * FROM `messages`";

        $result1 = mysqli_query($conn,$sql1);
        $result2 = mysqli_query($conn,$sql2);
        $result3 = mysqli_query($conn,$sql3);

        while($row3=mysqli_fetch_assoc($result3)){
          $row1=mysqli_fetch_assoc($result1); 
          $row2=mysqli_fetch_assoc($result2); 
          //$message=$row1['msg'];
        
          //$message=$row1['msg'];
          //$message2=$row2['msg'];
          if($row1)
          {
          $message=$row1['msg'];
          echo "<h3><p style='color:red; margin:5px padding:5px; font-size:20px; text-align:right;'> $message</p></h3><hr>";}
          if($row2){
            $message2=$row2['msg'];
          echo "<h3><p style='color:green; margin:5px padding:5px; font-size:20px; text-align:left;'> $message2</p></h3><hr>";}
        }
      
       // while( $row2=mysqli_fetch_assoc($result2)){
             
         // $message2=$row2['msg'];
         // echo "<h3><p style='color:green; margin:5px padding:5px; font-size:20px; text-align:left;'> $message2</p></h3><hr>";
          
       // }
       
        ?>

      </div>
      <form action="\aryan\chat_application\chat.php" class="typing-area" method="POST">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $idem=$_SESSION['ide']; $idem;?>" hidden>
        <input type="text" class="incoming_id" name="outgoing_id" value="<?php echo $row['unique_id']; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <input type="submit" id="btn1">
      </form>
    </section>
  </div>

 

</body>
</html>
