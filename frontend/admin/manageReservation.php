<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/manageReservations.css">
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
    <div class="content">
        <div class="intro">
            <div class="intro-topic">
                <h1>Manage Reservations</h1>
            </div><!--intro Img-->

        </div>
        <?php
        include_once '../../backend/user/dbs.php';  // Include your database connection file
        $sql = "SELECT * FROM register;";
        $result = mysqli_query($connect, $sql);

        echo '<table>';
        echo '<tr><th>Registation ID</th><th>Date</th><th>Time</th><th>Table Number</th><th>Username</th><th>Remove</th></tr>';

        while ($row = $result->fetch_assoc()) {
            // Access the data by column name
            $regId = $row["regId"];
            $date = $row["date"];
            $time = $row["time"];
            $table_num = $row["table_num"];
            $userName = $row["userName"];

            echo '<tr>';
            echo "<td>$regId</td>";
            echo "<td>$date</td>";
            echo "<td>$time</td>";
            echo "<td>$table_num</td>";
            echo "<td>$userName</td>";
            echo "<td>";
            echo "<form method='POST' action='../../backend/admin/manageReservationP.php'>";
            echo "<input type='hidden' name='regId' value='$regId'>";
            echo "<button type='submit' name='remove'>Remove</button>";
            echo "</form>";
            echo "</td>";
            echo '</tr>';
        }

        echo '</table>';


        $connect->close();

        ?>
    </div>
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