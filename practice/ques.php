<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $username=$_POST['user'];
    $pass=$_POST['pass'];
    

    $conn=mysqli_connect("localhost","root","","login");

    $sql="SELECT * FROM `ptable` WHERE username='$username' AND password='$pass'";
    $result=mysqli_query($conn,$sql);
    $num_rows=mysqli_num_rows($result);
    if( $num_rows==1){
        header("location:ques2.php");
    }
    else{
        echo "unsucessful login";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" METHOD="POST">
        <labe>username:</label>
        <input type="text" name="user"><br>
        <labe>password:</label>
        <input type="password" name="pass"><br>
        <input type="submit">

</form>
</body>
</html>