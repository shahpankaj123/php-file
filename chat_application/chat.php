<?php 
  
  session_start();
  include "connect.php";
  if(!isset($_SESSION['login'])){
    header("location: login.php");
  }
  $fname=$_SESSION['username'];
  
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
<style>
  <style>
  .message-container2 {
  background-color: red;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 10px;
  
  
}

.message-sender2 {
  font-weight: bold;
  margin-bottom: 0px;
  float: right;
}

.message-body2 {
  margin-bottom: 0px;
  float: right;
}



.message-container1 {
  background-color: green;
  padding: 4px;
  border-radius: 5px;
  margin-bottom: 3px;
  margin:6px;
  
  
}

.message-sender1 {
  font-weight: bold;
  margin-bottom: 0px;
  float: left;
}

.message-body1 {
  margin-bottom: 0px;
  float: left;
}





              
        </style>
  </style>
<body style='background-color:lightgray;'>
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
      <div class="chat-box">
        <?php
      
        $idem=$_SESSION['ide'];
        $sql = "SELECT * FROM `users` WHERE unique_id='$idem'";
        $result = mysqli_query($conn,$sql);
        $row6=mysqli_fetch_assoc($result);

        $mg=$row['unique_id'];
        $sql1="SELECT * FROM `messages` WHERE `messages`.`incoming_msg_id`='$idem' AND `messages`.`outgoing_msg_id`='$mg' OR `messages`.`incoming_msg_id`='$mg' AND `messages`.`outgoing_msg_id`='$idem'";
       

        $result1 = mysqli_query($conn,$sql1);
      
      
        while($row1=mysqli_fetch_assoc($result1)){

          if($row1['incoming_msg_id']==$idem && $row1['outgoing_msg_id']==$mg)
          {
          $message=$row1['msg'];
          
         
            echo " <div class='message-container2' style='background-color:rebeccapurple; margin-button:3px; border-radius:5px; padding:4px; margin:6px;'>
            <div class='message-sender2'>$fname</div><br>
            <div class='message-body2'>$message</div><br><hr>
            </div>";
        }
          if($row1['incoming_msg_id']==$mg && $row1['outgoing_msg_id']==$idem){
           $message2=$row1['msg'];
           $ftname=$row6['fname'];
           echo " <div class='message-container1'>
            <div class='message-sender1'>$ftname</div><br>
            <div class='message-body1'>$message2</div><br><hr>
            </div>";
        }
        
      
      
      }
       
        ?>

      </div>
      <form action="\aryan\chat_application\chat.php" class="typing-area" method="POST" id="dataForm">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $idem=$_SESSION['ide']; $idem;?>" hidden>
        <input type="text" class="incoming_id" name="outgoing_id" value="<?php echo $row['unique_id']; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <input type="submit" id="btn1">
      </form>
    </section>
  </div>

 

</body>

</html>
