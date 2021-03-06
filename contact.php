<?php
session_start();
require 'db_connection.php';
require 'insert_contact.php';
//require 'send_contact_email.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/icon.png" />
</head>
<body>
<!--Creating Nav Bar-->
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
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="contact.php">Contact Us</a>
                </li>
                <!--                 <li>-->
                <!--                    <a href="#">Services</a>-->
                <!--                 </li>-->
                <li>
                    <a class="nav-btn-container" href="userlogin.php">Log in</a>
                </li>
            </ul>
    </div>
    </nav>
</div>
<div class="header_contact">
    <div id="column_header">
        <form action="" method="post">
            <div class="container">
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter your name" id="username" name="name" required>

              <label for="email"><b>Email</b></label>
              <input type="email" placeholder="Enter email" id="email1" name="email" required>

              <label for="subject"><b>Subject</b></label>
              <input type="text" placeholder="Enter Subject" id="date" name="subject" required>

              <label for="message"><b>Message</b></label>
              <textarea placeholder="Enter Subject" id="message" name="message" required></textarea>

              <button type="submit">Send Message</button>
            </div>
        </form>
        <?php
        if(isset($success_message)){
            echo '<div class="success_message">'.$success_message.'</div>';
        }
        if(isset($error_message)){
            echo '<div class="error_message">'.$error_message.'</div>';
        }
        ?>
    </div>
    <div id="column_header">
<!--        <a target="_blank" class="social-icon" href="https://facebook.com"><i class="fab fa-facebook"></i></a>-->
<!--        <a target="_blank" class="social-icon" href="https://instagram.com"><i class="fab fa-instagram"></i></a>-->
<!--        <a target="_blank" class="social-icon" href="https://twitter.com"><i class="fab fa-twitter"></i></a><br>-->
        <span id="contact_image">
            <img src="images/contacts.jpg" alt="food haven contact us" height="460px" width="600px">
        </span>
<!--        <h3 id="contact">Contact Information</h3>-->
<!--        <p>Telephone: +254 727 444 777<br>-->
<!--            Mobeil: +971 52 612 8949<br>-->
<!--            Email: shop@foodhaven.co.ke</p>-->
    </div>
</div>
<div class="footer">
    <div id="column_footer">
        <div id="column">
            <h3 style="padding-top: 10px">Useful Links</h3>
            <p>
                <a href="index.php">Home</a><br>
                <a href="about.php">About</a><br>
                <a href="contact.php">Contact Us</a>
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
                <a target="_blank" id="email" href="mailto:shop@foodhaven.co.ke">shop@foodhaven.co.ke</a><br>
                Nairobi, Kenya
            </p>
            <a target="_blank" class="social-icon" href="https://facebook.com"><i class="fab fa-facebook"></i></a>
            <a target="_blank" class="social-icon" href="https://instagram.com"><i class="fab fa-instagram"></i></a>
            <a target="_blank" class="social-icon" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    <div class="copyright">
        <p>?? Copyright 2022 Food Haven | Privacy Policy | Terms and Conditions</p>
    </div>
</div>
</body>
</html>
