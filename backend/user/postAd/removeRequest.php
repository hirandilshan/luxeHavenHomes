<?php
session_start();
include_once'../../../backend/user/dbs.php'; 


$id = $_POST['id'];
$userName=$_SESSION['userName'];


$sql = "DELETE FROM requests WHERE id='$id' AND userName='$userName';";

$result = mysqli_query($connect, $sql);
echo "<script>alert('removed successful!'); window.location.href = '../../../frontend/user/postAd/payment.php';</script>";



?>