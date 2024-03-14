<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/cart.css">
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
        <div class="cart-container">
            <?php
            include_once '../../backend/user/dbs.php';

            $userName = $_SESSION['userName'];

            $sql = "SELECT * FROM cart WHERE userName='$userName';";
            $result = mysqli_query($connect, $sql);

            echo '<table>';
            echo '<tr><th>Food ID</th><th>Item</th><th>Price</th><th>(-)</th><th>Number of Items</th><th>(+)</th><th>Remove</th></tr>';

            $total = 0;

            while ($row = $result->fetch_assoc()) {
                $foodId = $row["foodId"];
                $item = $row["item"];
                $price = $row["price"];
                $numOfItems = $row["numOfItems"];

                $itemTotal = $price * $numOfItems;
                $total += $itemTotal;

                echo '<tr>';
                echo "<td>$foodId</td>";
                echo "<td>$item</td>";
                echo "<td>$price</td>";
                echo "<td>";
                echo "<form method='POST' action='../../backend/user/reductFromCart.php'>";
                echo "<input type='hidden' name='foodId' value='$foodId'>";
                echo "<button type='submit' name='minus'>(-)</button>";
                echo "</form>";
                echo "</td>";
                echo "<td>$numOfItems</td>";
                echo "<td>";
                echo "<form method='POST' action='../../backend/user/addFromCart.php'>";
                echo "<input type='hidden' name='foodId' value='$foodId'>";
                echo "<button type='submit' name='plus'>(+)</button>";
                echo "</form>";
                echo "</td>";
                echo "<td>";
                echo "<form method='POST' action='../../backend/user/removeFromCart.php'>";
                echo "<input type='hidden' name='foodId' value='$foodId'>";
                echo "<button type='submit' name='remove'>Remove</button>";
                echo "</form>";
                echo "</td>";
                echo '</tr>';
            }

            echo '</table>';
            echo '<h2>Your Cart</h2>';
            echo '<div class="cart-items"></div>';
            echo '<div class="total">';
            echo '<h3>Total:</h3>';
            echo "<p id='cart-total'>$total</p>";
            echo '</div>';
            echo '<button id="checkout-btn" disabled>Proceed to Checkout</button>';
            ?>


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