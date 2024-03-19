<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="shortcut icon" href="../../images/luxeLogo.jpg" type="images/x-icon">
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
                        if (isset($_SESSION['isLogedIn']) && $_SESSION['isLogedIn']) {
                            echo '<li><a href="../../backend/user/logoutP.php">Log Out</a></li>';
                        } else {
                            echo '<li><a href="../../frontend/user/signup.php">Sign up</a></li>';
                            echo '<li><a href="../../frontend/user/login.php" id="loginLink" onclick="toggleLogin()">Login</a></li>';
                        }
                        ?>
                        <li><a href="../../frontend/user/foodMenu.php">Order Now</a></li>
                        <li><a href="../../backend/user/goToCart.php"><i class="material-icons">&#xe8cc;</i>
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
                        <a href="../../frontend/user/serviceTypes.php">
                            <li>Contact</li>
                        </a>
                        
                        <a href="../../frontend/user/about.php">
                            <li>About</li>
                        </a>                       
                    </ul>
                </div>
            </div>
            <div class="logo">
                <a href="../../frontend/user/index.php"><img src="../../images/luxeLogo.jpg" alt="" ,height="100" , width="50"></a>
            </div>
            <div class="nav">
                <ul>
                    <a href="../../frontend/user/contact.php">
                        <li>Contact</li>
                    </a>
                    <a href="../../frontend/user/about.php">
                        <li>About Us</li>
                    </a>
                    <a href="../../frontend/user/about.php">
                        <li>Logout</li>
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
                        echo '<li><a href="../../backend/user/logoutP.php">Log Out</a></li>';
                    } else {
                        echo '<li><a href="../../frontend/user/signup.php">Sign up</a></li>';
                        echo '<li><a href="../../frontend/user/login.php" id="loginLink" onclick="toggleLogin()">Login</a></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </header>
    <div class="home">
        <div class="main_slide">
            <div>
                <h1>Set New Stndards<br>in <span>Modern Home</span><br>Constructions</h1>
              
            </div>
            <div>
                <img src="../../images/h2.png" alt="house1s">
            </div>
        </div>
    </div>
    <div class="menu">
        <h1>What are you looking for?</h1>
        <div class="section">
            <h2>Buy<br>Land</h2>
            <a href="buy/buyLands.php">
                <img src="../../images/landd.jpg" alt="Land">
            </a>
        </div><!--Section-->

        <div class="section">
            <h2>Buy<br>House</h2>
            <a href="buy/buyHouses.php">
                <img src="../../images/h8.jpg" alt="House">
            </a>

        </div><!--Section-->

        <div class="section">
            <h2>Build</h2>
            <a href="build/build.php">
                <img src="../../images/buildd.jpg" alt="Build">
            </a>
        </div><!--Section-->

        <div class="section">

            <h2>Post<br>Advertisement</h2>
            <a href="postAd/postAd.php">

                <img src="../../images/ad.png" alt="Ads">
            </a>
        </div><!--Section-->   
    </div>
    <div class="About">
        <h3>About Us</h3>
        <img src="" alt="">

        <img src="" alt="">
    </div>

    <div class="footer">
        <div class="footer-1">
            <div class="logo">
                <img src="../../images/luxeLogo.jpg" alt="logo">
            </div>
            <div clss="social">
                <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
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