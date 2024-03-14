<?php

//session_start();

$dbServerName = "localhost:3307";
$dbUserName = "root";
$dbPassword = "";
$dbName = "resturent";

$connect = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>