<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$type = $_POST['type'];
$id = $_POST['id'];


$sql = "DELETE FROM $type WHERE id=$id;";

$result = mysqli_query($connect, $sql);
echo "<script>alert('removed successful!'); window.location.href = '../../frontend/admin/manageAds/removeAds.php';</script>";


?>