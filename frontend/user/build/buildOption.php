<?php

session_start();
include_once '../../../backend/user/dbs.php';

$buildOption = $_POST['buildOption'];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/item.css">
    <link rel="shortcut icon" href="../../../images/luxeLogo.jpg" type="images/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Haven Homes</title>
    <meta name="viewport" content="width=device-width,initial-scal=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header">
            <div class="headerbar">
                <div class="account">
                    <ul>
                        <?php
                        if (isset($_SESSION['isUserLogedIn'])) {
                            echo '<li><a href="../../../backend/user/logoutP.php">Log Out</a></li>';
                        } else {
                            echo "<script>alert('please login!'); window.location.href = '../../../frontend/user/login.php';</script>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="nav">
                    <ul>
                        <a href="../../../frontend/user/contact.php">
                            <li>Contact</li>
                        </a>
                        <a href="../../../frontend/user/about.php">
                            <li>About</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="logo">
                <a href="../../../frontend/user/index.php"><img src="../../../images/luxeLogo.jpg" alt="" ,height="100" , width="50"></a>
            </div>
            <div class="nav">
                <ul>
                    <a href="../../../frontend/user/contact.php">
                        <li>Contact</li>
                    </a>
                    <a href="../../../frontend/user/about.php">
                        <li>About Us</li>
                    </a>
                </ul>
            </div>

            <div class="bar">
                <ul>
                    <a href="#">
                        <li>
                            <i class="material-icons" id="navbar-icon" style="color:white">&#xe5d2;</i>
                        </li>
                    </a>
                    <a href="">
                        <li>
                            <i class="material-icons" id="cancel" style="color:white">&#xe5c9;</i>
                        </li>
                    </a>
                </ul>
            </div>

            <div class="icon">
                <ul>
                    <?php
                    if (isset($_SESSION['isUserLogedIn'])) {
                        echo '<li><a href="../../../backend/user/logoutP.php">Log Out</a></li>';
                    } else {
                        echo "<script>alert('please login!'); window.location.href = '../../../frontend/user/login.php';</script>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>


    <div class="home">
        <div class="choice">
            <p><?php echo $buildOption ?></p>
            <div class="items">

                <?php
                include_once '../../../backend/user/dbs.php';
                $sql = "SELECT * FROM $buildOption;";
                $result = mysqli_query($connect, $sql);
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
                        $userName = $row["userName"];

                        $imagePaths = array();
                        $imagePaths = explode(",", $imagePathsStr);


                        echo '<div class="display-item">';
                        echo "<img src='$imagePaths[0]' alt='image'>";
                        echo "<h3>$name</h3>";
                        echo "<h4>Rs $price</h4>";
                        echo "<form method='POST' action='../displayAd/advertisement.php'>";
                        echo "<input type='hidden' name='type' value='$type'>";
                        echo "<input type='hidden' name='id' value='$id'>";
                        echo "<button type='submit' name='addToCart'>See More</button>";
                        echo "</form>";
                        echo '</div>';
                    }
                    // Free result set
                    mysqli_free_result($result);
                }
                ?>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-1">
            <div class="logo">
                <img src="../../../images/luxeLogo.jpg" alt="logo">
            </div>
            <div clss="social">
                <ul>
                    <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                    <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                    <li><a href="https://twitter.com/" class="fa fa-twitter"></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-11">
            <address>
                <h1>Support</h1>
                <a href="../buy/buyLands.php">
                    <p>Lands</p>
                </a>
                <a href="../buy/buyHouses.php">
                    <p>Houses</p>
                </a>
                <a href="../build.php">
                    <p>Construction equipments</p>
                </a>
                <a href="../build.php">
                    <p>Workers</p>
                </a>
                <a href="../build.php">
                    <p>Buyer's Guide</p>
                </a>
                <a href="../contact.php">
                    <p>Help Center</p>
                </a>
                <a href="../postAd/postAd.php">
                    <p>post Ads</p>
                </a>

            </address>
        </div>
        <div class="footer-111">
            <address>
                <h1>Company</h1>
                <a href="../contact.php">
                    <p>About Us</p>
                </a>
                <a href="../contact.php">
                    <p>Contact Us</p>
                </a>
                <p>Construction equipments</p>
                <p>Privacy policy</p>
                <p>Disclaimer</p>

            </address>
        </div>
        <div class="footer-1111">
            <address>
                <h1>Contact Info</h1>
                <p>Luxe Haven Homes(PVT)LTD</p>
                <p>+94 712456894</p>
                <p>+94 759825015</p>
                <p>info@LuxeHavenHomes.LK</p>
            </address>
        </div>

    </div>
    <div class="footer-2">
        <p>COPYRIGHT 2024 LUXE HAVEN HOMES HOLDING PVT LTD.<br>
            ALL RIGHTS RESERVED.<br>
            WEBSITE MAINTAINTENANCE BY R & Y </P>
    </div>
    <script src="../../../frontend/user/app.js"></script>

</body>

</html>