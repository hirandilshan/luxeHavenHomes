<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$foodId = $_POST['foodId'];
$img = $_POST['img'];
$price = $_POST['price'];


$sql = "UPDATE foods SET img='$img', price=$price WHERE foodId='$foodId';";

$result = mysqli_query($connect, $sql);
echo "<script>alert('Upadte successful!'); window.location.href = '../../frontend/admin/manageFood.php';</script>";
?>