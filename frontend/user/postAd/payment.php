<?php

session_start();
include_once '../../../backend/user/dbs.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/payment.css">
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
                            echo "<script>alert('please login!'); window.location.href = '../../../frontend/user/logIn.php';</script>";
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
                        echo "<script>alert('please login!'); window.location.href = '../../../frontend/user/logIn.php';</script>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="requests-container">
            <?php
            include_once '../../../backend/user/dbs.php';

            $userName = $_SESSION['userName'];

            $sql = "SELECT * FROM requests WHERE userName='$userName';";
            $result = mysqli_query($connect, $sql);

            echo '<table>';
            echo '<tr><th>Request ID</th><th>Name</th><th>Price</th><th>(-)</th><th>Number of Days</th><th>(+)</th><th>Remove</th></tr>';

            $total = 0;

            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $name = $row["name"];
                $price = $row["price"];
                
                $numOfDays = $row["numOfDays"];

                $itemTotal = 200 * $numOfDays;
                $total += $itemTotal;

                echo '<tr>';
                echo "<td>$id</td>";
                echo "<td>$name</td>";
                echo "<td>$price</td>";
                echo "<td>";
                echo "<form method='POST' action='../../../backend/user/postAd/reduceDays.php'>";
                echo "<input type='hidden' name='id' value='$id'>";
                echo "<button type='submit' name='minus'>(-)</button>";
                echo "</form>";
                echo "</td>";
                echo "<td>$numOfDays</td>";
                echo "<td>";
                echo "<form method='POST' action='../../../backend/user/postAd/increseDays.php'>";
                echo "<input type='hidden' name='id' value='$id'>";
                echo "<button type='submit' name='plus'>(+)</button>";
                echo "</form>";
                echo "</td>";
                echo "<td>";
                echo "<form method='POST' action='../../../backend/user/postAd/removeRequest.php'>";
                echo "<input type='hidden' name='id' value='$id'>";
                echo "<button type='submit' name='remove'>Remove</button>";
                echo "</form>";
                echo "</td>";
                echo '</tr>';
            }

            echo '</table>';
            echo '<h2>Your Requests</h2>';
            echo '<div class="request-items"></div>';
            echo '<div class="total">';
            echo '<h3>Total:</h3>';
            echo "<p id='cart-total'>$total</p>";
            echo '</div>';
            echo '<button id="checkout-btn" disabled>Payment</button>';
            ?>


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
                <a href="../buy/buyLands.php"><p>Lands</p></a>
                <a href="../buy/buyHouses.php"><p>Houses</p></a>
                <a href="../build.php"><p>Construction equipments</p></a>
                <a href="../build.php"><p>Workers</p></a>
                <a href="../build.php"><p>Buyer's Guide</p></a>
                <a href="../contact.php"><p>Help Center</p></a>
                <a href="../postAd/postAd.php"><p>post Ads</p></a>
                    
            </address>
        </div>
        <div class="footer-111">
            <address>
                <h1>Company</h1>
                <a href="../contact.php"><p>About Us</p></a>
                <a href="../contact.php"><p>Contact Us</p></a>
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
           WEBSITE MAINTAINTENANCE BY R & Y  </P>
        </div>
    <script src="../../../frontend/user/app.js"></script>

</body>

</html>