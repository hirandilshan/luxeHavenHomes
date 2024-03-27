<?php
session_start();
include_once'../../../backend/user/dbs.php'; 


$id = $_POST['id'];
$userName=$_SESSION['userName'];

$sql = "SELECT numOfDays FROM requests WHERE id=$id AND userName='$userName';";
$result = mysqli_query($connect, $sql);
$row = $result->fetch_assoc();
$numOfDays = $row["numOfDays"];
$numOfDays++;


$sql="UPDATE requests SET numOfDays = $numOfDays WHERE id = $id AND userName = '$userName';";
$result = mysqli_query($connect, $sql);   
echo "<script> window.location.href = '../../../frontend/user/postAd/payment.php';</script>";


?>