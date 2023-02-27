<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password,"mylab1");

if(!$conn){
    echo "connection failed".mysqli_error($conn);
}

/*$sql="CREATE DATABASE mylab1";
$result=mysqli_query($conn,$sql);
if($result){
    echo "successfully created";
}*/

$sql="CREATE TABLE MYDATA(
    id INT(20),
    name VARCHAR(50)
    )";
$result=mysqli_query($conn,$sql);    

?>