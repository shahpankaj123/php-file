<?php
$conn=mysqli_connect("localhost","root","","HOTEL");
$sql="CREATE DATABASE HOTEL";
$result=mysqli_query($conn,$sql);

$sql="CREATE TABLE GUEST(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    address VARCHAR(255),
    email VARCHAR(255),
    date TIMESTAMP
)";
$result=mysqli_query($conn,$sql);
?>
