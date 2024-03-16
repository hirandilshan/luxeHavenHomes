<?php
session_start();
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
        <div class="main_slide">
            <div>
                <h1>Enjoy <span>Delicious Food</span> is Your Healthy Life.</h1>
              
            </div>
            <div>
                <img src="../../../images/hom1.png" alt="house1s">
            </div>
        </div>
        <div class="menu">

        <div class="list">
            <a href="../../../frontend/user/menu.php">Back to Menu</a>

            <div class="section">
                <img src="../../../../img/buger.jpeg" alt="option1">
                <a href="buyLands.php">Buy Lands</a>
            </div>
            <div class="section">
                <img src="../../../img/nuggets.jpeg" alt="option2">
                <a href="buyHouses.php">Buy Houses</a>
            </div>
            <div class="section">
                <img src="../../../img/salads.jpeg" alt="option3">
                <a href="buyAccessories.php">Buy Accessories</a>
            </div>
            <div class="section">
                <img src="../../../img/fries.jpeg" alt="option4">
                <a href="buyFurnitures.php">Buy Furnitures</a>
            </div>
           
        </div>



        <div class="choice">
            <p>Buy Lands</p>
            <div class="foods">



                <?php
                include_once '../../../backend/user/dbs.php';  // Include your database connection file
                $sql = "SELECT * FROM foods WHERE foodType='Burgers';";
                $result = mysqli_query($connect, $sql);



                while ($row = $result->fetch_assoc()) {
                    // Access the data by column name

                    $itemId = $row["foodId"];
                    $item = $row["item"];
                    $img = $row["img"];
                    $price = $row["price"];

                    echo '<div class="food-item">';
                    echo "<img src='$img' alt='Food 1'>";
                    echo "<h3> $item</h3>";
                    echo "<h4>Rs $price</h4>";
                    echo "<form method='POST' action='../../backend/user/cartP.php'>";
                    echo "<input type='hidden' name='foodId' value='$itemId'>";
                    echo "<input type='hidden' name='item' value='$item'>";
                    echo "<input type='hidden' name='price' value='$price'>";
                    echo "<button type='submit' name='addToCart'>See More</button>";
                    echo "</form>";
                    echo '</div>';
                }


                $connect->close();

                ?>
            </div><!--foods-->
        </div><!--choice-->
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
    
</body>

</html>