<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    

    $conn=mysqli_connect("localhost","root","","login");

    $sql="INSERT INTO `data` (`S.N`, `NAME`, `email`, `PHONE NUMBER`) VALUES (NULL, '$name', '$email', '$phone')";
    $result=mysqli_query($conn,$sql);

}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
        }
        </style>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" METHOD="POST">
    <input type="name" name="name" placeholder="name"><br>
    <input type="email" name="email" placeholder="email"><br>

    <input type="number" name="phone" placeholder="phone number"><br>
    <input type="submit">

</form>
<table cellspacing="0" cellpadding="5">
    <tr>
        <th>s.n</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone number</th>

</tr> 
    <tbody>

        <?php
        $conn=mysqli_connect("localhost","root","","login");
          $sql = "SELECT * FROM `data`";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr>
              <td>". $row['S.N'] ."</td>
              <td>". $row['NAME'] ."</td>
              <td>". $row['email'] ."</td>
              <td>". $row['PHONE NUMBER'] ."</td>
              </tr>";
          }

        ?>
    </tbody>  

</table>
</body>
</html>