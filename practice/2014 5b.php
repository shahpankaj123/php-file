<?php
$conn=mysqli_connect("localhost","root","","HOTEL");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_POST['name'];
    $add=$_POST['address'];
    $email=$_POST['email'];
    $paternmatch="/^[a-zA-Z ]*$/";

    if($name=="")
    {
        echo "please enter your name";
    }
    elseif(preg_match($paternmatch,$name)){
        $sql="INSERT INTO `guest` (`id`, `name`, `address`, `email`, `date`) VALUES (NULL, '$name', '$add', '$email', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "successful recorded";
        }
        else{
            echo "error! failed";
        }

    }
    else{
        echo "your name must only contain alphabet";
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
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name"><br>
        <label for="name">address:</label>
        <input type="text" name="address"><br>
        <label for="name">email:</label>
        <input type="enail" name="email"><br>
        <input type="submit">

    </form>
</body>
</html>