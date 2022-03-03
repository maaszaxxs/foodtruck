<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
    header('Location: home.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Footmarkz.com</title>
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
<div class="navbar">
    <nav class="nav-menu">
        <div class="wrapper">
            <nav>
                <div class="icon">
                    <img src="images/icon.png" alt="icon"><br>
                    FOODIES HAVEN
                </div>
                <ul class="nav-link">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <!--                 <li>-->
                    <!--                    <a href="#">Services</a>-->
                    <!--                 </li>-->
                    <li>
                        <a class="nav-btn-container" href="signup.php">Sign Up</a>
                    </li>
                </ul>
        </div>
    </nav>
</div>
<form action="" method="post">
    <h2>User Login</h2>

    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter email" id="email" name="user_email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter password" id="password" name="user_password" required>

        <button type="submit">Login</button>
    </div>
    <?php
    if(isset($success_message)){
        echo '<div class="success_message">'.$success_message.'</div>';
    }
    if(isset($error_message)){
        echo '<div class="error_message">'.$error_message.'</div>';
    }
    ?>
<!--    <div class="container" style="background-color:#f1f1f1">-->
<!--        <a href="signup.php"><button type="button" class="Regbtn">Create an account</button></a>-->
<!--    </div>-->
</form>
<div class="footer">
    <h3 style="padding-top: 10px">Connect With Us</h3>
    <p>
        +254 727 444 777<br>
        <a target="_blank" id="email" href="mailto:shop@gfoodhaven.co.ke">shop@foodhaven.co.ke</a><br>
        Nairobi, Kenya
    </p>
    <a target="_blank" class="social-icon" href="https://facebook.com"><i class="fab fa-facebook"></i></a>
    <a target="_blank" class="social-icon" href="https://instagram.com"><i class="fab fa-instagram"></i></a>
    <a target="_blank" class="social-icon" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
    <p id="copyright">© Copyright 2022 Food Haven | Privacy Policy | Terms and Conditions</p>
</div>
</body></html>
