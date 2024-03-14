<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$foodId = $_POST['foodId'];
$item = $_POST['item'];
$price = $_POST['price'];
$userName=$_SESSION['userName'];


if(isset($_SESSION['isLogedIn']) && $_SESSION['isLogedIn']) {

    // Insert review into the database
    $insert_sql = "INSERT INTO cart (userName,foodId,item,price) VALUES('$userName','$foodId','$item','$price');";
   
    
    if ($connect->query($insert_sql) === TRUE) {
        echo "<script>alert('added to the cart!'); window.location.href = '../../frontend/user/foodMenu.php';</script>";
    } else {
        echo "<script>alert('not added to cart!'); window.location.href = '../../frontend/user/index.php';</script>";
        echo "Error: " . $insert_sql . "<br>" . $connect->error;
    }
   
} else {
    echo "<script>alert('Please Login!'); window.location.href = '../../frontend/user/login.php';</script>";
    
}

$connect->close();
?>