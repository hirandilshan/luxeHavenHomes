<?php

session_start();
include_once '../../../backend/user/dbs.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/index.css">
    <link rel="stylesheet" href="../../../css/food.css">
    <link rel="shortcut icon" href="../../../images/eatout logo.jpg" type="images/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAT OUT Restaurant</title>
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
                        if (isset($_SESSION['isLogedIn']) && $_SESSION['isLogedIn']) {
                            echo '<li><a href="../../../backend/user/logoutP.php">Log Out</a></li>';
                        } else {
                            echo '<li><a href="../../../frontend/user/signup.php">Sign up</a></li>';
                            echo '<li><a href="../../../frontend/user/login.php" id="loginLink" onclick="toggleLogin()">Login</a></li>';
                        }
                        ?>
                        <li><a href="../../../frontend/user/foodMenu.php">Order Now</a></li>
                        <li><a href="../../../backend/user/goToCart.php"><i class="material-icons">&#xe8cc;</i>
                            </a></li>


                        <a href="#">
                            <li>
                                <i class="material-icons" id="search-icon1">&#xe8b6;</i>
                            </li>
                        </a>

                    </ul>

                </div>
                <div class="nav">
                    <ul>
                        <a href="../../../frontend/user/serviceTypes.php">
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
                    if (isset($_SESSION['isLogedIn']) && $_SESSION['isLogedIn']) {
                        echo '<li><a href="../../../backend/user/logoutP.php">Log Out</a></li>';
                    } else {
                        echo '<li><a href="../../../frontend/user/signup.php">Sign up</a></li>';
                        echo '<li><a href="../../../frontend/user/login.php" id="loginLink" onclick="toggleLogin()">Login</a></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </header>

    <div class="home">
        <div class="form">
            <form method="POST" action="../../../backend/user/postAd.php" enctype="multipart/form-data">

                <label for="image1">Image 1:</label><br>
                <input type="file" id="image1" name="image[]"><br>

                <label for="image2">Image 2:</label><br>
                <input type="file" id="image2" name="image[]"><br>

                <label for="image3">Image 3:</label><br>
                <input type="file" id="image3" name="image[]"><br>

                <label for="image4">Image 4:</label><br>
                <input type="file" id="image4" name="image[]"><br>

                <label for="image5">Image 5:</label><br>
                <input type="file" id="image5" name="image[]"><br>

                <label for="name">Ad name:</label><br>
                <input type="text" id="name" name="name"><br>

                <label for="price">Price:</label><br>
                <input type="text" id="price" name="price"><br>

                <label for="location">Location:</label><br>
                <select id="location" name="location">
                    <option value="colombo">Colombo</option>
                    <option value="gampaha">Gampaha</option>
                    <option value="kandy">Kandy</option>
                    <option value="kegalle">Kegalle</option>
                </select><br>

                <label for="type">Type:</label><br>
                <select id="type" name="type">
                    <option value="houses">Houses</option>
                    <option value="lands">Lands</option>
                    <option value="furnitures">Furnitures</option>
                    <option value="accessories">Accessories</option>
                    <option value="tools">Tools</option>
                    <option value="profesionals">Profesionals</option>
                    <option value="supplements">Supplements</option>
                </select><br>

                <label for="description">Description:</label><br>
                <input type="text" id="description" name="description"><br>

                <label for="phone">Phone Number:</label><br>
                <input type="text" id="phone" name="phone"><br><br>

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

    <div class="footer">
        <div class="footer-1">
            <div class="logo">
                <img src="../../images/luxeLogo.jpg" alt="logo">
            </div>
            <div clss="social">
                <ul>
                    <li>

                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-11">
            <address>
                <h1>Support</h1>
                <p>Lands</p>
                <p>Houses</p>
                <p>Construction equipments</p>
                <p>Workers</p>
                <p>Buyer's Guide</p>
                <p>Help Center</p>
                <p>post Ads</p>

            </address>
        </div>
        <div class="footer-111">
            <address>
                <h1>Company</h1>
                <p>About Us</p>
                <p>Contact Us</p>
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
        <p>COPYRIGHT 2024 Luxe HAVEN HOMES HOLDING PVT LTD.<br>
            ALL RIGHTS RESERVED.<br>
            WEBSITE MAINTAINTENANCE BY R & Y </P>
    </div>
    <script src="../../frontend/user/app.js"></script>

</body>

</html>
