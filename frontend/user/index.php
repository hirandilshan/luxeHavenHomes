<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" href="../../images/luxeLogo.jpg" type="images/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Haven Homes</title>
    <meta name="viewport" content="width=device-width,initial-scal=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>

<body>
    <header>
        <div class="header">
            <div class="headerbar">
                <div class="account">
                    <ul>
                    <div class="logo">
                <a href="../../frontend/user/index.php"><img src="../../images/luxeLogo.jpg" alt="" ,height="100" , width="50"></a>
            </div>
                    <?php
                    if (isset($_SESSION['isUserLogedIn'])) {
                        echo '<li><a href="../../backend/user/logoutP.php">Log Out</a></li>';
                    } else {
                        echo "<script>alert('please login!'); window.location.href = '../../frontend/user/logIn.php';</script>";
                    }
                    ?> 
                    </ul>
                </div>
                <div class="nav">
                    <ul>
                        <a href="../../frontend/user/contact.php">
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
                    if (isset($_SESSION['isUserLogedIn'])) {
                        echo '<li><a href="../../backend/user/logoutP.php">Log Out</a></li>';
                    } else {
                        echo "<script>alert('please login!'); window.location.href = '../../frontend/user/logIn.php';</script>";
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
           
            <a href="buy/buyLands.php">
                <h2>Buy<br>Land</h2>
                <img src="../../images/land1.jpg" alt="Land">
            </a>
        </div><!--Section-->

        <div class="section">
            
            <a href="buy/buyHouses.php">
            <h2>Buy<br>House</h2>
                <img src="../../images/house1.jpg" alt="House">
            </a>

        </div><!--Section-->

        <div class="section">
            
            <a href="build/build.php">
            <h2>Build</h2>
                <img src="../../images/tools11.jpg" alt="Build">
            </a>
        </div><!--Section-->

        <div class="section">

            
            <a href="postAd/postAd.php">
            <h2>Post<br>Ad</h2>

                <img src="../../images/ad1.jpg" alt="Ads">
            </a>
        </div><!--Section-->   
    </div>
    <div class="extra">
        <img src="../../images/intro.jpeg" alt="intro">
        <h2>WHY <span>LUXE HAVEN HOMES</span> IS NUMBER ONE ?</h2>
        <p>Everyone aspires to own a great piece of property. We, at Luxe Haven Homes, made it our aim to make this dream a reality.
             Assume you wish to buy land,buy house,building equipments to gives for you and your family. <br>Luxe Haven Homes provide you with a selection of the most excellents in the country, as well as a variety of support services, such as legal and financial assistance, to help you realize your property dreams. <br>In Sri Lanka's highly competitive real estate market, Luxe Haven Homes acquired over 300,000 customers, sufficient proof of Luxe Haven Homes' capacity and leadership in the real estate industry. </p>
        <h2>THE BEST LANDS AND HOUSES BY LUXE HAVEN HOMES; THE LEADING REAL ESTATE COMPANY IN SRI LANKA!</h2>
        <p>If you are looking for the ideal piece of land for sale to build your dream home or maybe even a built and ready house for sale to start the next steps of your life, 
            then Luxe Haven Homes is your best option when it comes to real estate companies in Sri Lanka! We have been in the Sri Lankan real estate industry for 27 years, and our land specialists are waiting to assist you with whatever your real estate needs are, 
            whether you are a land buyer in Sri Lanka or someone looking for residential or commercial property.</p>
        <p>As one of the leading real estate companies in the market, we have a vast range of beautiful lands in idyllic 
            locations, spread across 18 districts around the country, as well as architect designed houses in varying price
             ranges, sizes, and designs for you to choose from. Whether you are looking for your family’s future residence or 
             looking for an investment opportunity,Luxe Haven Homes can help you acquire the best real estate in Sri Lanka.</p>
    </div>

    <div class="footer">
        <div class="footer-1">
            <div class="logo">
                <img src="../../images/luxeLogo.jpg" alt="logo">
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
                <a href="buy/buyLands.php"><p>Lands</p></a>
                <a href="buy/buyHouses.php"><p>Houses</p></a>
                <a href="build.php"><p>Construction equipments</p></a>
                <a href="build.php"><p>Workers</p></a>
                <a href="build.php"><p>Buyer's Guide</p></a>
                <a href="contact.php"><p>Help Center</p></a>
                <a href="postAd/postAd.php"><p>post Ads</p></a>
                    
            </address>
        </div>
        <div class="footer-111">
            <address>
                <h1>Company</h1>
                <a href="contact.php"><p>About Us</p></a>
                <a href="contact.php"><p>Contact Us</p></a>
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
    <script src="../../frontend/user/app.js"></script>
    
</body>

</html>