<?php
session_start();
include_once '../../../backend/user/dbs.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    // Sanitize and validate inputs (you should add proper validation)
    $type = mysqli_real_escape_string($connect, $_POST['type']);
    $sql = "SELECT * FROM $type;";

    $result = mysqli_query($connect, $sql);
}

mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/item.css">
    <link rel="stylesheet" href="../../css/adminH.css">
    <link rel="stylesheet" href="../../css/buy.css">
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
                        if (isset($_SESSION['isAdminLogedIn'])) {
                            echo '<li><a href="../../../backend/user/logoutP.php">Log Out</a></li>';
                        } else {
                            echo "<script>alert('please login!'); window.location.href = '../../../frontend/user/logIn.php';</script>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="nav">
                    <ul>
                    <a href="../manageAds/removeAds.php">
                            <li>Remove Ads</li>
                        </a>
                        <a href="../manageAds/uploadAds.php">
                            <li>Upload Ads</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="logo">
                <a href="../../../frontend/admin/adminHome.php"><img src="../../../images/luxeLogo.jpg" alt="" ,height="100" , width="50"></a>
            </div>
            <div class="nav">
                <ul>

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
                    if (isset($_SESSION['isAdminLogedIn'])) {
                        echo '<li><a href="../../../backend/user/logoutP.php">Log Out</a></li>';
                    } else {
                        echo "<script>alert('please login!'); window.location.href = '../../../frontend/user/logIn.php';</script>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>
    <div class="home">
        <div class="main_slide">
            <div>
                <h1>Remove advertisements...</h1>

            </div>
            <div class="adm">
                <img src="../../../images/remove.png" alt="house1s">
            </div>
        </div>
        <div class="choice">
        <div class="items">
            <div class="search">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label for="type">Type:</label><br>
                    <select id="type" name="type">
                        <option value="houses">Houses</option>
                        <option value="lands">Lands</option>
                        <option value="furnitures">Furnitures</option>
                        <option value="accessories">Accessories</option>
                        <option value="tools">Tools</option>
                        <option value="profesionals">Profesionals</option>
                        <option value="supplements">Supplements</option>
                    </select><br>
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
                    $imagePathsStr = $row["img"];
                    $phone = $row["phone"];

                    $imagePaths = array();
                    $imagePaths = explode(",", $imagePathsStr);


                    echo '<div class="display-item">';
                    echo "<img src='$imagePaths[0]' alt='image'>";
                    echo "<h3>$name</h3>";
                    echo "<h4>Rs $price</h4>";
                    echo "<form method='POST' action='../../../backend/admin/removeAd.php'>";
                    if ($type == 'apartments' || $type == 'cProperties') {
                        echo "<input type='hidden' name='type' value='houses'>";
                    } else {
                        echo "<input type='hidden' name='type' value='$type'>";
                    }

                    echo "<input type='hidden' name='id' value='$id'>";
                    echo "<button type='submit' name='remove'>Remove Ad</button>";
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
    <script src="../../../frontend/user/app.js"></script>

</body>

</html>