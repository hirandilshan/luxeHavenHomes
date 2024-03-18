<?php
session_start();
include_once '../../../backend/user/dbs.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    // Sanitize and validate inputs (you should add proper validation)
    $location = mysqli_real_escape_string($connect, $_POST['location']);
    $propertyType = mysqli_real_escape_string($connect, $_POST['propertyType']);
    $minPrice = mysqli_real_escape_string($connect, $_POST['minPrice']);
    $maxPrice = mysqli_real_escape_string($connect, $_POST['maxPrice']);

    if ($maxPrice == "unlimited") {
        $sql = "SELECT * FROM houses WHERE location='$location'AND price> $minPrice AND Type= '$propertyType';";
    } else {
        $sql = "SELECT * FROM houses WHERE location='$location'AND price> $minPrice AND price <$maxPrice AND Type='$propertyType';";
    }

    $result = mysqli_query($connect, $sql);
} else {
    $sql = "SELECT * FROM houses;";
    $result = mysqli_query($connect, $sql);
}

mysqli_close($connect);
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
        <div class="choice">
            <p>Buy Houses</p>
            <div class="foods">
                <div class="search">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <label for="location">Location</label>
                        <select id="location" name="location">
                            <option value="colombo">Colombo</option>
                            <option value="gampaha">Gampaha</option>
                            <option value="kandy">Kandy</option>
                            <option value="kegalle">Kegalle</option>
                        </select>
                        <label for="propertyType">Property Type</label>
                        <select id="propertyType" name="propertyType">
                            <option value="houses">Houses</option>
                            <option value="apartments">Apartments</option>
                            <option value="cProperties">commeritial property</option>

                        </select>
                        <label for="minPrice">Minimum Price</label>
                        <select id="minPrice" name="minPrice">
                            <option value="0">0</option>
                            <option value="1000000">1000000</option>
                            <option value="5000000">5000000</option>
                            <option value="10000000">10000000</option>
                        </select>
                        <label for="maxPrice">Maximum Price</label>
                        <select id="maxPrice" name="maxPrice">
                            <option value="1000000">1000000</option>
                            <option value="5000000">5000000</option>
                            <option value="10000000">10000000</option>
                            <option value="unlimited">unlimited</option>
                        </select>
                        <button type="submit" name="search">Search</button>
                    </form>
                </div>

                <?php
                if (isset($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        $name = $row["name"];
                        $price = $row["price"];
                        $type = $row["type"];
                        $location = $row["location"];
                        $discription = $row["discription"];
                        $img = $row["img"];
                        $phone = $row["phone"];
                        

                        echo '<div class="food-item">';
                        echo "<img src='$img' alt='Land Image'>";
                        echo "<h3>$name</h3>";
                        echo "<h4>Rs $price</h4>";
                        echo "<form method='POST' action='../../frontend/user/advertisement.php'>";
                        echo "<input type='hidden' name='type' value='houses'>";
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