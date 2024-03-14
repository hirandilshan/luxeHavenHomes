<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
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
                        <a href="../../frontend/admin/adminHome.php">
                            <li>Home</li>
                        </a>
                        <a href="../../frontend/admin/manageReservation.php">
                            <li>Manage Reservation</li>
                        </a>
                        <a href="../../frontend/admin/manageFood.php">
                            <li>Manage Food Items</li>
                        </a>
                        <a href="../../frontend/admin/manageReview.php">
                            <li>Customer Reviews</li>
                        </a>
                    </ul>
                </div>
            </div>

            <div class="logo">
                <a href="../../frontend/admin/adminHome.php"><img src="../../images/eatout logo.jpg" alt="" ,height="100" , width="50"></a>
            </div>
            <div class="nav">
                <ul>
                    <a href="../../frontend/admin/adminHome.php">
                        <li>Home</li>
                    </a>
                    <a href="../../frontend/admin/manageReservation.php">
                        <li>Manage Reservation</li>
                    </a>
                    <a href="../../frontend/admin/manageFood.php">
                        <li>Manage Food Items</li>
                    </a>
                    <a href="../../frontend/admin/manageReview.php">
                        <li>Customer Reviews</li>
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


    <?php
    include_once '../../backend/user/dbs.php';  // Include your database connection file




    echo "<div class='forms'>";
    echo "<div class='form-details'>";
    echo "<h2>Add New Food</h2>";
    echo "<div class='form-content'>";

    echo "<form method='POST' action='../../backend/admin/addFoodP.php'>";
    echo "<div class='inputs'>";
    echo "<input type='text' name='foodId' placeholder='foodId' required>";
    echo "<label>Food Id</label>";
    echo "</div>";
    echo "<div class='inputs'>";
    echo "<input type='text' name='foodType' placeholder='food type' required>";
    echo "<label>Food Type</label>";
    echo "</div>";
    echo "<div class='inputs'>";
    echo "<input type='text' name='item' placeholder='foodName' required>";
    echo "<label>Food Name</label>";
    echo "</div>";
    echo "<div class='inputs'>";
    echo "<input type='text' name='img' placeholder='imgLink' required >";
    echo "<label>Image Link</label>";
    echo "</div>";
    echo "<div class='inputs'>";
    echo "<input type='double' name='price' placeholder='price' required>";
    echo "<label>Price</label>";
    echo "</div>";

    echo "<button type='submit' name='add'>Add</button>";
    echo "</form>";
    echo "</div>";

    echo "</div>";
    ?>
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
</body>

</html>