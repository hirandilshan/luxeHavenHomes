<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/signup.css">

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
        </div>
    </header>
    <div class="content">
        <div class="forms">

            <div class="form-details">
                <p class="sin">SIGN UP</p>
                <p class="luxe">LUXE HAVEN HOMES</p>
            </div>
            <div class="form-content">

                <form method="POST" action="../../backend/user/signupP.php">
                    <div class="inputs">
                        <input type="text" name="firstName" placeholder="First Name" required>

                    </div>
                    <div class="inputs">
                        <input type="text" name="lastName" placeholder="Last Name" required>

                    </div>
                    <div class="inputs">
                        <input type="email" name="email" placeholder="E-mail" required>

                    </div>
                    <div class="inputs">
                        <input type="password" required name="password" placeholder="Password" required>

                    </div>

                    <button type="submit" name="submit">SIGN UP</button>
                </form>
                <div class="link">
                    Already have an account?
                    <a href="../../frontend/user/login.php" id="login-link">SIGNIN</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-2">
        <p>COPYRIGHT 2024 LUXE HAVEN HOMES HOLDING PVT LTD.<br>
            ALL RIGHTS RESERVED.<br>
            WEBSITE MAINTAINTENANCE BY R & Y </P>
    </div>
    <script src="../../frontend/user/app.js"></script>

</body>

</html>