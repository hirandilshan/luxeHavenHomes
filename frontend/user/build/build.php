<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/build.css">
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
                            echo "<script>alert('please login!'); window.location.href = '../../../frontend/user/login.php';</script>";
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
                        echo "<script>alert('please login!'); window.location.href = '../../../frontend/user/login.php';</script>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>

    <div class= "home">
        <div class="top">
            <h1>BUILD WITH US?</h1>
        </div>
        <div class="menus">

            <div class="sections">
                <form action="../../../frontend/user/build/buildOption.php" method="post">
                    <h2>Workers</h2>
                    <input type='hidden' name='buildOption' value='workers'>
                    <button type='submit' name='buildOptionButton'><img src="../../../images/workers.jpg" alt="House"></button>
                </form>
            </div><!--Section-->


            <div class="sections">
                <form action="../../../frontend/user/build/buildOption.php" method="post">
                    <h2>Profesionals</h2>
                    <input type='hidden' name='buildOption' value='profesionals'>
                    <button type='submit' name='buildOptionButton'><img src="../../../images/concultant.png" alt="House"></button>
                </form>
            </div><!--Section-->

            <div class="sections">
                <form action="../../../frontend/user/build/buildOption.php" method="post">
                    <h2>Tools</h2>
                    <input type='hidden' name='buildOption' value='tools'>
                    <button type='submit' name='buildOptionButton'><img src="../../../images/buildd.jpg" alt="House"></button>
                </form>
            </div><!--Section-->

            <div class="sections">
                <form action="../../../frontend/user/build/buildOption.php" method="post">
                    <h2>Supplements</h2>
                    <input type='hidden' name='buildOption' value='supplements'>
                    <button type='submit' name='buildOptionButton'><img src="../../../images/supply1.jpg" alt="House"></button>
                </form>
            </div><!--Section-->

            <div class="sections">
                <form action="../../../frontend/user/build/buildOption.php" method="post">
                    <h2>Accessories</h2>
                    <input type='hidden' name='buildOption' value='accessories'>
                    <button type='submit' name='buildOptionButton'><img src="../../../images/accs1.jpg" alt="House"></button>
                </form>
            </div><!--Section-->

            <div class="sections">
                <form action="../../../frontend/user/build/buildOption.php" method="post">
                    <h2>Furnitures</h2>
                    <input type='hidden' name='buildOption' value='furnitures'>
                    <button type='submit' name='buildOptionButton'><img src="../../../images/furnicher1.jpg" alt="House"></button>
                </form>
            </div><!--Section-->


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