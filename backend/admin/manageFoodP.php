<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$foodId = $_POST['foodId'];


$sql = "DELETE FROM review WHERE revId='$foodId';";

$result = mysqli_query($connect, $sql);
echo "<script>alert('removed successful!'); window.location.href = '../../frontend/admin/manageFood.php';</script>";



?>