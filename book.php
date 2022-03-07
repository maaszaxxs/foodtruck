<?php
session_start();
require 'db_connection.php';
require 'insert_booking.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking</title>
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <style>
        a, a:visited{
            color: #0000EE;
        }
        a:hover{
            color: #EE0000;
        }
    </style>
</head>
<body>

<!--Nav Bar-->
<div class="navbar">
    <!--        <nav class="nav-menu">-->
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
                    <a href="book.php">Booking</a>
                </li>
<!--                <li>-->
<!--                    <a href="contact.php">Contact Us</a>-->
<!--                </li>-->
                <!--                 <li>-->
                <!--                    <a href="#">Services</a>-->
                <!--                 </li>-->
                <li>
                    <a class="nav-btn-container" href="logout.php">Log Out</a>
                </li>
            </ul>
    </div>
    </nav>
</div>

<!--Form-->
  <form action="" method="post">
    <h2>Book</h2>

    <div class="container">
        <label for="username"><b>Name</b></label>
        <input type="text" placeholder="Enter your name" id="username" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter email" id="email1" name="email" required>

        <label for="date"><b>Date</b></label>
        <input type="date" placeholder="Enter date" id="date" name="date" required>

        <label for="service"><b>Services</b></label>
        <select name="services" id="service">
            <option value="Outside Catering">Outside Catering</option>
            <option value="Event Catering">Event Catering</option>
            <option value="Meal Plan">Meal Plans</option>
<!--            <option value="audi">Audi</option>-->
        </select>
        <br><br>

        <button type="submit"><h3>Book</h3></button>
    </div>
    <?php
    if(isset($success_message)){
        echo '<div class="success_message">'.$success_message.'</div>';
    }
    if(isset($error_message)){
        echo '<div class="error_message">'.$error_message.'</div>';
    }
    ?>
<!--footer-->
<div class="footer">
    <div id="column_footer">
        <div id="column">
            <h3 style="padding-top: 10px">Useful Links</h3>
            <p>
                <a href="index.php">Home</a><br>
                <a href="book.php">Booking</a><br>
<!--                <a href="contact.php">Contact Us</a>-->
            </p>
        </div>
        <div id="column">
            <h3 style="padding-top: 10px">About Us</h3>
            <p>
                We are a premier dining experience with various popup locations around Nairobi.<br> We provide event catering from office parties, family functions, art functions to outdoor concerts.<br>Our friendly staff always provide the best service at affordable rates.
            </p>
        </div>
        <div id="column">
            <h3 style="padding-top: 10px">Connect With Us</h3>
            <p>
                +254 727 444 777<br>
                <a target="_blank" id="email" href="mailto:shop@gfoodhaven.co.ke">shop@foodhaven.co.ke</a><br>
                Nairobi, Kenya
            </p>
            <a target="_blank" class="social-icon" href="https://facebook.com"><i class="fab fa-facebook"></i></a>
            <a target="_blank" class="social-icon" href="https://instagram.com"><i class="fab fa-instagram"></i></a>
            <a target="_blank" class="social-icon" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    <div class="copyright">
        <p>© Copyright 2022 Food Haven | Privacy Policy | Terms and Conditions</p>
    </div>
</div>

</body>
</html>
