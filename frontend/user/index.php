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
                    <a href="../../frontend/user/foodMenu.php">
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
    <div class="home">
        <div class="main_slide">
            <div>
                <h1>Enjoy <span>Delicious Food</span> is Your Healthy Life.</h1>
              
            </div>
            <div>
                <img src="../../images/hom1.png" alt="house1s">
            </div>
        </div>
        <div class="food-items">
            <div class="item">
                <div>
                    <img src="../../images/burger.jpg" alt="food item">
                </div>
                <h3>Burger</h3>
                <p>chicken burgur with spicy chicken and potato chips </p>
                <form method='POST' action='../../frontend/user/foodMenu.php'>
                    <button type="submit" class="red_btn">See Menu</button>
                </form>
            </div>
            <div class="item">
                <div>
                    <img src="../../images/home1.avif" alt="food item">
                </div>
                <h3>Cheese Koththu</h3>
                <p>Using curd instead of cheese, this kottu has a tart kick that's also fatty and milky in a way that works with spices at play</p>
                <form method='POST' action='../../frontend/user/foodMenu.php'>
                    <button type="submit" class="red_btn">See Menu</button>
                </form>
            </div>
            <div class="item">
                <div>
                    <img src="../../images/biriyani.jpg" alt="food item">
                </div>
                <h3>Biriyani</h3>
                <p>Biryani, flavourful rice dish of Persian origin that has become a popular celebratory dish in South Asia</p>
                <form method='POST' action='../../frontend/user/foodMenu.php'>
                    <button type="submit" class="red_btn">See Menu</button>
                </form>
            </div>
        </div>
        <div class="main_slide2">
            <div class="foodimg">
                <img src="../../images/chicken devel.jpg" alt="">
            </div>
            <div class="question">
                <div>
                    <h2>Why people chose us?</h2>
                </div>
                <div>
                    <div class="q-ans">
                        <div>
                            <img src="../../images/fried fish.jpg" alt="">
                        </div>
                        <div>
                            <h4>Choose your favorite</h4>
                            <p>Fresh, Locally Sourced Ingredients</p>
                        </div>
                    </div>
                    <div class="q-ans">
                        <div>
                            <img src="../../img/fries.jpeg" alt="">
                        </div>
                        <div>
                            <h4>Choose your favorite</h4>
                            <p>Attentive and Friendly Service </p>
                        </div>
                    </div>
                    <div class="q-ans">
                        <div>
                            <img src="../../img/bev.jpeg" alt="">
                        </div>
                        <div>
                            <h4>Choose your favorite food</h4>
                            <p>Food for valuve for money</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_slide3">
            <div class="fav-head">
                <h3>Our Popular Food Items</h3>
                <p></p>
            </div>
            <div class="fav-food">
                <div class="item">
                    <div>
                        <img src="../../images/cheese-kottu.png" alt="">
                    </div>
                    <h3>Cheese Koththu</h3>
                    <p>Using curd instead of cheese, this kottu has a tart kick that's also fatty and milky in a way that works with spices at play</p>
                    <p class="fav-price">Rs800</p>
                </div>
                <div class="item">
                    <div>
                        <img src="../../images/biriyani.jpg" alt="">
                    </div>
                    <h3>Biriyani</h3>
                    <p>Biryani, flavourful rice dish of Persian origin that has become a popular celebratory dish in South Asia</p>
                    <p class="fav-price">Rs1200</p>
                </div>
                <div class="item">
                    <div>
                        <img src="../../images/chicken_fried_rice00032a-1200x1200-1.jpg" alt="">
                    </div>
                    <h3>Chicken friedrice</h3>
                    <p>Devil chicken,chopsi and chilipate</p>
                    <p class="fav-price">Rs800</p>
                </div>
                <div class="item">
                    <div>
                        <img src="../../images/chicken dramstic.jpg" alt="">
                    </div>
                    <h3>Chicken Dramstic</h3>
                    <p>10pcs of chicken dramstic bucket</p>
                    <p class="fav-price">Rs1800</p>
                </div>
            </div>
            <div class="dsgn"></div>
        </div>
        <div class="main_slide4">
            <div class="chef-feed">
                <h2>Customer <span style="color: red;">Feedback</span></h2>
                <p>I recently had the pleasure of dining at this amazing restaurant, and I must say it was an absolute delight. From the moment I walked in, the ambiance was welcoming and comforting. The decor was tasteful and set the perfect mood for a delightful meal</p>
                <div class="chef-detail">
                    <div>
                        <img src="../../images/download.jpeg" alt="">
                    </div>
                    <div>
                        <h6>HD Creations</h6>
                        <p>Web Developer</p>
                    </div>
                </div>

            </div>
            <div class="chef">
                <img src="../../images/chef.jpg" alt="chef">
            </div>
        </div>
        <div class="letter">
            <div class="letter-head">
                <h2>Submit <span>Review</span></h2>
            </div>
            <form method="POST" action="../../backend/user/reviewP.php">
                <div class="letter-input">

                    <div>
                        <input type="text" name="review" placeholder="Rate Us" required>
                    </div>
                    <button type="submit" class="red_btn">Submit</button>

                </div>
            </form>
        </div>

        <div class="reviews">
            <?php
            include_once '../../backend/user/dbs.php';  // Include your database connection file
            $sql = "SELECT review,userName FROM review;";

            $result = mysqli_query($connect, $sql);

            while ($row = $result->fetch_assoc()) {
                // Access the data by column name
                $column1Value = $row["review"];
                $column2Value = $row["userName"];

                // Do something with the data
                echo "<p>Review: $column1Value<br> user: $column2Value<br></p>";
            }


            $connect->close();

            ?>

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
           WEBSITE MAINTAINTENANCE BY R & Y  </P>
        </div>
    <script src="../../frontend/user/app.js"></script>
    <script src="../../frontend/user/search.js"></script>
</body>

</html>