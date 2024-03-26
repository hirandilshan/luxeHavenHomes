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
                        echo '<li><a href="../../backend/user/logoutP.php">Log Out</a></li>';
                    } else {
                        echo "<script>alert('please login!'); window.location.href = '../../frontend/user/logIn.php';</script>";
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
                <h2>"Welcome to Luxe Haven Homes – Your Gateway to Exceptional Living"</h2>
            </div>
        </div>
        <div class="content">
            <div class="Content1">
                <h2>Our Story</h2>
                <p> Luxe Haven Homes stands as the forefront of Sri Lanka's real estate market, offering a cutting-edge online platform showcasing the latest properties and construction needful across the country. Our mission is to revolutionize the local real estate industry, providing all our services throughout the island. We actively encourage users to leverage our platform to advertise their properties, construction needful and homewares experiencing firsthand the innovative disruption we bring to Sri Lanka's online real estate scene. Whether you're looking to sell, rent, or buy, Luxe Haven Homes facilitates these process at no difficulties. With a loyal user base, we're expecting to be the premier destination for property, homeware listings and construction needful rentals in the country. Our ultimate goal is to assist everyone in finding their ideal home.<br>
                    Founded on a vision to revolutionize the real estate landscape, Luxe Haven Homes emerged as a beacon of innovation, integrity, and excellence. Our journey began with a simple yet profound aspiration – to create spaces that transcend the ordinary, where luxury, comfort, and sophistication converge seamlessly.<br>
                    Driven by a passion for crafting exceptional living experiences, Luxe Haven Homes was established with a commitment to elevate the standards of modern living. Guided by this ethos, we embarked on a quest to redefine the very essence of luxury real estate, setting new benchmarks in design, quality, and customer service.<br>
                    With unwavering dedication and a relentless pursuit of excellence, Luxe Haven Homes quickly earned a reputation as a trusted name in the industry. From our humble beginnings, we have grown exponentially, expanding our reach and portfolio to cater to the diverse needs and aspirations of our discerning clientele.<br>
                    At the heart of our success lies a team of dedicated professionals, united by a shared vision and a collective commitment to excellence. From our visionary leaders to our skilled architects, designers, and customer care specialists, each member of the Luxe Haven family plays a pivotal role in shaping our company's legacy of excellence.<br>
                    But our story is not just about buildings and properties – it's about people. It's about the families we've helped find their dream homes, the communities we've helped build, and the countless lives we've touched along the way. It's about the enduring relationships we've forged with our clients, built on trust, transparency, and mutual respect<br>
                    As we look to the future, we remain steadfast in our commitment to innovation, sustainability, and social responsibility. With each project we undertake, we strive to push the boundaries of architectural excellence, while also prioritizing environmental stewardship and community engagement.<br>
                    Join us as we continue to write the next chapter of our story – a story of innovation, inspiration, and enduring excellence. At Luxe Haven Homes, the journey towards extraordinary living has only just begun.
                </p>
            </div>
            <div class="content2">
                <div class="first">
                    <img src="../../images/mission1.png" alt="Mission">
                    <div>
                        <h2>Our Mission</h2>
                        <p>"At Luxe Haven Homes, our mission is simple: to redefine real estate with excellence.
                            We're committed to crafting exceptional living spaces that inspire, enrich, and empower our residents and communities. Welcome to a world where luxury meets purpose, and every home is a testament to our unwavering dedication to quality and innovation."</p>
                    </div>


                </div>
                <div class="secound">
                    <div>
                        <h2>Our Vision</h2>
                        <p>"At Luxe Haven Homes, our vision is to be recognized as a premier developer of iconic landmarks that redefine the skyline and inspire generations to come. We aspire to set new standards of excellence in architectural design, sustainable development, and community engagement, shaping the future of real estate with innovation, integrity, and vision."</p>

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
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-instagram"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
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
           <p>COPYRIGHT 2024 Luxe HAVEN HOMES HOLDING PVT LTD.<br>
            ALL RIGHTS RESERVED.<br>
           WEBSITE MAINTAINTENANCE BY R & Y  </P>
        </div>
    <script src="../../frontend/user/app.js"></script>

</body>

</html>