<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$foodId = $_POST['foodId'];
$userName=$_SESSION['userName'];


$sql = "DELETE FROM cart WHERE foodId='$foodId' AND userName='$userName';";

$result = mysqli_query($connect, $sql);
echo "<script>alert('removed successful!'); window.location.href = '../../frontend/user/cart.php';</script>";



?>