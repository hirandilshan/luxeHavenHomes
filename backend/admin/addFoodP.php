<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$foodId = $_POST['foodId'];
$foodType = $_POST['foodType'];
$item =$_POST['item'];
$img = $_POST['img'];
$price = $_POST['price'];


$sql = "INSERT INTO foods VALUES ('$foodId','$foodType','$item','$img',$price);";

$result = mysqli_query($connect, $sql);
echo "<script>alert('Added successfuly!'); window.location.href = '../../frontend/admin/manageFood.php';</script>";
?>