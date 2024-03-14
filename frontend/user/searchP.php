<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/food.css">
    <link rel="stylesheet" href="../../css/searchPage.css">
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

    <div id="results">
        <ul id="matching-items"></ul>
    </div>
    <div class="choice">


        <div class="foods">
            <?php

            include_once '../../backend/user/dbs.php';  // Include your database connection file
            $sql = "SELECT * FROM foods";
            $result = mysqli_query($connect, $sql);



            while ($row = $result->fetch_assoc()) {
                // Access the data by column name

                $foodId = $row["foodId"];
                $item = $row["item"];
                $img = $row["img"];
                $price = $row["price"];

                echo '<div class="food-item">';
                echo "<img src='$img' alt='Food 1'>";
                echo "<h3> $item</h3>";
                echo "<h4>Rs $price</h4>";
                echo "<form method='POST' action='../../backend/user/cartP.php'>";
                echo "<input type='hidden' name='foodId' value='$foodId'>";
                echo "<input type='hidden' name='item' value='$item'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<button type='submit' name='addToCart'>Add to Cart</button>";
                echo "</form>";
                echo '</div>';
            }


            $connect->close();

            ?>
        </div><!--foods-->
        <script>
            function searchItems(searchQuery) {
                const lowerCaseSearchQuery = searchQuery.toLowerCase();
                const foodItems = document.querySelectorAll('.food-item');

                foodItems.forEach(item => {
                    const itemName = item.querySelector('h3').innerText.toLowerCase();
                    const itemDiv = item;

                    // Check if the item matches the search query
                    if (itemName.includes(lowerCaseSearchQuery)) {
                        itemDiv.style.display = 'block'; // Show the item
                    } else {
                        itemDiv.style.display = 'none'; // Hide the item
                    }
                });
            }

            // Assuming $Search is a PHP variable holding the search query
            searchItems('<?php echo $Search = $_POST['Search-box']; ?>');
        </script>

    </div>

    </div><!--wrapper-->
    <script src="../../frontend/user/search.js"></script>
    <script src="../../frontend/user/searchPage.js"></script>






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