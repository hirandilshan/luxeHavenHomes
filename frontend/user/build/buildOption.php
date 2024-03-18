<?php

session_start();
include_once '../../../backend/user/dbs.php'; 

$buildOption = $_POST['buildOption'];


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
                            <i class="material-icons" id="navbar-icon"style="color:white">&#xe5d2;</i>
                        </li>
                    </a>
                    <a href="">
                        <li>
                            <i class="material-icons" id="cancel"style="color:white">&#xe5c9;</i>
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
        <div class="choice">
            <p><?php echo $buildOption ?></p>
            <div class="foods">

                <?php
                include_once '../../../backend/user/dbs.php';
                $sql = "SELECT * FROM $buildOption;";
                $result = mysqli_query($connect, $sql);
                if (isset($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                        $Ad_id = $row["Ad_id"];
                        $Ad_name = $row["Ad_name"];
                        $Ad_price = $row["Ad_price"];
                        $Ad_type = $row["Ad_type"];
                        $Ad_location = $row["Ad_location"];
                        $Ad_discription = $row["Ad_discription"];
                        $Ad_img = $row["Ad_img"];
                        

                        echo '<div class="food-item">';
                        echo "<img src='$Ad_img' alt='Image'>";
                        echo "<h3>$Ad_name</h3>";
                        echo "<h4>Rs $Ad_price</h4>";
                        echo "<form method='POST' action='../../../backend/user/cartP.php'>";
                        echo "<input type='hidden' name='Ad_id' value='$Ad_id'>";
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
           WEBSITE MAINTAINTENANCE BY R & Y  </P>
        </div>
    <script src="../../frontend/user/app.js"></script>
    
</body>

</html>