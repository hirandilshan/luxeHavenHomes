<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/reservation.css">
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
                            <a href="../../frontend/user/searchpage.php">
                                <input type="search" id="search-box" name="Search-box">
                            </a>
                            <i class="material-icons">&#xe8b6;</i>
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
            <div class="search-input">
                <div>
                    <a href="../../frontend/user/searchpage.php">
                        <input type="search" id="search-box" name="Search-box">
                    </a>
                </div>
                <button class="search_btn">Search</button>
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
                    <li><a href="../../frontend/user/foodMenu.php">Order Now</a></li>
                    <li><a href="../../backend/user/goToCart.php"><i class="material-icons">&#xe8cc;</i>
                        </a></li>

                </ul>
            </div>
        </div>
    </header>

    <div class="content">
        <div class="forms">

            <div class="form-details">
                <h2>Make Reservations</h2>
                <p>Fill the date and time for the reservation.</p>
            </div>
            <div class="form-content">
                <form action="../../backend/user/process_booking.php" method="post">
                    <label>Date:</label>
                    <div class="inputs">

                        <input type="date" name="date" required><br>
                    </div>
                    <label>Time:</label>
                    <div class="inputs">

                        <input type="radio" id="time1" name="time" value="09:00:00">
                        <label for="time1">9 - 10</label><br>
                    </div>
                    <div class="inputs">
                        <input type="radio" id="time2" name="time" value="10:00:00">
                        <label for="time2">10 - 11</label><br>
                    </div>
                    <div class="inputs">
                        <input type="radio" id="time3" name="time" value="11:00:00">
                        <label for="time3">11 - 12</label><br>
                    </div>
                    <div class="inputs">
                        <input type="radio" id="time1" name="time" value="12:00:00">
                        <label for="time1">12 - 1</label><br>
                    </div>
                    <div class="inputs">
                        <input type="radio" id="time2" name="time" value="13:00:00">
                        <label for="time2">1 - 2</label><br>
                    </div>
                    <div class="inputs">
                        <input type="radio" id="time3" name="time" value="14:00:00">
                        <label for="time3">2 - 3</label><br>
                    </div>
                    <div class="inputs">
                        <input type="radio" id="time1" name="time" value="15:00:00">
                        <label for="time1">3 - 4</label><br>
                    </div>
                    <div class="inputs">
                        <input type="radio" id="time2" name="time" value="16:00:00">
                        <label for="time2">4 - 5</label><br>
                    </div>
                    <div class="inputs">
                        <input type="radio" id="time3" name="time" value="17:00:00">
                        <label for="time3">5 - 6</label><br><br>
                    </div>
                    <div class="inputs">
                        <label for="tables">Table Number:</label>
                        <select id="tables" name="tables">
                            <option value="001">001</option>
                            <option value="002">002</option>
                            <option value="003">003</option>
                            <option value="004">004</option>
                            <option value="005">005</option>
                            <option value="006">006</option>
                            <option value="007">007</option>
                            <option value="008">008</option>
                            <option value="009">009</option>
                            <option value="010">010</option>
                            <option value="011">011</option>
                            <option value="012">012</option>
                        </select> <br>
                    </div>
                    <button type="submit" value="Submit">Book Now</button>
                </form>

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
    <script src="../../frontend/user/app.js"></script>
    <script src="../../frontend/user/search.js"></script>
</body>

</html>