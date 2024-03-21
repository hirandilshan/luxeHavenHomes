<?php
session_start();
include_once'../../backend/user/dbs.php'; 


$type = $_POST['type'];
$id = $_POST['id'];


$sqlSelect = "SELECT * FROM requests WHERE id=$id;";
$result = mysqli_query($connect, $sqlSelect);

if (isset($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $name = $row["name"];
        $price = $row["price"];
        $type = $row["type"];
        $location = $row["location"];
        $discription = $row["discription"];
        $imagePathsStr = $row["img"];
        $phone = $row["phone"];
        $userName=$row["userName"];

        if ($type == 'apartments' || $type == 'cProperties') {
            $sqlUpload = "INSERT INTO houses (name,price,type,location,discription,img,phone) VALUES ('$name','$price','$type','$location','$discription','$imagePathsStr','$phone');";
        } else {
            $sqlUpload = "INSERT INTO $type (name,price,type,location,discription,img,phone) VALUES ('$name','$price','$type','$location','$discription','$imagePathsStr','$phone');";
        }
    
        if ($connect->query($sqlUpload) === TRUE) {
            echo "<script>alert('Uploading successful!'); window.location.href = '../../frontend/admin/manageAds/uploadAds.php';</script>";
            $sqlDelete = "DELETE FROM requests WHERE id=$id;";
            mysqli_query($connect, $sqlDelete);
        } else {
            echo "<script>alert('Uploading not successful!'); window.location.href = '../../frontend/admin/manageAds/uploadAds.php';</script>";
            echo "Error: " . $sqlUpload . "<br>" . $connect->error;
        }

    }
    // Free result set
    mysqli_free_result($result);
}



?>