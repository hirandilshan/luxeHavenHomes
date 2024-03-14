<?php

session_start();
include_once '../../backend/user/dbs.php'; 

// Retrieve form data
$date = $_POST['date'];
$time = $_POST['time'];
$table = $_POST['tables'];
$userName=$_SESSION['userName'];

// Check if the desired time is available
$sql = "SELECT * FROM register WHERE date='$date' AND time='$time' AND table_num=$table";
$result = mysqli_query($connect, $sql);

if(isset($_SESSION['isLogedIn']) && $_SESSION['isLogedIn']) {
    if ($result->num_rows > 0) {
        echo "<script>alert('Sorry, the selected time is not available. Please choose a different time.'); window.location.href = '../../frontend/user/reservation.php';</script>";
    } else {
        // Insert booking into the database
        $insert_sql = "INSERT INTO register (date, time, table_num, userName) VALUES ('$date', '$time', $table,'$userName')";
    
        if ($connect->query($insert_sql) === TRUE) {
            echo "<script>alert('Booking successful!'); window.location.href = '../../frontend/user/reservation.php';</script>";
        } else {
            echo "<script>alert('Booking not successful!'); window.location.href = '../../frontend/user/reservation.php';</script>";
            echo "Error: " . $insert_sql . "<br>" . $connect->error;
        }
    }
    
    
} else {
    echo "<script>alert('Please Login!'); window.location.href = '../../frontend/user/login.php';</script>";
    
}

$connect->close();
    ?>
