<?php

session_start();
include_once '../../backend/user/dbs.php'; 

$review = $_POST['review'];
$userName=$_SESSION['userName'];


if(isset($_SESSION['isLogedIn']) && $_SESSION['isLogedIn']) {

    // Insert review into the database
    $insert_sql = "INSERT INTO review (review,userName) VALUES ('$review','$userName')";
    
    if ($connect->query($insert_sql) === TRUE) {
        echo "<script>alert('reviewed successfully!'); window.location.href = '../../frontend/user/index.php';</script>";
    } else {
        echo "<script>alert('review not successful!'); window.location.href = '../../frontend/user/index.php';</script>";
        echo "Error: " . $insert_sql . "<br>" . $connect->error;
    }
   
} else {
    echo "<script>alert('Please Login!'); window.location.href = '../../frontend/user/login.php';</script>";
    
}

$connect->close();
?>