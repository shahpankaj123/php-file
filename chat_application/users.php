<?php 
  session_start();
  include 'connect.php';
  
  
  if(!isset($_SESSION['login'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $em=$_SESSION['email'];
            $sql="SELECT * FROM `users` WHERE `users`.`email`= '$em'";
            $result = mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if($num>0){
              $row = mysqli_fetch_assoc($result);
            
          ?>
          <img src="\aryan\chat_application\upload\<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p></p>
          </div>
        </div>
        <a href="\aryan\chat_application\logout.php" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <hr>
        <?php
        $sql="SELECT * FROM `users` WHERE `users`.`email` <> '$em'";
        $result=mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result))
        {
             $name= $row['fname']." ".$row['lname'];
             $ide=$row['unique_id'];
             echo "<a href='\aryan\chat_application\chat.php?id=$ide'>$name  </a></b>" ;
        }


        ?>
  
      </div>
    </section>
  </div>
  <?php
    }
  ?>

  <script src="javascript/users.js"></script>

</body>
</html>
