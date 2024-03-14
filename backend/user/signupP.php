<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO users (firstName,lastName,email,password) VALUES('$fName','$lName','$email','$pass');";

$result = mysqli_query($connect, $sql);
echo "<script>alert('Signup successful!'); window.location.href = '../../frontend/user/login.php';</script>";


?>