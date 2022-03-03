<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

    $user_email = $_SESSION['user_email'];
    $get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
    $userData =  mysqli_fetch_assoc($get_user_data);

}else{
    header('Location: logout.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
    <title>Home</title>
    <style>
        a, a:visited{
            color: #0000EE;
        }
        a:hover{
            color: #EE0000;
        }
    </style>
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
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Booking</a>
                    </li>
                    <li>
                        <a href="#">Orders</a>
                    </li>
<!--                    <li>-->
<!--                        <a href="#">Services</a>-->
<!--                    </li>-->
                    <li>
                        <a class="nav-btn-container" href="logout.php">Log Out</a>
                    </li>
                </ul>
        </div>
    </nav>
</div>
    <h1 id="username">Hello, <?php echo $userData['username'];?></h1>

<!--    <a href="logout.php">Logout</a>-->

 <div class="header">

    <h1 id="hungry">Welcome to Food Haven</h1>
    <h1 id="discover">You can reserve our services or order directly</h1>
    <p id="best">We aim to satisfy all your catering needs at your doorstep</p>
 </div>
  <div class="button1">
      <button id="GetStarted" type="submit" name="Get Started"><a href="book.php"><h1>Reserve Services</h1></a></button>
      <button id="OrderNow" type="submit" name="Order Now"><a href="order.php"><h1>Order Now</h1></a></button>
    </div>
<div class="ellipse">
    <div class="ellipse1">
        <img id="burger" src="images/burger.png" alt="burger image">
    </div>
    <div class="ellipse2">
        <img id="foodtruck" src="images/foodtruck.png" alt="food truck image">
    </div>
</div>
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
</body>
</html>
