<?php
$conn=mysqli_connect("localhost","root","","abc");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $xx=$_POST['xx'];
    $xy=$_POST['xy'];
    $xz=$_POST['xz'];

    $sql="INSERT INTO `abc` (`xx`, `xy`, `xz`) VALUES ('$xx', '$xy', '$xz')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "data entered succesfull";
    }
    else{
        echo "error";
    }


}
if($_SERVER['REQUEST_METHOD']=="GET"){
    $xx=$_GET['xx'];

    $sql="DELETE FROM `abc` WHERE `abc`.`xx` = $xx";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "data deleted successful";
    }
    else
    {
        echo "error";
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
    <legend>data entry</legend>
    <labe>xx:</label>
    <input type="number" name="xx"><br>
    <labe>xy:</label>
    <input type="text" name="xy"><br>
    <labe>xz:</label>
    <input type="text" name="xz"><br>
    <input type="submit">
  
</form>
<form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
<labe>xx:</label>
<input type="number" name="xx"><br>
<input type="submit" >
</form>
</body>
</html>