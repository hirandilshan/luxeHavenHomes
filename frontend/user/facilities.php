<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/facilities.css">
    <link rel="shortcut icon" href="../../images/eatout logo.jpg" type="images/x-icon">
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
                        <div class="search" id="searchinput1">
                            <form method="POST" action="../../frontend/user/searchP.php">
                                <input type="search" id="search-box" name="Search-box">

                                <button class="search_btn" type="submit" id="searchBtn">Search</button>




                            </form>
                        </div>
                    </ul>

                </div>
                <div class="nav">
                    <ul>
                        <a href="../../frontend/user/foodMenu.php">
                            <li>Food Menu</li>
                        </a>
                        <a href="../../frontend/user/serviceTypes.php">
                            <li>Service Types</li>
                        </a>
                        <a href="../../frontend/user/galary.php">
                            <li>Galary</li>
                        </a>
                        <a href="../../frontend/user/facilities.php">
                            <li>Facilities</li>
                        </a>
                        <a href="../../frontend/user/offers.php">
                            <li>Offers</li>
                        </a>
                        <a href="../../frontend/user/about.php">
                            <li>About</li>
                        </a>
                        <a href="../../frontend/user/reservation.php">
                            <li>Reservation</li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="logo">
                <a href="../../frontend/user/index.php"><img src="../../images/eatout logo.jpg" alt="" ,height="100" , width="50"></a>
            </div>
            <div class="nav">
                <ul>
                    <a href="../../frontend/user/foodMenu.php">
                        <li>Food Menu</li>
                    </a>
                    <a href="../../frontend/user/serviceTypes.php">
                        <li>Service Types</li>
                    </a>
                    <a href="../../frontend/user/galary.php">
                        <li>Galary</li>
                    </a>
                    <a href="../../frontend/user/facilities.php">
                        <li>Facilities</li>
                    </a>
                    <a href="../../frontend/user/offers.php">
                        <li>Offers</li>
                    </a>
                    <a href="../../frontend/user/about.php">
                        <li>About</li>
                    </a>
                    <a href="../../frontend/user/reservation.php">
                        <li>Reservation</li>
                    </a>
                </ul>
            </div>
            <div class="bar">
                <ul>
                    <a href="#">
                        <li>
                            <i class="material-icons" id="navbar-icon">&#xe5d2;</i>
                        </li>
                    </a>
                    <a href="">
                        <li>
                            <i class="material-icons" id="cancel">&#xe5c9;</i>
                        </li>
                    </a>
                </ul>
            </div>
            <form method="POST" action="../../frontend/user/searchP.php">
                <div class="search-input">
                    <div>
                        <input type="search" id="search-box" name="Search-box">

                        </a>
                    </div>
                    <button class="search_btn" type="submit" id="searchBtn">Search</button>
                </div>
            </form>
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
                    <li><a href="../../frontend/user/foodMenu.php">Order Now</a></li>
                    <li><a href="../../backend/user/goToCart.php"><i class="material-icons">&#xe8cc;</i>
                        </a></li>

                </ul>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="intro">
            <div class="intro-image">
                <img src="../../img/background.jpeg" alt="facility">
                <h1>Our Facilities</h1>
            </div>
        </div>

        <div class="facilities">
            <div class="facility">
                <img src="../../img/wifi.jpeg" alt="WiFi Icon">
                <div>
                    <h3>Free WiFi</h3>
                    <p>Stay connected with our high-speed WiFi while you dine.Whether it's for business or leisure, our WiFi service ensures you're always connected.</p>

                </div>
            </div>
            <div class="facility">
                <img src="../../img/parking.jpeg" alt="Parking Icon">
                <div>
                    <h3>Ample Parking</h3>
                    <p>Convenient and spacious parking for our valued guests.Never worry about finding a parking spot - we have ample space to accommodate all our patrons.</p>

                </div>
            </div>
            <div class="facility">
                <img src="../../img/outdoor.jpeg" alt="Outdoor Seating Icon">
                <div>
                    <h3>Outdoor Seating</h3>
                    <p>Enjoy the open air and great weather in our outdoor seating area.Perfect for a relaxed meal with friends and family while enjoying the outdoors.</p>

                </div>
            </div>
            <div class="facility">
                <img src="../../img/private.jpeg" alt="Private Dining Icon">
                <div>
                    <h3>Private Dining</h3>
                    <p>Book our private dining area for special events and gatherings. Ideal for special occasions, gatherings, and private events with personalized service.</p>

                </div>
            </div>
            <div class="facility">
                <img src="../../img/bar.jpeg" alt="Bar Icon">
                <div>
                    <h3> Bar</h3>
                    <p>Enjoy a variety of drinks and cocktails at our full-service bar.Our skilled bartenders craft the perfect drinks to complement your dining experience.</p>

                </div>
            </div>
        </div>

    </div>




    <div class="footer">
        <div class="footer-1">
            <div class="logo">
                <img src="../../images/eatout logo.jpg" alt="">
            </div>
            <div>
                <address>
                    <p>Email:hirannishshanka@gmail.com</p>
                    <p>GitHub: <a href="https://github.com/hirandilshan">hirandilshan</a></p>
                    <p>Mr.Hiran Nishshanka,<br>Kegalle,<br>SriLanka.</p>
                </address>
            </div>
        </div>
        <div class="footer-2">
            <img src="../../images/download.jpeg" alt="">
            <h2>Powered by <em>HD Creations</em></h2>
        </div>
    </div>
    <script src="app.js"></script>
    <script src="../../frontend/user/search.js"></script>
</body>

</html>