<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$foodId = $_POST['foodId'];
$userName=$_SESSION['userName'];

$sql = "SELECT numOfItems FROM cart WHERE foodId=$foodId AND userName='$userName';";
$result = mysqli_query($connect, $sql);
$row = $result->fetch_assoc();
$numOfItems = $row["numOfItems"];
$numOfItems--;


$sql="UPDATE cart SET numOfItems = $numOfItems WHERE foodId = $foodId AND userName = '$userName';";
$result = mysqli_query($connect, $sql);   
echo "<script> window.location.href = '../../frontend/user/cart.php';</script>";


?>