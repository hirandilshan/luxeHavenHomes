<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="shortcut icon" href="../../images/luxeLogo.jpg" type="images/x-icon">
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
                if (isset($_SESSION['isUserLogedIn']) && $_SESSION['isUserLogedIn']) {
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
            if (isset($_SESSION['isUserLogedIn']) && $_SESSION['isUserLogedIn']) {
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
    <div class="about">
        <div class="intro">
            <div class="intro-image">
                <h1>About Us</h1>
            </div>
            <div class="intro-text">
                <h2>"Celebrating flavors, crafting experiences, and creating memories – welcome to our culinary journey, where passion meets the plate."</h2>
            </div>
        </div>
        <div class="content">
            <div class="Content1">
                <h2>Our Story</h2>
                <p>1988 nestled amidst the bustling streets of Colombo, Sri Lanka, a culinary dream took shape. It was a dream fueled by a passion for authentic flavors, a desire to celebrate the rich tapestry of Sri Lankan cuisine, and a vision to create a dining haven where memories would be woven through the magic of food.<br>

                    <br>Our story begins with a group of food enthusiasts, each with their own unique connection to the diverse culinary heritage of Sri Lanka. They were bound by a shared love for the aromatic spices, vibrant colors, and bold flavors that define this beautiful island nation's food culture.

                    Drawing upon their collective experiences and a deep-rooted appreciation for traditional recipes handed down through generations, they envisioned a restaurant that would be a tribute to Sri Lanka's gastronomic legacy. Thus, EAT OUT was born.<br>

                    <br>Every dish on our menu is a labor of love, crafted with precision and infused with the warmth of our cherished family recipes. We scoured the island, sourcing the finest, freshest ingredients from local farmers and markets, ensuring that every bite tells a story of Sri Lanka's diverse landscapes and culinary traditions.

                    From the bustling streets of Colombo to the serene shores of the southern coast, from the lush hills of Kandy to the spicy aromas of Jaffna, our menu is a culinary expedition through the heart and soul of Sri Lanka. It's a journey that pays homage to the fishermen, farmers, and spice merchants who have shaped our culinary identity.<br>

                    <br>At EAT OUT, we believe in more than just serving food; we believe in sharing experiences. Our aim is to transport you to the heart of Sri Lanka with every dish, where you can savor the essence of our culture and feel the warmth of our hospitality.

                    Join us on this gastronomic adventure, where the flavors of Sri Lanka come to life, and every meal is a celebration of heritage and authenticity. Come, be a part of our story, and let us enchant your senses with the tastes of our beloved island.
                </p>
            </div>
            <div class="content2">
                <div class="first">
                    <img src="../../images/mission1.png" alt="Mission">
                    <div>
                        <h2>Our Mission</h2>
                        <p>"Our mission at EAT OUT is to redefine Sri Lankan gastronomy by blending traditional flavors with modern innovation. We strive to offer a remarkable dining experience, showcasing the rich cultural heritage of Sri Lanka through our diverse and authentic culinary creations. With a focus on quality, sustainability, and community engagement, we aim to delight every palate while contributing to the enrichment of our local food industry and fostering a sense of culinary pride in our nation."</p>

                    </div>


                </div>
                <div class="secound">
                    <div>
                        <h2>Our Vision</h2>
                        <p>"At EAT OUT, our vision is to become the epitome of Sri Lankan culinary excellence on a global stage. We aspire to be the preferred choice for those seeking an authentic taste of Sri Lanka, known for our unwavering commitment to quality, innovation, and sustainability. Through continuous growth and expansion, we envision creating a network of restaurants that serve as ambassadors of Sri Lankan culture and cuisine, delighting patrons with every bite and leaving an indelible mark on the world's gastronomic map. Our aim is to celebrate the diverse flavors of Sri Lanka while fostering a deep sense of pride and connection to our roots, both locally and internationally."</p>

                    </div>
                    <img src="../../images/vision1.jpg" alt="Vision">
                </div>
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
    <script src="app.js"></script>
    
</body>

</html>