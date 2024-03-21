<?php

session_start();
include_once '../../../backend/user/dbs.php'; 

if(isset($_POST['submit'])) {

    // Retrieve form data
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? '';
    $location = $_POST['location'] ?? '';
    $type = $_POST['type'] ?? '';
    $discription = $_POST['discription'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $userName=$_SESSION['userName'];

    // Array to store uploaded file paths
    $imagePaths = array();

    // Directory to store uploaded images
    $targetDirectory = "../../../images/";

    // Loop through each uploaded file
    foreach($_FILES['image']['tmp_name'] as $key => $tmp_name) {

        // Check if file is uploaded successfully
        if(isset($_FILES['image']['name'][$key]) && $_FILES['image']['error'][$key] === UPLOAD_ERR_OK) {

            // Generate a unique file name
            $targetFile = $targetDirectory . uniqid() . '_' . basename($_FILES['image']['name'][$key]);

            // Move uploaded file to destination directory
            if(move_uploaded_file($_FILES['image']['tmp_name'][$key], $targetFile)) {
                $imagePaths[] = $targetFile; // Store file path if upload is successful
            } else {
                echo "File upload failed for ".$_FILES['image']['name'][$key]."<br>";
                echo "Error code: ".$_FILES['image']['error'][$key]."<br>";
            }
        } else {
            echo "File upload failed for ".$_FILES['image']['name'][$key]."<br>";
            echo "Error code: ".$_FILES['image']['error'][$key]."<br>";
        }
    }

    // Convert array of image paths to comma-separated string
    $imagePathsStr = implode(",", $imagePaths);

    // Insert data into database
    $insert_sql = "INSERT INTO requests (name, price, type, location, discription, img, phone,userName) 
                   VALUES ('$name', '$price', '$type', '$location', '$discription', '$imagePathsStr', '$phone',$userName)";
    
    if ($connect->query($insert_sql) === TRUE) {
        echo "<script>alert('submition successful!');window.location.href = '../../../frontend/user/index.php';</script>";
    } else {
        echo "<script>alert('submition not successful!'); window.location.href = '../../../frontend/user/postAd/postAd.php';</script>";
        echo "Error: " . $insert_sql . "<br>" . $connect->error;
    }

} else {
    // Form not submitted
    echo "<script>alert('Form not submitted!'); window.location.href = '../../../frontend/user/postAd/postAd.php';</script>";
}

// Close database connection
$connect->close();

?>
