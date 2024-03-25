<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/login.css">
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
                <a href="#">
                    <li>
                        <i class="material-icons" id="search-icon1">&#xe8b6;</i>
                    </li>
                </a>
                
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
    


</div>
</header>
    <div class="content">
        <div class="forms">
            <div class="form-details">
                <h2>Welcome to <br>Luxe Haven Homes</h2>
                <p>Please log in using your personal information to stay connected with us.</p>
            </div>
            <div class="form-content">

                <form method="POST" action="../../backend/user/loginP.php">
                    <div class="inputs">
                        <input type="email" name="email" placeholder="E-mail" required>
                        <label>Email</label>
                    </div>
                    <div class="inputs">
                        <input type="password" required name="password" placeholder="password" required>
                        <label>Password</label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password?</a>
                    <button type="submit">Log In</button>
                </form>
                <div class="link">
                    Don't have an account?
                    <a href="../../frontend/user/signup.php" id="signup-link">Signup</a>
                </div>
            </div>
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