<?php

session_start();
include_once '../../backend/user/dbs.php'; 

$userName=$_SESSION['userName'];


if(isset($_SESSION['isLogedIn']) && $_SESSION['isLogedIn']) {
    echo "<script>window.location.href = '../../frontend/user/cart.php';</script>";

   
} else {
    echo "<script>alert('Please Login!'); window.location.href = '../../frontend/user/login.php';</script>";
    
}

$connect->close();
?>