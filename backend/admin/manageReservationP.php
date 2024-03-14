<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$regId = $_POST['regId'];


$sql = "DELETE FROM register WHERE regId=$regId;";

$result = mysqli_query($connect, $sql);
echo "<script>alert('removed successful!'); window.location.href = '../../frontend/admin/manageReservation.php';</script>";


?>