<?php

session_start();
include_once '../../backend/user/dbs.php';  // Include your database connection file


$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT password FROM users WHERE email='$email'AND password='$password';";

$result = mysqli_query($connect, $sql);
$count =mysqli_num_rows($result);

if($count>0){
    
    
    if(strcasecmp($email,'admin@luxehavenhomes')==0 && strcasecmp($password,'12345@admin')==0){
        echo "<script> window.location.href = '../../frontend/admin/adminHome.php';</script>";
        $_SESSION['isAdminLogedIn'] = 'true';
    }else{
        echo "<script> window.location.href = '../../frontend/user/index.php';</script>";
        $_SESSION['isUserLogedIn'] = 'true';
    }
    $_SESSION['userName']=$_POST['email'];
    
}
else {
    echo "<script>alert('login failed. Please try again.'); window.location.href = '../../frontend/user/login.php';</script>";
}

$connect->close();

?>